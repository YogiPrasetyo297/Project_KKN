<?php

namespace App\Http\Controllers;

use App\Models\Aspirasi;
use Illuminate\Http\Request;

class AspirasiController extends Controller
{
    public function index()
    {
        $aspirasis = Aspirasi::all();
        return view('admin.aspirasi.index', compact('aspirasis'));
    }

    public function create()
    {
        return view('admin.aspirasi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'kontak' => 'required',
            'aspirasi' => 'required',
        ]);

        Aspirasi::create($request->all());

        return redirect()->route('aspirasi.index')->with('success', 'Aspirasi berhasil ditambahkan.');
    }

    public function edit(Aspirasi $aspirasi)
    {
        return view('admin.aspirasi.edit', compact('aspirasi'));
    }

    public function update(Request $request, Aspirasi $aspirasi)
    {
        $request->validate([
            'nama' => 'required',
            'kontak' => 'required',
            'aspirasi' => 'required',
        ]);

        $aspirasi->update($request->all());

        return redirect()->route('aspirasi.index')->with('success', 'Aspirasi berhasil diperbarui.');
    }

    public function destroy(Aspirasi $aspirasi)
    {
        $aspirasi->delete();
        return redirect()->route('aspirasi.index')->with('success', 'Aspirasi berhasil dihapus.');
    }
}
