<?php

namespace App\Http\Controllers;

use App\Models\Pembelian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PembelianController extends Controller
{
    public function cetak(){
        $pembelian = DB::table('data_pembelian')->get();
        return view('pembelian.cetak-pembelian',compact(['pembelian']));
    }
    public function index()
    {
        $pembelian = DB::table('data_pembelian')->get();
        return view('pembelian.pembelian', compact('pembelian'));
    }
    public function create()
    {
        $out = DB::table('data_outlet')->select('id_outlet')->get();
        $peng = DB::table('data_pengiriman')->select('id_pengiriman')->get();
        $gul = DB::table('data_gula')->select('id_gula')->get();
        $peg = DB::table('data_pegawai')->select('id_pegawai')->get();
        
        return view('pembelian.create-pembelian',compact('out','peng','gul','peg'));
    }
    public function store(Request $request)
    {
        DB::table('data_pembelian')->insert([
            'id_transaksi' => $request->id_transaksi,
            'id_outlet' => $request->id_outlet,
            'id_pengiriman' => $request->id_pengiriman,
            'id_gula' => $request->id_gula,
            'id_pegawai' => $request->id_pegawai,
            'jumlah_barang' => $request->jumlah_barang,
            'total_harga' => $request->total_harga,
            'keterangan' => $request->keterangan,
        ]);
        return redirect('/pembelian');
    }
    public function edit($id)
    {
        $pem = DB::table('data_pembelian')->where('id_transaksi',$id)->first();
        $out = DB::table('data_outlet')-> where('id_outlet','!=',$pem->id_outlet)->select('id_outlet')->get();
        $peng = DB::table('data_pengiriman')-> where('id_pengiriman','!=',$pem->id_pengiriman)->select('id_pengiriman')->get();
        $gul = DB::table('data_gula')-> where('id_gula','!=',$pem->id_gula)->select('id_gula')->get();
        $peg = DB::table('data_pegawai')-> where('id_pegawai','!=',$pem->id_pegawai)->select('id_pegawai')->get();
        
        return view('pembelian.edit-pembelian', compact('pem','out','peng','gul','peg'));
    }
    public function update(Request $request, $id)
    {
        DB::table('data_pembelian')->where('id_transaksi',$id)
        ->update([
            'id_transaksi' => $request->id_transaksi,
            'id_outlet' => $request->id_outlet,
            'id_pengiriman' => $request->id_pengiriman,
            'id_gula' => $request->id_gula,
            'id_pegawai' => $request->id_pegawai,
            'jumlah_barang' => $request->jumlah_barang,
            'total_harga' => $request->total_harga,
            'keterangan' => $request->keterangan,
        ]);
        return redirect('/pembelian')->with('status', 'Berhasil Update');
    }
    public function destroy($id)
    {
        $pem = Pembelian::find($id)->delete();
        return redirect('/pembelian');
    }
}
