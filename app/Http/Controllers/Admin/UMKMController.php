<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UMKM;

class UMKMController extends Controller
{
    /**
     * Tampilkan semua data UMKM.
     */
    public function index()
    {
        $umkm = UMKM::all();
        return view('admin.umkm.index', compact('umkm'));
    }

    /**
     * Tampilkan form tambah UMKM.
     */
    public function create()
    {
        return view('admin.umkm.create');
    }

    /**
     * Simpan data UMKM baru ke database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'pemilik' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
        ]);

        UMKM::create([
            'nama' => $request->nama,
            'pemilik' => $request->pemilik,
            'kategori' => $request->kategori,
            'status' => 'Menunggu', // default
        ]);

        return redirect()->route('umkm.index')->with('success', 'Data UMKM berhasil ditambahkan.');
    }

    /**
     * Tampilkan form edit UMKM.
     */
    public function edit(UMKM $umkm)
    {
        return view('admin.umkm.edit', compact('umkm'));
    }

    /**
     * Update data UMKM.
     */
    public function update(Request $request, UMKM $umkm)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'pemilik' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
        ]);

        $umkm->update([
            'nama' => $request->nama,
            'pemilik' => $request->pemilik,
            'kategori' => $request->kategori,
        ]);

        return redirect()->route('umkm.index')->with('success', 'Data UMKM berhasil diperbarui.');
    }

    /**
     * Hapus data UMKM.
     */
    public function destroy(UMKM $umkm)
    {
        $umkm->delete();
        return redirect()->route('umkm.index')->with('success', 'Data UMKM berhasil dihapus.');
    }
}
