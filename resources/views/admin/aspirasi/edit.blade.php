@extends('layouts.admin')

@section('title', 'Edit Aspirasi')

@section('content')
    <h1 class="text-xl font-bold mb-4">Edit Aspirasi</h1>

    <form action="{{ route('aspirasi.update', $aspirasi->id) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')
        <div>
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-input" value="{{ $aspirasi->nama }}" required>
        </div>
        <div>
            <label class="form-label">Isi Aspirasi</label>
            <textarea name="pesan" class="form-input" rows="4" required>{{ $aspirasi->pesan }}</textarea>
        </div>
        <div>
            <label class="form-label">Status</label>
            <select name="status" class="form-input">
                <option value="Menunggu" {{ $aspirasi->status == 'Menunggu' ? 'selected' : '' }}>Menunggu</option>
                <option value="Diproses" {{ $aspirasi->status == 'Diproses' ? 'selected' : '' }}>Diproses</option>
                <option value="Selesai" {{ $aspirasi->status == 'Selesai' ? 'selected' : '' }}>Selesai</option>
            </select>
        </div>
        <button type="submit" class="btn-primary">Update</button>
        <a href="{{ route('aspirasi.index') }}" class="btn">Batal</a>
    </form>
@endsection
