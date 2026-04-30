<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Halaman utama
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/produk', [PageController::class, 'produk'])->name('produk');
Route::get('/keunggulan', [PageController::class, 'keunggulan'])->name('keunggulan');
Route::get('/klien', [PageController::class, 'klien'])->name('klien');
Route::get('/kontak', [PageController::class, 'kontak'])->name('kontak');
Route::post('/kontak', [PageController::class, 'kirimPesan'])->name('kontak.send');

// Halaman Admin
Route::get('/admin/pesanan', [PageController::class, 'pesanan'])->name('admin.pesanan');
