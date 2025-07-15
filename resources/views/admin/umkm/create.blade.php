@extends('layouts.admin')

@section('title', 'Tambah UMKM')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Tambah Data UMKM</h1>
    <form action="{{ route('umkm.store') }}" method="POST" class="space-y-4">
        @csrf
        <input type="text" name="nama" placeholder="Nama UMKM" class="w-full border p-2 rounded" required>
        <input type="text" name="pemilik" placeholder="Nama Pemilik" class="w-full border p-2 rounded" required>
        <input type="text" name="kategori" placeholder="Kategori" class="w-full border p-2 rounded" required>
        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Simpan</button>
    </form>
@endsection
