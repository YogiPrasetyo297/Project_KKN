@extends('layouts.admin')

@section('title', 'Aspirasi UMKM')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Aspirasi UMKM</h1>

    <a href="{{ route('aspirasi.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">+ Tambah Aspirasi</a>

    <table class="w-full table-auto border border-gray-300">
        <thead class="bg-gray-100">
            <tr>
                <th class="border px-2">No</th>
                <th class="border px-2">Nama</th>
                <th class="border px-2">Kontak</th>
                <th class="border px-2">Isi Aspirasi</th>
                <th class="border px-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($aspirasis as $index => $aspirasi)
                <tr>
                    <td class="border px-2">{{ $index + 1 }}</td>
                    <td class="border px-2">{{ $aspirasi->nama }}</td>
                    <td class="border px-2">{{ $aspirasi->kontak }}</td>
                    <td class="border px-2">{{ $aspirasi->aspirasi }}</td>
                    <td class="border px-2">
                        <a href="{{ route('aspirasi.edit', $aspirasi->id) }}" class="text-blue-500">Edit</a>
                        <form action="{{ route('aspirasi.destroy', $aspirasi->id) }}" method="POST" class="inline"
                            onsubmit="return confirm('Yakin hapus?')">
                            @csrf @method('DELETE')
                            <button type="submit" class="text-red-500 ml-2">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="border p-4 text-center text-gray-500">Belum ada aspirasi.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
