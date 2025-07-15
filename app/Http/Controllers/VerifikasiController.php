<?php

namespace App\Http\Controllers;

use App\Models\UMKM;
use Illuminate\Http\Request;

class VerifikasiController extends Controller
{
    public function index()
    {
        $umkms = UMKM::all();
        return view('admin.verifikasi.index', compact('umkms'));
    }

    public function setuju($id)
    {
        $umkm = UMKM::findOrFail($id);
        $umkm->status = 'Disetujui';
        $umkm->save();

        return redirect()->back()->with('success', 'UMKM disetujui.');
    }

    public function tolak($id)
    {
        $umkm = UMKM::findOrFail($id);
        $umkm->status = 'Ditolak';
        $umkm->save();

        return redirect()->back()->with('success', 'UMKM ditolak.');
    }
}
