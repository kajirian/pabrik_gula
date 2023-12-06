<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\OutletController;
use App\Http\Controllers\GulaController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\MutasiController;
use App\Http\Controllers\GudangController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\PengirimanController;
use App\Http\Controllers\SupplierController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Login
Route::get('/', [LoginController::class, 'index'])->name('login');
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('check_login', [LoginController::class, 'checkLogin']);
Route::get('logout', [LoginController::class, 'logout']);

//Dashboard
Route::get('/dashboard',[DashboardController::class,'index']);

//Pegawai CRUD
Route::get('/pegawai',[PegawaiController::class,'index']);
Route::get('/create-pegawai',[PegawaiController::class,'create']);
Route::post('/pegawai',[PegawaiController::class,'store']);
Route::get('/edit-pegawai/{id_pegawai}',[PegawaiController::class,'edit']);
Route::delete('/delete-pegawai/{id_pegawai}',[PegawaiController::class,'destroy']);
Route::put('/pegawai/{id_pegawai}',[PegawaiController::class,'update']);
Route::get('/cetak-pegawai',[PegawaiController::class,'cetak']);

//Outlet CRUD
Route::get('/outlet',[OutletController::class,'index']);
Route::get('/create-outlet',[OutletController::class,'create']);
Route::post('/outlet',[OutletController::class,'store']);
Route::get('/edit-outlet/{id_outlet}',[OutletController::class,'edit']);
Route::delete('/delete-outlet/{id_outlet}',[OutletController::class,'destroy']);
Route::put('/outlet/{id_outlet}',[OutletController::class,'update']);
Route::get('/cetak-outlet',[OutletController::class,'cetak']);

//Gula CRUD
Route::get('/gula',[GulaController::class,'index']);
Route::get('/create-gula',[GulaController::class,'create']);
Route::post('/gula',[GulaController::class,'store']);
Route::get('/edit-gula/{id_gula}',[GulaController::class,'edit']);
Route::delete('/delete-gula/{id_gula}',[GulaController::class,'destroy']);
Route::put('/gula/{id_gula}',[GulaController::class,'update']);
Route::get('/cetak-gula',[GulaController::class,'cetak']);

//Pengguna CRUD
Route::get('/pengguna',[PenggunaController::class,'index']);
Route::get('/create-pengguna',[PenggunaController::class,'create']);
Route::post('/pengguna',[PenggunaController::class,'store']);
Route::get('/edit-pengguna/{id_pengguna}',[PenggunaController::class,'edit']);
Route::delete('/delete-pengguna/{id_pengguna}',[PenggunaController::class,'destroy']);
Route::put('/pengguna/{id_pengguna}',[PenggunaController::class,'update']);
Route::get('/cetak-pengguna',[PenggunaController::class,'cetak']);

//Mutasi CRUD
Route::get('/mutasi',[MutasiController::class,'index']);
Route::get('/create-mutasi',[MutasiController::class,'create']);
Route::post('/mutasi',[MutasiController::class,'store']);
Route::get('/edit-mutasi/{id_mutasi}',[MutasiController::class,'edit']);
Route::delete('/delete-mutasi/{id_mutasi}',[MutasiController::class,'destroy']);
Route::put('/mutasi/{id_mutasi}',[MutasiController::class,'update']);
Route::get('/cetak-mutasi',[MutasiController::class,'cetak']);

//Gudang CRUD
Route::get('/gudang',[GudangController::class,'index']);
Route::get('/create-gudang',[GudangController::class,'create']);
Route::post('/gudang',[GudangController::class,'store']);
Route::get('/edit-gudang/{id_gudang}',[GudangController::class,'edit']);
Route::delete('/delete-gudang/{id_gudang}',[GudangController::class,'destroy']);
Route::put('/gudang/{id_gudang}',[GudangController::class,'update']);
Route::get('/cetak-gudang',[GudangController::class,'cetak']);

//Pembelian CRUD
Route::get('/pembelian',[PembelianController::class,'index']);
Route::get('/create-pembelian',[PembelianController::class,'create']);
Route::post('/pembelian',[PembelianController::class,'store']);
Route::get('/edit-pembelian/{id_transaksi}',[PembelianController::class,'edit']);
Route::delete('/delete-pembelian/{id_transaksi}',[PembelianController::class,'destroy']);
Route::put('/pembelian/{id_transaksi}',[PembelianController::class,'update']);
Route::get('/cetak-pembelian',[PembelianController::class,'cetak']);

//Pengiriman CRUD
Route::get('/pengiriman',[PengirimanController::class,'index']);
Route::get('/create-pengiriman',[PengirimanController::class,'create']);
Route::post('/pengiriman',[PengirimanController::class,'store']);
Route::get('/edit-pengiriman/{id_pengiriman}',[PengirimanController::class,'edit']);
Route::delete('/delete-pengiriman/{id_pengiriman}',[PengirimanController::class,'destroy']);
Route::put('/pengiriman/{id_pengiriman}',[PengirimanController::class,'update']);

Route::get('/cetak-pengiriman',[PengirimanController::class,'cetak']);

//Supplier CRUD
Route::get('/supplier',[SupplierController::class,'index']);
Route::get('/create-supplier',[SupplierController::class,'create']);
Route::post('/supplier',[SupplierController::class,'store']);
Route::get('/edit-supplier/{id_supplier}',[SupplierController::class,'edit']);
Route::delete('/delete-supplier/{id_supplier}',[SupplierController::class,'destroy']);
Route::put('/supplier/{id_supplier}',[SupplierController::class,'update']);
Route::get('/cetak-supplier',[SupplierController::class,'cetak']);