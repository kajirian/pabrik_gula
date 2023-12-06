<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    public function cetak(){
        $pegawai = DB::table('data_pegawai')->get();
        return view('pegawai.cetak-pegawai',compact(['pegawai']));
    }
    public function index()
    {
        $pegawai = DB::table('data_pegawai')->get();
        return view('pegawai.pegawai', compact('pegawai'));
    }
    public function create()
    {
        $pengguna = DB::table('data_pengguna')->select('id_pengguna')->get();
        return view('pegawai.create-pegawai',compact('pengguna'));
    }
    public function store(Request $request)
    {
        DB::table('data_pegawai')->insert([
            'id_pegawai' => $request->id_pegawai,
            'nama_pegawai' => $request->nama_pegawai,
            'jenis_kelamin' => $request->jenis_kelamin,
            'jabatan' => $request->jabatan,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            'id_pengguna' => $request->id_pengguna,
            'username' => $request->username,
            'password' => $request->password,
            'email' => $request->email,
        ]);
        return redirect('/pegawai');
    }
    public function edit($id)
    {
        $peg = DB::table('data_pegawai')->where('id_pegawai',$id)->first();
        $pengguna = DB::table('data_pengguna')-> where('id_pengguna','!=',$peg->id_pengguna)->select('id_pengguna')->get(); 
        return view('pegawai.edit-pegawai', compact('peg','pengguna'));
    }
    public function update(Request $request, $id)
    {
        DB::table('data_pegawai')->where('id_pegawai',$id)
        ->update([
            'id_pegawai' => $request->id_pegawai,
            'nama_pegawai' => $request->nama_pegawai,
            'jenis_kelamin' => $request->jenis_kelamin,
            'jabatan' => $request->jabatan,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            'id_pengguna' => $request->id_pengguna,
            'username' => $request->username,
            'password' => $request->password,
            'email' => $request->email,
        ]);
        return redirect('/pegawai')->with('status', 'Berhasil Update');
    }
    public function destroy($id)
    {
        $peg = Pegawai::find($id)->delete();
        return redirect('/pegawai');
    }
}
