<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UMKMController;
use App\Http\Controllers\Admin\ProdukController;
use App\Http\Controllers\Admin\AspirasiController;
use App\Http\Controllers\Admin\VerifikasiController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HomeController;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UMKMExport;

Route::get('/', [HomeController::class, 'index'])->name('home');

// Route default dari Laravel Breeze
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return redirect('/admin/dashboard');
})->middleware(['auth'])->name('dashboard');

// Route untuk export UMKM ke Excel
Route::get('/admin/umkm/export', function () {
    return Excel::download(new UMKMExport, 'data_umkm.xlsx');
})->name('admin.umkm.export');

require __DIR__.'/auth.php';

// ✅ Semua route admin dibungkus satu group saja
Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/umkm/export', function () {
        return Excel::download(new UMKMExport, 'data_umkm.xlsx');
    })->name('admin.umkm.export');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    Route::resource('/umkm', UMKMController::class);
    Route::resource('/produk', ProdukController::class);
    Route::resource('/aspirasi', AspirasiController::class);
    
    Route::get('/verifikasi', [VerifikasiController::class, 'index'])->name('admin.verifikasi');
    Route::get('/verifikasi/setuju/{id}', [VerifikasiController::class, 'setuju'])->name('verifikasi.setuju');
    Route::get('/verifikasi/tolak/{id}', [VerifikasiController::class, 'tolak'])->name('verifikasi.tolak');
});

