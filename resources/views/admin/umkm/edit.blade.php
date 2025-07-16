@extends('layouts.admin')

@section('title', 'Edit UMKM')

@section('content')
    <h1 class="text-xl font-bold mb-4">Edit Data UMKM</h1>

    <form action="{{ route('umkm.update', $umkm->id) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')
        <div>
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-input" value="{{ $umkm->nama }}" required>
        </div>
        <div>
            <label class="form-label">Pemilik</label>
            <input type="text" name="pemilik" class="form-input" value="{{ $umkm->pemilik }}" required>
        </div>
        <div>
            <label class="form-label">Kategori</label>
            <input type="text" name="kategori" class="form-input" value="{{ $umkm->kategori }}" required>
        </div>
        <button type="submit" class="btn-primary">Update</button>
        <a href="{{ route('umkm.index') }}" class="btn">Batal</a>
    </form>
@endsection
