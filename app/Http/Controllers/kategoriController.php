<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kategori;

class kategoriController extends Controller
{
    public function show()
    {
        $tampildata = kategori::All();
        return view('kelolaKategori',['data'=>$tampildata]);
    }

    public function create()
    {
        return view('inputKategori');
    }

    public function store(Request $request)
    {
        $request->validate([
            'namakategori'=>'required|min:4',
        ]);

        $data = new kategori();
        $data -> namakategori = $request -> namakategori;
        $data -> save();
        return redirect('kelolakategori');
    }

    public function edit(Request $request)
    {
        $data = kategori::find($request->idkategori);
        return view('editKategori', compact('data'));
    }

    public function update(Request $request, $idkategori)
    {
        $data = kategori::find($idkategori);
        $data->namakategori = $request->namakategori;

        $data->save();
        return redirect('kelolakategori');
    }

    public function destroy($idkategori)
    {
        $data = kategori::find($idkategori);
        $data->delete();

        return redirect('kelolakategori');
    }
}
