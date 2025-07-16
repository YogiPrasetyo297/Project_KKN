@extends('layouts.admin')

@section('title', 'Data Aspirasi')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Daftar Aspirasi Warga</h1>

    <a href="{{ route('aspirasi.create') }}" class="btn-primary mb-4 inline-block">+ Tambah Aspirasi</a>

    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pengirim</th>
                <th>Isi Aspirasi</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($aspirasi as $index => $item)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ Str::limit($item->pesan, 50) }}</td>
                <td>{{ $item->status }}</td>
                <td>
                    <a href="{{ route('aspirasi.edit', $item->id) }}" class="btn-success text-sm">Edit</a>
                    <form action="{{ route('aspirasi.destroy', $item->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Hapus aspirasi ini?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn-danger text-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
