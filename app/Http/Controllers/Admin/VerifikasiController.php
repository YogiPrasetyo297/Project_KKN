<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\UMKM;

class VerifikasiController extends Controller
{
    public function index()
    {
        $umkm = UMKM::where('status', 'Menunggu')->get();
        return view('admin.verifikasi.index', compact('umkm'));
    }

    public function setuju($id)
    {
        $umkm = UMKM::findOrFail($id);
        $umkm->update(['status' => 'Disetujui']);

        return redirect()->route('admin.verifikasi')->with('success', 'UMKM disetujui.');
    }

    public function tolak($id)
    {
        $umkm = UMKM::findOrFail($id);
        $umkm->update(['status' => 'Ditolak']);

        return redirect()->route('admin.verifikasi')->with('success', 'UMKM ditolak.');
    }
}
