@extends('layouts.admin')

@section('title', 'Tambah UMKM')

@section('content')
    <h1 class="text-xl font-bold mb-4">Tambah Data UMKM</h1>

    <form action="{{ route('umkm.store') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-input" required>
        </div>
        <div>
            <label class="form-label">Pemilik</label>
            <input type="text" name="pemilik" class="form-input" required>
        </div>
        <div>
            <label class="form-label">Kategori</label>
            <input type="text" name="kategori" class="form-input" required>
        </div>
        <button type="submit" class="btn-primary">Simpan</button>
        <a href="{{ route('umkm.index') }}" class="btn">Batal</a>
    </form>
@endsection
