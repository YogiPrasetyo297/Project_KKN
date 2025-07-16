@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-6">
    <h1 class="text-2xl font-bold mb-4">Daftar UMKM</h1>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        @foreach($umkm as $u)
        <div class="bg-white p-4 rounded shadow">
            <h2 class="font-semibold text-lg">{{ $u->nama }}</h2>
            <p class="text-sm text-gray-500">{{ $u->kategori }}</p>
        </div>
        @endforeach
    </div>
</div>
@endsection
