<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Admin UMKM')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-900">
    <div class="flex min-h-screen">
        <aside class="w-64 bg-white shadow-md">
            <div class="p-4 text-xl font-bold">UMKM Admin</div>
            <nav>
                <a href="{{ route('admin.dashboard') }}" class="block px-4 py-2 hover:bg-gray-200">Dashboard</a>
                <a href="{{ route('umkm.index') }}" class="block px-4 py-2 hover:bg-gray-200">Data UMKM</a>
                <a href="{{ route('produk.index') }}" class="block px-4 py-2 hover:bg-gray-200">Produk</a>
                <a href="{{ route('aspirasi.index') }}" class="block px-4 py-2 hover:bg-gray-200">Aspirasi</a>
                <a href="{{ route('admin.verifikasi') }}" class="block px-4 py-2 hover:bg-gray-200">Verifikasi</a>
            </nav>
        </aside>
        <main class="flex-1 p-6">
            @yield('content')
        </main>
    </div>
</body>
</html>