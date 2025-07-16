<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') | Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 font-sans">

    <div class="min-h-screen flex">

        <!-- Sidebar -->
        <aside class="w-64 bg-white shadow-md">
            <div class="p-6 font-bold text-xl border-b">Admin Panel</div>
            <nav class="mt-4">
                @php
                    $active = request()->segment(2);
                @endphp
                <a href="{{ route('admin.dashboard') }}"
                   class="block px-6 py-3 {{ $active == 'dashboard' ? 'bg-blue-100 text-blue-600 font-semibold' : 'hover:bg-gray-100' }}">
                    Dashboard
                </a>
                <a href="{{ route('umkm.index') }}"
                   class="block px-6 py-3 {{ $active == 'umkm' ? 'bg-blue-100 text-blue-600 font-semibold' : 'hover:bg-gray-100' }}">
                    Data UMKM
                </a>
                <a href="{{ route('produk.index') }}"
                   class="block px-6 py-3 {{ $active == 'produk' ? 'bg-blue-100 text-blue-600 font-semibold' : 'hover:bg-gray-100' }}">
                    Data Produk
                </a>
                <a href="{{ route('aspirasi.index') }}"
                   class="block px-6 py-3 {{ $active == 'aspirasi' ? 'bg-blue-100 text-blue-600 font-semibold' : 'hover:bg-gray-100' }}">
                    Data Aspirasi
                </a>
                <a href="{{ route('admin.verifikasi') }}"
                   class="block px-6 py-3 {{ $active == 'verifikasi' ? 'bg-blue-100 text-blue-600 font-semibold' : 'hover:bg-gray-100' }}">
                    Verifikasi UMKM
                </a>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="w-full text-left px-6 py-3 text-red-500 hover:bg-red-100">Logout</button>
                </form>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-6">
            @yield('content')
        </main>

    </div>

</body>
</html>
