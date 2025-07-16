@extends('layouts.admin')

@section('title', 'Edit UMKM')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Edit Data UMKM</h1>
    <form action="{{ route('umkm.update', $umkm->id) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')
        <input type="text" name="nama" value="{{ $umkm->nama }}" class="w-full border p-2 rounded" required>
        <input type="text" name="pemilik" value="{{ $umkm->pemilik }}" class="w-full border p-2 rounded" required>
        <input type="text" name="kategori" value="{{ $umkm->kategori }}" class="w-full border p-2 rounded" required>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
    </form>
@endsection
