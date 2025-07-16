{{-- resources/views/admin/umkm/index.blade.php --}}
@extends('layouts.admin')

@section('title', 'Data UMKM')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Data UMKM</h1>

    <a href="{{ route('umkm.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">
        + Tambah Data
    </a>

    <table class="w-full table-auto border border-gray-300">
        <thead>
            <tr class="bg-gray-100">
                <th class="p-2 border">No</th>
                <th class="p-2 border">Nama UMKM</th>
                <th class="p-2 border">Pemilik</th>
                <th class="p-2 border">Kategori</th>
                <th class="p-2 border">Status</th>
                <th class="p-2 border">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($umkms as $index => $umkm)
                <tr>
                    <td class="p-2 border">{{ $index + 1 }}</td>
                    <td class="p-2 border">{{ $umkm->nama }}</td>
                    <td class="p-2 border">{{ $umkm->pemilik }}</td>
                    <td class="p-2 border">{{ $umkm->kategori }}</td>
                    <td class="p-2 border">{{ $umkm->status }}</td>
                    <td class="p-2 border">
                        <a href="{{ route('umkm.edit', $umkm->id) }}" class="text-blue-500">Edit</a> |
                        <form action="{{ route('umkm.destroy', $umkm->id) }}" method="POST" class="inline-block"
                            onsubmit="return confirm('Yakin ingin hapus?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="p-2 text-center text-gray-500">Belum ada data UMKM</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
