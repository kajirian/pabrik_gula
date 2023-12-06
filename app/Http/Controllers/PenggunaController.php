<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function cetak(){
        $pengguna = DB::table('data_pengguna')->get();
        return view('pengguna.cetak-pengguna',compact('pengguna'));
    }
    public function index()
    {
        $pengguna = DB::table('data_pengguna')->get();
        return view('pengguna.pengguna', compact('pengguna'));
    }
    public function create()
    {
        return view('pengguna.create-pengguna');
    }
    public function store(Request $request)
    {
        DB::table('data_pengguna')->insert([
            'id_pengguna' => $request->id_pengguna,
            'nama' => $request->nama,
            'jabatan' => $request->jabatan
        ]);
        return redirect('/pengguna')->with('status','Data berhasil ditambah');
    }
    public function edit($id)
    {
        $peng = DB::table('data_pengguna')->where('id_pengguna',$id)->first();
        return view('pengguna.edit-pengguna', compact('peng'));
    }
    public function update(Request $request, $id)
    {
        DB::table('data_pengguna')->where('id_pengguna',$id)
        ->update([
            'id_pengguna' => $request->id_pengguna,
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
        ]);
        return redirect('/pengguna')->with('status', 'Berhasil Update');
    }
    public function destroy($id)
    {
        $peg = Pengguna::find($id)->delete();
        return redirect('/pengguna');
    }
}
