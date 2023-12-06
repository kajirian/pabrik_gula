<?php

namespace App\Http\Controllers;

use App\Models\Pengiriman;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PengirimanController extends Controller
{
    public function cetak(){
       $pengiriman = DB::table('data_pengiriman')->get();
    return view('pengiriman.cetak-pengiriman',compact('pengiriman'));
    }
   
    public function index()
    {
        $pengiriman = DB::table('data_pengiriman')->get();
        return view('pengiriman.pengiriman', compact('pengiriman'));
    }
    public function create()
    {
        $peg = DB::table('data_pegawai')->select('id_pegawai')->get();
        $out = DB::table('data_outlet')->select('id_outlet')->get();
        
        return view('pengiriman.create-pengiriman',compact('peg','out'));
    }
    public function store(Request $request)
    {
        DB::table('data_pengiriman')->insert([
            'id_pengiriman' => $request->id_pengiriman,
            'tgl_pengiriman' => $request->tgl_pengiriman,
            'total_berat_gula' => $request->total_berat_gula,
            'id_pegawai' => $request->id_pegawai,
            'id_outlet' => $request->id_outlet,
        ]);
        return redirect('/pengiriman')->with('status','Data berhasil ditambah');
    }
    public function edit($id)
    {
        $man = DB::table('data_pengiriman')->where('id_pengiriman',$id)->first();
        $peg = DB::table('data_pegawai')-> where('id_pegawai','!=',$man->id_pegawai)->select('id_pegawai')->get();
        $out = DB::table('data_outlet')-> where('id_outlet','!=',$man->id_outlet)->select('id_outlet')->get();
        return view('pengiriman.edit-pengiriman', compact('man','peg','out'));
    }
    public function update(Request $request, $id)
    {
        DB::table('data_pengiriman')->where('id_pengiriman',$id)
        ->update([
            'id_pengiriman' => $request->id_pengiriman,
            'tgl_pengiriman' => $request->tgl_pengiriman,
            'total_berat_gula' => $request->total_berat_gula,
            'id_pegawai' => $request->id_pegawai,
            'id_outlet' => $request->id_outlet,
        ]);
        return redirect('/pengiriman')->with('status', 'Berhasil Update');
    }
    public function destroy($id)
    {
        $man = pengiriman::find($id)->delete();
        return redirect('/pengiriman');
    }
}
