@extends('layouts.admin')

@section('title', 'Data UMKM')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Data UMKM</h1>

    <a href="{{ route('umkm.create') }}" class="btn-primary mb-4 inline-block">+ Tambah UMKM</a>
 <a href="{{ route('admin.umkm.export') }}"
   class="bg-green-600 text-white px-4 py-2 rounded inline-block mb-4">
   📥 Export ke Excel
</a>


    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Pemilik</th>
                <th>Kategori</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($umkm as $index => $data)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $data->nama }}</td>
                <td>{{ $data->pemilik }}</td>
                <td>{{ $data->kategori }}</td>
                <td>{{ $data->status }}</td>
                <td>
                    <a href="{{ route('umkm.edit', $data->id) }}" class="btn-success text-sm">Edit</a>
                    <form action="{{ route('umkm.destroy', $data->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Yakin ingin hapus?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn-danger text-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
