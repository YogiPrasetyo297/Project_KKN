<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Aspirasi;

class AspirasiController extends Controller
{
    public function index()
    {
        $aspirasi = Aspirasi::latest()->get();
        return view('admin.aspirasi.index', compact('aspirasi'));
    }

    public function create()
    {
        return view('admin.aspirasi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'pesan' => 'required|string',
        ]);

        Aspirasi::create([
            'nama' => $request->nama,
            'pesan' => $request->pesan,
            'status' => 'Menunggu'
        ]);

        return redirect()->route('aspirasi.index')->with('success', 'Aspirasi berhasil ditambahkan.');
    }

    public function edit(Aspirasi $aspirasi)
    {
        return view('admin.aspirasi.edit', compact('aspirasi'));
    }

    public function update(Request $request, Aspirasi $aspirasi)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'pesan' => 'required|string',
            'status' => 'required|in:Menunggu,Diproses,Selesai',
        ]);

        $aspirasi->update($request->only('nama', 'pesan', 'status'));

        return redirect()->route('aspirasi.index')->with('success', 'Aspirasi berhasil diperbarui.');
    }

    public function destroy(Aspirasi $aspirasi)
    {
        $aspirasi->delete();
        return redirect()->route('aspirasi.index')->with('success', 'Aspirasi berhasil dihapus.');
    }
}
