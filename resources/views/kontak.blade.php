@extends('layouts.main')

@section('title', 'Kontak | Nirmala Filter Air')

@section('content')
<header class="bg-blue-600 text-white pt-32 pb-20">
    <div class="max-w-6xl mx-auto px-4 text-center">
        <p class="uppercase tracking-[0.4em] text-sm text-blue-200 mb-4">Kontak Nirmala Filter Air</p>
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Hubungi Kami</h1>
        <p class="max-w-3xl mx-auto text-lg text-blue-100">Konsultasi gratis, pemesanan, dan dukungan teknis untuk filter air Anda.</p>
    </div>
</header>

<main class="max-w-6xl mx-auto px-4 py-16 flex-grow">
    <div class="grid gap-8 lg:grid-cols-2">
        <div class="rounded-3xl bg-white p-10 shadow-lg">
            <h2 class="text-3xl font-bold mb-4">Informasi Kontak</h2>
            <div class="space-y-6 text-gray-700">
                <div>
                    <h3 class="font-bold text-lg">Telepon / WA 1</h3>
                    <p>0878 7889 2188</p>
                </div>
                <div>
                    <h3 class="font-bold text-lg">Telepon / WA 2</h3>
                    <p>0812 3176 7702</p>
                </div>
                <div>
                    <h3 class="font-bold text-lg">Email</h3>
                    <p>nirmalafilter@gmail.com</p>
                </div>
                <div>
                    <h3 class="font-bold text-lg">Kantor Pusat</h3>
                    <p>Perum Pabean Asri Blok V Nomor 7, Kabupaten Sidoarjo.</p>
                </div>
            </div>
        </div>
        
        <div class="rounded-3xl bg-white p-10 shadow-lg">
            <h2 class="text-3xl font-bold mb-4">Kirim Pesan</h2>
            @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif
            
            <form action="{{ route('kontak.send') }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label for="nama" class="block text-sm font-medium text-gray-700 mb-1">Nama</label>
                    <input type="text" name="nama" id="nama" required 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        placeholder="Masukkan nama Anda">
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                    <input type="email" name="email" id="email" required 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        placeholder="Masukkan email Anda">
                </div>
                <div>
                    <label for="telepon" class="block text-sm font-medium text-gray-700 mb-1">Telepon / WhatsApp</label>
                    <input type="text" name="telepon" id="telepon" required 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        placeholder="Masukkan nomor telepon">
                </div>
                <div>
                    <label for="pesan" class="block text-sm font-medium text-gray-700 mb-1">Pesan</label>
                    <textarea name="pesan" id="pesan" rows="4" required 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        placeholder="Tulis pesan Anda..."></textarea>
                </div>
                <button type="submit" 
                    class="w-full bg-blue-600 text-white px-6 py-3 rounded-lg font-bold hover:bg-blue-700 transition">
                    Kirim Pesan
                </button>
            </form>
        </div>
        
        <div class="rounded-3xl bg-blue-600 p-10 text-white shadow-lg lg:col-span-2">
            <h2 class="text-3xl font-bold mb-4 text-center">Hubungi Lewat WhatsApp</h2>
            <p class="text-blue-100 mb-6 text-center">Klik tombol di bawah untuk langsung chat dengan customer service kami.</p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="https://wa.me/6287878892188" target="_blank" class="block bg-white text-blue-700 rounded-full px-6 py-4 font-bold text-center hover:bg-gray-100 transition">WhatsApp 1</a>
                <a href="https://wa.me/6281231767702" target="_blank" class="block bg-white text-blue-700 rounded-full px-6 py-4 font-bold text-center hover:bg-gray-100 transition">WhatsApp 2</a>
            </div>
        </div>
    </div>
</main>
@endsection