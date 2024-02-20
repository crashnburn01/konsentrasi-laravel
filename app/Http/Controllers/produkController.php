<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kategori;
use App\Models\produk;

class produkController extends Controller
{
    public function show()
    {
        $tampilproduk = produk::select('produk.*', 'kategori.*')
        ->join('kategori', 'kategori.idkategori', '=', 'produk.idkategori')
        ->orderBy('produk.idproduk', 'ASC')
        ->get();

    return view('kelolaProduk', ['dataProduk' => $tampilproduk]);
    }

    public function create()
    {
        $kategori = kategori::orderBy('namakategori', 'ASC')->get();

        return view('inputProduk', compact('kategori'));
    }

    public function store(Request $request)
    {
        $request->validate([
            //'namakategori'=>'required',
            //'idkategori'=>'required',
            //'deskripsi'=>'required',
            //'stok'=>'required',
            //'rate'=>'required',
            //'hargaproduk'=>'required',
            //'gambar'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        $data = new produk();
        $data -> namaproduk = $request -> namaproduk;
        $data -> idkategori = $request -> idkategori;
        $data -> deskripsi = $request -> deskripsi;
        $data -> stok = $request -> stok;
        $data -> rate = $request -> rate;
        $data -> hargaafter = $request -> hargaproduk;
        $data -> gambar = $this->uploadImage($request);

        $data -> save();
        return redirect('kelolaproduk');
    }

    public function edit(Request $request)
    {
        $kategori = kategori::orderBy('namakategori', 'ASC')->get();
        $data = produk::find($request->idproduk);
        return view('editProduk', compact('data','kategori'));
    }

    public function update(Request $request, $idproduk)
    {
        $data = produk::find($idproduk);
        $data->namaproduk = $request->namaproduk;
        $data->idkategori = $request->idkategori;
        $data->deskripsi = $request->deskripsi;
        $data->stok = $request->stok;
        $data->rate = $request->rate;
        $data->hargaafter = $request->hargaproduk;

        if ($request->hasFile('gambar')) {
            $request->validate([
                'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
    
            // Hapus gambar lama sebelum menyimpan yang baru
            if ($barang->gambar && file_exists(public_path('produk/' . $data->gambar))) {
                unlink(public_path('produk/' . $data->gambar));
            }
    
            $data->gambar = $this->uploadImage($request);
        }

        $data->save();
        return redirect('kelolaproduk');
    }

    public function destroy($idproduk)
    {
        $data = produk::find($idproduk);
        $data->delete();

        return redirect('kelolaproduk');
    }

    private function uploadImage(Request $request)
    {
        $image = $request->file('gambar');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('/produk'), $imageName);
        return $imageName;
    }

}
