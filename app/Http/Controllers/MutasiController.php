<?php

namespace App\Http\Controllers;

use App\Models\Mutasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MutasiController extends Controller
{
    public function cetak(){
        $mutasi = DB::table('data_mutasi_stok')->get();
        return view('mutasi.cetak-mutasi',compact(['mutasi']));
    }
    public function index()
    {
        $mutasi = DB::table('data_mutasi_stok')->get();
        return view('mutasi.mutasi', compact('mutasi'));
    }
    public function create()
    {
        $gul = DB::table('data_gula')->select('id_gula')->get();
        $peng = DB::table('data_pengiriman')->select('id_pengiriman')->get();
        return view('mutasi.create-mutasi',compact('gul','peng'));
    }
    public function store(Request $request)
    {
        DB::table('data_mutasi_stok')->insert([
            'id_mutasi' => $request->id_mutasi,
            'id_gula' => $request->id_gula,
            'id_pengiriman' => $request->id_pengiriman,
            'jumlah_mutasi' => $request->jumlah_mutasi,
            'keterangan' => $request->keterangan,
            'tgl_mutasi' => $request->tgl_mutasi
        ]);
        return redirect('/mutasi')->with('status','Data berhasil ditambah');
    }
    public function edit($id)
    {
        $mutasi = DB::table('data_mutasi_stok')->where('id_mutasi',$id)->first();
        $gula = DB::table('data_gula')-> where('id_gula','!=',$mutasi->id_gula)->select('id_gula')->get();
        $pengguna = DB::table('data_pengiriman')-> where('id_pengiriman','!=',$mutasi->id_pengiriman)->select('id_pengiriman','total_berat_gula')->get();
        return view('mutasi.edit-mutasi', compact('mut','gul','peng'));
    }
    public function update(Request $request, $id)
    {
        DB::table('data_mutasi_stok')->where('id_mutasi',$id)
        ->update([
            'id_mutasi' => $request->id_mutasi,
            'id_gula' => $request->id_gula,
            'id_pengiriman' => $request->id_pengiriman,
            'jumlah_mutasi' => $request->jumlah_mutasi,
            'keterangan' => $request->keterangan,
            'tgl_mutasi' => $request->tgl_mutasi
        ]);
        return redirect('/mutasi')->with('status', 'Berhasil Update');
    }
    public function destroy($id)
    {
        $mut = Mutasi::find($id)->delete();
        return redirect('/mutasi');
    }
}
