@extends('layouts.admin')

@section('title', 'Data Produk')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Data Produk</h1>

    <a href="{{ route('produk.create') }}" class="btn-primary mb-4 inline-block">+ Tambah Produk</a>

    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($produk as $index => $data)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $data->nama }}</td>
                <td>{{ $data->deskripsi }}</td>
                <td>Rp {{ number_format($data->harga, 0, ',', '.') }}</td>
                <td>
                    <a href="{{ route('produk.edit', $data->id) }}" class="btn-success text-sm">Edit</a>
                    <form action="{{ route('produk.destroy', $data->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Hapus data ini?')">
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
