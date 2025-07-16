@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<h1 class="text-2xl font-bold mb-6">Selamat datang, Admin!</h1>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
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

<div class="bg-white p-6 shadow rounded">
    <h2 class="text-xl font-bold mb-4">Statistik UMKM</h2>
    <canvas id="umkmChart" height="100"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('umkmChart').getContext('2d');
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['UMKM', 'Aspirasi', 'Produk'],
            datasets: [{
                label: 'Jumlah Data',
                data: [{{ $jumlahUmkm }}, {{ $jumlahAspirasi }}, {{ $jumlahProduk }}],
                backgroundColor: ['#3b82f6', '#10b981', '#f59e0b'],
                borderRadius: 6
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: { display: false }
            }
        }
    });
</script>
@endsection
