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
        $totalUMKM = UMKM::count();
        $totalProduk = Produk::count();
        $totalAspirasi = Aspirasi::count();
        $umkmTerbaru = UMKM::latest()->take(5)->get();

        return view('admin.dashboard', compact(
            'totalUMKM', 'totalProduk', 'totalAspirasi', 'umkmTerbaru'
        ));
    }
}
