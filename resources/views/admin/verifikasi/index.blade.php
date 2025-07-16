@extends('layouts.admin')

@section('title', 'Verifikasi UMKM')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Verifikasi UMKM</h1>

    @if ($umkm->count() > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama UMKM</th>
                    <th>Pemilik</th>
                    <th>Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($umkm as $index => $data)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $data->nama }}</td>
                    <td>{{ $data->pemilik }}</td>
                    <td>{{ $data->kategori }}</td>
                    <td>
                        <a href="{{ route('verifikasi.setuju', $data->id) }}" class="btn-success text-sm">Setujui</a>
                        <a href="{{ route('verifikasi.tolak', $data->id) }}" class="btn-danger text-sm">Tolak</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p class="text-gray-600">Tidak ada UMKM yang menunggu verifikasi.</p>
    @endif
@endsection
