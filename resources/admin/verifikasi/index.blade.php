@extends('layouts.admin')

@section('title', 'Verifikasi Data UMKM')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Verifikasi Data UMKM</h1>

    <table class="w-full table-auto border border-gray-300">
        <thead class="bg-gray-100">
            <tr>
                <th class="border px-2">No</th>
                <th class="border px-2">Nama UMKM</th>
                <th class="border px-2">Pemilik</th>
                <th class="border px-2">Kategori</th>
                <th class="border px-2">Status</th>
                <th class="border px-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($umkms as $index => $umkm)
                <tr>
                    <td class="border px-2">{{ $index + 1 }}</td>
                    <td class="border px-2">{{ $umkm->nama }}</td>
                    <td class="border px-2">{{ $umkm->pemilik }}</td>
                    <td class="border px-2">{{ $umkm->kategori }}</td>
                    <td class="border px-2">
                        <span class="px-2 py-1 rounded {{ $umkm->status === 'Disetujui' ? 'bg-green-200 text-green-800' : ($umkm->status === 'Ditolak' ? 'bg-red-200 text-red-800' : 'bg-yellow-200 text-yellow-800') }}">
                            {{ $umkm->status }}
                        </span>
                    </td>
                    <td class="border px-2">
                        @if ($umkm->status === 'Menunggu')
                            <a href="{{ route('verifikasi.setuju', $umkm->id) }}" class="text-green-600">Setujui</a> |
                            <a href="{{ route('verifikasi.tolak', $umkm->id) }}" class="text-red-600">Tolak</a>
                        @else
                            <span class="text-gray-400">Sudah Diverifikasi</span>
                        @endif
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="border text-center py-4 text-gray-500">Tidak ada data UMKM.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
