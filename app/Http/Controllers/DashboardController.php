<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $pegawai = DB::table('data_pegawai')->count();
        $outlet = DB::table('data_outlet')->count();
        $gula = DB::table('data_gula')->sum('stok_gula');
        $pengguna = DB::table('data_pengguna')->count();
        $pengiriman = DB::table('data_pengiriman')->count();
        $supplier = DB::table('data_supplier')->count();
        $pembelian = DB::table('data_pembelian')->count();
        $outlet = DB::table('data_outlet')->count();
        $mutasi = DB::table('data_mutasi_stok')->count();
        $gudang = DB::table('data_gudang')->count();
        return view('/dashboard', compact('pegawai', 'outlet', 'gula', 'pengguna','pengiriman','supplier','pembelian','outlet','mutasi','gudang'));
    }
}
