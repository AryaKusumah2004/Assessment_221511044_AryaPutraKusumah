<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelolaDataBarangController;
use App\Http\Controllers\KelolaDataKasirController;
use App\Http\Controllers\KelolaDataTenanController;
use App\Http\Controllers\LihatStrukController;
use App\Http\Controllers\TambahTransaksiController;

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

Route::resource('barang.create', KelolaDataBarangController::class);

// Kelola Data Kasir
Route::resource('kasir', KelolaDataKasirController::class);

// Kelola Data Tenan
Route::resource('tenan', KelolaDataTenanController::class);

// Tambah Transaksi
Route::get('transaksi/create', [TambahTransaksiController::class, 'create']);
Route::post('transaksi/store', [TambahTransaksiController::class, 'store']);

// Lihat Struk
Route::get('transaksi/{id}', [LihatStrukController::class, 'show']);
