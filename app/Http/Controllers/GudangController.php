<?php

namespace App\Http\Controllers;

use App\Models\Gudang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GudangController extends Controller
{
    public function cetak(){
        $gudang = DB::table('data_gudang')->get();
        return view('gudang.cetak-gudang',compact(['gudang']));
    }
    public function index()
    {
        $gudang = DB::table('data_gudang')->get();
        return view('gudang.gudang', compact('gudang'));
    }
    public function create()
    {
        return view('gudang.create-gudang');
    }
    public function store(Request $request)
    {
        DB::table('data_gudang')->insert([
            'id_gudang' => $request->id_gudang,
            'nama_gudang' => $request->nama_gudang,
            'alamat_gudang' => $request->alamat_gudang,
            ]);
        return redirect('/gudang')->with('status','Data berhasil ditambah');
    }
    public function edit($id)
    {
        $gud = DB::table('data_gudang')->where('id_gudang',$id)->first();
        return view('gudang.edit-gudang', compact('gud'));
    }
    public function update(Request $request, $id)
    {
        DB::table('data_gudang')->where('id_gudang',$id)
        ->update([
            'id_gudang' => $request->id_gudang,
            'nama_gudang' => $request->nama_gudang,
            'alamat_gudang' => $request->alamat_gudang,
            ]);
        return redirect('/gudang')->with('status', 'Berhasil Update');
    }
    public function destroy($id)
    {
        $gud = Gudang::find($id)->delete();
        return redirect('/gudang');
    }
}
