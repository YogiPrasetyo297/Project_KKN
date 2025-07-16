@extends('layouts.admin')

@section('title', 'Edit Produk')

@section('content')
    <h1 class="text-xl font-bold mb-4">Edit Produk</h1>

    <form action="{{ route('produk.update', $produk->id) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')
        <div>
            <label class="form-label">Nama Produk</label>
            <input type="text" name="nama" class="form-input" value="{{ $produk->nama }}" required>
        </div>
        <div>
            <label class="form-label">Deskripsi</label>
            <textarea name="deskripsi" class="form-input" rows="4">{{ $produk->deskripsi }}</textarea>
        </div>
        <div>
            <label class="form-label">Harga</label>
            <input type="number" name="harga" class="form-input" value="{{ $produk->harga }}" required>
        </div>
        <button type="submit" class="btn-primary">Update</button>
        <a href="{{ route('produk.index') }}" class="btn">Batal</a>
    </form>
@endsection
