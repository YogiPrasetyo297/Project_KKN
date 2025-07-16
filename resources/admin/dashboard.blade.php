@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <h1 class="text-2xl font-bold mb-6">Selamat datang, Admin!</h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white p-4 shadow rounded">
            <p class="text-sm text-gray-500">Jumlah UMKM</p>
            <p class="text-2xl font-semibold">{{ $jumlahUmkm }}</p>
        </div>
        <div class="bg-white p-4 shadow rounded">
            <p class="text-sm text-gray-500">Aspirasi Masuk</p>
            <p class="text-2xl font-semibold">{{ $jumlahAspirasi }}</p>
        </div>
        <div class="bg-white p-4 shadow rounded">
            <p class="text-sm text-gray-500">Produk Terdaftar</p>
            <p class="text-2xl font-semibold">{{ $jumlahProduk }}</p>
        </div>
    </div>
@endsection
