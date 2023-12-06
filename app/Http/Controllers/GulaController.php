<?php

namespace App\Http\Controllers;

use App\Models\Gula;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GulaController extends Controller
{
    public function cetak(){
        $gula = DB::table('data_gula')->get();
        return view('gula.cetak-gula',compact(['gula']));
    }
    public function index()
    {
        $gula = DB::table('data_gula')->get();
        return view('gula.gula', compact('gula'));
    }
    public function create()
    {
        $gud = DB::table('data_gudang')->select('id_gudang','nama_gudang')->get();
        return view('gula.create-gula',compact('gud'));
    }
   
    public function store(Request $request)
    {
        DB::table('data_gula')->insert([
            'id_gula' => $request->id_gula,
            'jenis_gula' => $request->jenis_gula,
            'stok_gula' => $request->stok_gula,
            'id_gudang' => $request->id_gudang,
        ]);
        return redirect('/gula')->with('status','Data berhasil ditambah');
    }
    public function edit($id)
    {
        $gul = DB::table('data_gula')->where('id_gula',$id)->first();
        $gud = DB::table('data_gudang')-> where('id_gudang','!=',$gul->id_gudang)->select('id_gudang','nama_gudang')->get();
        return view('gula.edit-gula', compact('gul','gud'));
    }
    public function update(Request $request, $id)
    {
        DB::table('data_gula')->where('id_gula',$id)
        ->update([
            'id_gula' => $request->id_gula,
            'jenis_gula' => $request->jenis_gula,
            'stok_gula' => $request->stok_gula,
            'id_gudang' => $request->id_gudang
        ]);
        return redirect('/gula')->with('status', 'Berhasil Update');
    }
    public function destroy($id)
    {
        $gul = Gula::find($id)->delete();
        return redirect('/gula');
    }
}
