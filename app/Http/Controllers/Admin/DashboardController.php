<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\UMKM;
use App\Models\Produk;
use App\Models\Aspirasi;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'jumlahUmkm' => UMKM::count(),
            'jumlahAspirasi' => Aspirasi::count(),
            'jumlahProduk' => Produk::count(),
        ]);
    }
}
