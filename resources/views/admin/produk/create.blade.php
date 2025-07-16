@extends('layouts.admin')

@section('title', 'Tambah Produk')

@section('content')
    <h1 class="text-xl font-bold mb-4">Tambah Produk</h1>

    <form action="{{ route('produk.store') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label class="form-label">Nama Produk</label>
            <input type="text" name="nama" class="form-input" required>
        </div>
        <div>
            <label class="form-label">Deskripsi</label>
            <textarea name="deskripsi" class="form-input" rows="4"></textarea>
        </div>
        <div>
            <label class="form-label">Harga</label>
            <input type="number" name="harga" class="form-input" required>
        </div>
        <button type="submit" class="btn-primary">Simpan</button>
        <a href="{{ route('produk.index') }}" class="btn">Batal</a>
    </form>
@endsection
