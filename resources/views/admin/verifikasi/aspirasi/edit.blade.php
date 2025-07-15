@extends('layouts.admin')

@section('title', 'Edit Aspirasi')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Edit Aspirasi</h1>
    <form action="{{ route('aspirasi.update', $aspirasi->id) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')
        <input type="text" name="nama" value="{{ $aspirasi->nama }}" class="w-full border p-2 rounded" required>
        <input type="text" name="kontak" value="{{ $aspirasi->kontak }}" class="w-full border p-2 rounded" required>
        <textarea name="aspirasi" class="w-full border p-2 rounded" required>{{ $aspirasi->aspirasi }}</textarea>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
    </form>
@endsection
