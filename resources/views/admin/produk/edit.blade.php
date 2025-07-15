@extends('layouts.admin')

@section('title', 'Tambah Produk')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Tambah Produk</h1>
    <form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf
        <input type="text" name="nama" placeholder="Nama Produk" class="w-full border p-2 rounded" required>
        <input type="number" name="harga" placeholder="Harga" class="w-full border p-2 rounded" required>
        <textarea name="deskripsi" placeholder="Deskripsi" class="w-full border p-2 rounded"></textarea>
        <input type="file" name="foto" class="w-full">
        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Simpan</button>
    </form>
@endsection
