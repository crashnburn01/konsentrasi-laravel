<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pelanggan;

class pelangganController extends Controller
{
    public function show()
    {
        $tampildata = pelanggan::where('role', 'Member')->get();
        return view('kelolaPelanggan',['data'=>$tampildata]);
    }

    public function showStaff()
    {
        $tampildataAdmin = pelanggan::where('role', 'Admin')->get();
        return view('kelolaStaff',['dataAdmin'=>$tampildataAdmin]);
    }

    public function destroy($userid)
    {
        $data = metode::find($userid);
        $data->delete();

        return redirect('kelolapelanggan');
    }
}
