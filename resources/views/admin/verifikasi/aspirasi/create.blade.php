@extends('layouts.admin')

@section('title', 'Tambah Aspirasi')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Tambah Aspirasi UMKM</h1>
    <form action="{{ route('aspirasi.store') }}" method="POST" class="space-y-4">
        @csrf
        <input type="text" name="nama" placeholder="Nama" class="w-full border p-2 rounded" required>
        <input type="text" name="kontak" placeholder="Email atau Nomor Telepon" class="w-full border p-2 rounded" required>
        <textarea name="aspirasi" placeholder="Tulis aspirasi..." class="w-full border p-2 rounded" required></textarea>
        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Kirim</button>
    </form>
@endsection
