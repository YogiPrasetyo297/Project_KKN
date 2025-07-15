<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UMKMController;
use App\Http\Controllers\Admin\ProdukController;
use App\Http\Controllers\Admin\AspirasiController;
use App\Http\Controllers\Admin\VerifikasiController;
use App\Http\Controllers\Admin\DashboardController;

// Route default dari Laravel Breeze
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// ✅ Semua route admin dibungkus satu group saja
Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    Route::resource('/umkm', UMKMController::class);
    Route::resource('/produk', ProdukController::class);
    Route::resource('/aspirasi', AspirasiController::class);

    Route::get('/verifikasi', [VerifikasiController::class, 'index'])->name('admin.verifikasi');
    Route::get('/verifikasi/setuju/{id}', [VerifikasiController::class, 'setuju'])->name('verifikasi.setuju');
    Route::get('/verifikasi/tolak/{id}', [VerifikasiController::class, 'tolak'])->name('verifikasi.tolak');
});
