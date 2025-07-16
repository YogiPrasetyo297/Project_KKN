@extends('layouts.admin')

@section('title', 'Data Produk')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Data Produk</h1>

    <a href="{{ route('produk.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">+ Tambah Produk</a>

    <table class="w-full table-auto border border-gray-300">
        <thead>
            <tr class="bg-gray-100">
                <th>No</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produks as $index => $produk)
                <tr>
                    <td class="border px-2">{{ $index + 1 }}</td>
                    <td class="border px-2">{{ $produk->nama }}</td>
                    <td class="border px-2">Rp{{ number_format($produk->harga) }}</td>
                    <td class="border px-2">
                        @if($produk->foto)
                            <img src="{{ asset('storage/' . $produk->foto) }}" alt="foto" class="h-16">
                        @endif
                    </td>
                    <td class="border px-2">
                        <a href="{{ route('produk.edit', $produk->id) }}" class="text-blue-500">Edit</a>
                        <form action="{{ route('produk.destroy', $produk->id) }}" method="POST" class="inline"
                              onsubmit="return confirm('Yakin hapus?')">
                            @csrf @method('DELETE')
                            <button type="submit" class="text-red-500 ml-2">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
