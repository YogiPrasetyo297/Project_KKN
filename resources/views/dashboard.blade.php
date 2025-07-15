@extends('layouts.admin')

@section('title', 'Dashboard Admin')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Selamat Datang di Dashboard Admin</h1>

    <p>Total UMKM: {{ $totalUMKM }}</p>
    <p>Total Produk: {{ $totalProduk }}</p>
    <p>Total Aspirasi: {{ $totalAspirasi }}</p>
@endsection
