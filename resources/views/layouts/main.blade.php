<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Nirmala Filter Air')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @yield('styles')
</head>
<body class="font-sans antialiased text-gray-800 bg-gray-50 min-h-screen flex flex-col">
    {{-- Navbar --}}
    <nav class="bg-white shadow-md fixed w-full z-20 top-0">
        <div class="max-w-6xl mx-auto px-4 py-4 flex flex-wrap items-center justify-between gap-3">
            <a href="{{ route('home') }}" class="text-2xl font-bold text-blue-700">Nirmala Filter Air</a>
            <div class="flex flex-wrap items-center gap-4 text-sm text-gray-700">
                <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'font-semibold text-blue-700' : 'hover:text-blue-700' }}">Beranda</a>
                <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'font-semibold text-blue-700' : 'hover:text-blue-700' }}">Tentang Kami</a>
                <a href="{{ route('produk') }}" class="{{ request()->routeIs('produk') ? 'font-semibold text-blue-700' : 'hover:text-blue-700' }}">Produk</a>
                <a href="{{ route('keunggulan') }}" class="{{ request()->routeIs('keunggulan') ? 'font-semibold text-blue-700' : 'hover:text-blue-700' }}">Keunggulan</a>
                <a href="{{ route('klien') }}" class="{{ request()->routeIs('klien') ? 'font-semibold text-blue-700' : 'hover:text-blue-700' }}">Klien</a>
                <a href="{{ route('kontak') }}" class="{{ request()->routeIs('kontak') ? 'font-semibold text-blue-700' : 'hover:text-blue-700' }}">Kontak</a>
            </div>
            <a href="{{ route('kontak') }}" class="bg-blue-600 text-white px-5 py-2 rounded-full font-semibold hover:bg-blue-700 transition">Pesan Sekarang</a>
        </div>
    </nav>

    {{-- Content --}}
    @yield('content')

    {{-- Footer --}}
    <footer class="bg-gray-900 text-white text-center py-6 mt-auto w-full">
        <p>&copy; {{ date('Y') }} Nirmala Filter Air. Semua hak dilindungi.</p>
    </footer>

    @yield('scripts')
</body>
</html>