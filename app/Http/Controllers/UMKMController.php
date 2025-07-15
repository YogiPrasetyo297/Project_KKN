<?php

namespace App\Http\Controllers;

use App\Models\UMKM;
use Illuminate\Http\Request;

class UMKMController extends Controller
{
    public function index()
    {
        $umkms = UMKM::all();
        return view('admin.umkm.index', compact('umkms'));
    }

    public function create()
    {
        return view('admin.umkm.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'pemilik' => 'required',
            'kategori' => 'required',
        ]);

        UMKM::create($request->all());

        return redirect()->route('umkm.index')->with('success', 'Data UMKM berhasil ditambahkan.');
    }

    public function edit(UMKM $umkm)
    {
        return view('admin.umkm.edit', compact('umkm'));
    }

    public function update(Request $request, UMKM $umkm)
    {
        $request->validate([
            'nama' => 'required',
            'pemilik' => 'required',
            'kategori' => 'required',
        ]);

        $umkm->update($request->all());

        return redirect()->route('umkm.index')->with('success', 'Data UMKM berhasil diupdate.');
    }

    public function destroy(UMKM $umkm)
    {
        $umkm->delete();
        return redirect()->route('umkm.index')->with('success', 'Data UMKM berhasil dihapus.');
    }
}
