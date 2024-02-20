<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pelanggan;
use App\Models\cart;
use App\Models\detailorder;
use App\Models\produk;

class laporanpesananController extends Controller
{
    public function show()
    {
        $data = cart::join('login', 'cart.userid', '=', 'login.userid')
            ->where('cart.status', 'Selesai')
            ->orderBy('cart.idcart', 'ASC')
            ->get();        

        foreach ($data as $key => $p) {
            $count = detailorder::join('produk', 'produk.idproduk', '=', 'detailorder.idproduk')
                ->where('orderid', $p->orderid)
                ->orderBy('detailorder.idproduk', 'ASC')
                ->selectRaw('SUM(detailorder.qty * produk.hargaafter) AS count')
                ->value('count');
        
            $data[$key]->count = $count ? number_format($count+10000) : 'No Data';

        }
        return view('kelolaLaporan', compact('data'));
    }
}
