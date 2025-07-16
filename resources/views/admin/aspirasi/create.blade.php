@extends('layouts.admin')

@section('title', 'Tambah Aspirasi')

@section('content')
    <h1 class="text-xl font-bold mb-4">Tambah Aspirasi</h1>

    <form action="{{ route('aspirasi.store') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-input" required>
        </div>
        <div>
            <label class="form-label">Isi Aspirasi</label>
            <textarea name="pesan" class="form-input" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn-primary">Simpan</button>
        <a href="{{ route('aspirasi.index') }}" class="btn">Batal</a>
    </form>
@endsection
