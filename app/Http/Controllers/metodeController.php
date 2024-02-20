<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\metode;

class metodeController extends Controller
{
    public function show()
    {
        $tampildata = metode::All();
        return view('kelolaMetode',['data'=>$tampildata]);
    }

    public function create()
    {
        return view('inputMetode');
    }

    public function store(Request $request)
    {
        $request->validate([
            'metode'=>'required',
            'norek'=>'required',
            'logo'=>'required',
            'an'=>'required',
        ]);

        $data = new metode();
        $data -> metode = $request -> metode;
        $data -> norek = $request -> norek;
        $data -> logo = $request -> logo;
        $data -> an = $request -> an;
        
        $data -> save();
        return redirect('kelolametode');
    }

    public function edit(Request $request)
    {
        $data = metode::find($request->no);
        return view('editMetode', compact('data'));
    }

    public function update(Request $request, $no)
    {
        $data = metode::find($no);
        $data->metode = $request->metode;
        $data->norek = $request->norek;
        $data->an = $request->an;
        $data->logo = $request->logo;

        $data->save();
        return redirect('kelolametode');
    }

    public function destroy($no)
    {
        $data = metode::find($no);
        $data->delete();

        return redirect('kelolametode');
    }
}
