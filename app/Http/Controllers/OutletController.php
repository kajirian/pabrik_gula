<?php

namespace App\Http\Controllers;

use App\Models\Outlet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OutletController extends Controller
{
    public function cetak(){
        $outlet = DB::table('data_outlet')->get();
         return view('outlet.cetak_outlet',compact(['outlet']));
    }
    public function index()
    {
        $outlet = DB::table('data_outlet')->get();
        return view('outlet.outlet', compact('outlet'));
    }
    public function create()
    {
        return view('outlet.create-outlet');
    }
    public function store(Request $request)
    {
        DB::table('data_outlet')->insert([
            'id_outlet' => $request->id_outlet,
            'nama_outlet' => $request->nama_outlet,
            'alamat_outlet' => $request->alamat_outlet
        ]);
        return redirect('/outlet')->with('status','Data berhasil ditambah');
    }
    public function edit($id)
    {
        $out = DB::table('data_outlet')->where('id_outlet',$id)->first();
        return view('outlet.edit-outlet', compact('out'));
    }
    public function update(Request $request, $id)
    {
        DB::table('data_outlet')->where('id_outlet',$id)
        ->update([
            'id_outlet' => $request->id_outlet,
            'nama_outlet' => $request->nama_outlet,
            'alamat_outlet' => $request->alamat_outlet,
        ]);
        return redirect('/outlet')->with('status', 'Berhasil Update');
    }
    public function destroy($id)
    {
        $peg = outlet::find($id)->delete();
        return redirect('/outlet');
    }
}
