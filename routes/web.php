<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('master_jenis_pembayaran', Master_JenisPembayaranController::class);
Route::resource('master_jenis_registrasi', Master_JenisRegistrasiController::class);
Route::resource('master_layanan', Master_LayananController::class);
Route::resource('master_pasien', Master_PasienController::class);
Route::resource('master_petugas', Master_PetugasController::class);
Route::resource('trx_pelayanan', Trx_PelayananController::class);
Route::resource('trx_pendaftaran', Trx_PendaftaranController::class);
