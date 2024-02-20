<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pelanggan;
use App\Models\cart;
use App\Models\detailorder;
use App\Models\produk;
use App\Models\konfirmasi;

class keloladataController extends Controller
{
    public function show()
    {
        $data = cart::join('login', 'cart.userid', '=', 'login.userid')
            ->whereNotIn('status', ['Cart', 'Selesai'])
            ->orderBy('cart.idcart', 'ASC')
            ->get();

        foreach ($data as $key => $p) {
            $count = detailorder::join('produk', 'produk.idproduk', '=', 'detailorder.idproduk')
                ->where('orderid', $p->orderid)
                ->orderBy('detailorder.idproduk', 'ASC')
                ->selectRaw('SUM(detailorder.qty * produk.hargaafter) AS count')
                ->value('count');

            $cekrow = konfirmasi::where('orderid', $p->orderid)->count();

            if ($cekrow > 0) {
                $status = 'Confirmed';
            } else {
                $status = $p->status != 'Pengiriman' ? 'Menunggu Konfirmasi' : 'Pengiriman';
            }

            $data[$key]->count = $count ? number_format($count+10000) : 'No Data';
            $data[$key]->status = $status;
        }

        return view('kelolaData', compact('data'));
    }
}
