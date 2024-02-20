<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\kategoriController;
use App\Http\Controllers\produkController;
use App\Http\Controllers\metodeController;
use App\Http\Controllers\pelangganController;
use App\Http\Controllers\keloladataController;
use App\Http\Controllers\laporanpesananController;

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

Route::get('/', function () {
    return view('index');
});


Route::get('/kelolalaporan', function () {
    return view('kelolaLaporan');
});



// Kategori
Route::get('/kelolakategori',[kategoriController::class, 'show']);

Route::get('/kategori/create',[kategoriController::class, 'create']);
Route::post('/kategori/create',[kategoriController::class, 'store']);

Route::get('/kategori/{idkategori}/edit',[kategoriController::class, 'edit']);
Route::put('/kategori/{idkategori}/edit',[kategoriController::class, 'update'])->name('kategori.update');

Route::get('/kategori/{idkategori}/hapus',[kategoriController::class, 'destroy']);

// Produk
Route::get('/kelolaproduk',[produkController::class, 'show']);

Route::get('/produk/create',[produkController::class, 'create']);
Route::post('/produk/create',[produkController::class, 'store']);

Route::get('/produk/{idproduk}/edit',[produkController::class, 'edit']);
Route::put('/produk/{idproduk}/edit',[produkController::class, 'update'])->name('produk.update');

Route::get('/produk/{idproduk}/hapus',[produkController::class, 'destroy']);

// Metode
Route::get('/kelolametode',[metodeController::class, 'show']);

Route::get('/metode/create',[metodeController::class, 'create']);
Route::post('/metode/create',[metodeController::class, 'store']);

Route::get('/metode/{no}/edit',[metodeController::class, 'edit']);
Route::put('/metode/{no}/edit',[metodeController::class, 'update'])->name('metode.update');

Route::get('/metode/{no}/hapus',[metodeController::class, 'destroy']);

// Pelanggan
Route::get('/kelolapelanggan',[pelangganController::class, 'show']);
Route::get('/pelanggan/{userid}/hapus',[pelangganController::class, 'destroy']);

// Staff
Route::get('/kelolastaff',[pelangganController::class, 'showStaff']);
Route::get('/staff/{userid}/hapus',[pelangganController::class, 'destroy']);

// Kelola Data
Route::get('/keloladata',[keloladataController::class, 'show']);

// Kelola Laporan
Route::get('/kelolalaporan',[laporanpesananController::class, 'show']);