@extends('layouts.main')

@section('title', 'Beranda | Nirmala Filter Air')

@section('styles')
<style>
    .hero-water {
        position: relative;
        overflow: hidden;
        perspective: 800px;
    }
    .hero-water::before {
        content: "";
        position: absolute;
        inset: 0;
        background: radial-gradient(circle at 50% 15%, rgba(255,255,255,0.18), transparent 38%);
        pointer-events: none;
    }
    .wave {
        position: absolute;
        left: 0;
        bottom: -18px;
        width: 220%;
        height: 210px;
        background: linear-gradient(180deg, rgba(255,255,255,0.24) 20%, rgba(255,255,255,0.08) 90%);
        border-radius: 45%;
        filter: blur(0.5px);
        transform: translate3d(0, 0, 0);
        animation: waveMove 12s linear infinite;
        will-change: transform;
    }
    .wave.wave2 {
        bottom: -28px;
        opacity: 0.45;
        animation-duration: 14s;
        transform: translate3d(0, 0, 0);
    }
    .wave.wave3 {
        bottom: -38px;
        opacity: 0.6;
        animation-duration: 18s;
        transform: translate3d(0, 0, 0);
    }
    .hero-water:hover .wave {
        animation-duration: 9s;
    }
    .hero-water:hover .wave2 {
        animation-duration: 11s;
    }
    .hero-water:hover .wave3 {
        animation-duration: 13s;
    }
    @keyframes waveMove {
        0% { transform: translate3d(0, 0, 0); }
        100% { transform: translate3d(-35%, 0, 0); }
    }
    .bubble {
        position: absolute;
        border-radius: 9999px;
        background: rgba(255,255,255,0.35);
        box-shadow: 0 0 18px rgba(255,255,255,0.12);
        animation: bubbleFloat 6s ease-in-out infinite;
        will-change: transform, opacity;
    }
    .bubble:nth-child(1) { width: 16px; height: 16px; bottom: 40px; left: 18%; animation-duration: 5.5s; }
    .bubble:nth-child(2) { width: 24px; height: 24px; bottom: 32px; left: 45%; animation-duration: 7s; }
    .bubble:nth-child(3) { width: 12px; height: 12px; bottom: 22px; left: 72%; animation-duration: 6.5s; }
    .bubble:nth-child(4) { width: 20px; height: 20px; bottom: 55px; left: 62%; animation-duration: 8s; }
    @keyframes bubbleFloat {
        0%, 100% { transform: translateY(0) scale(1); opacity: 0.75; }
        50% { transform: translateY(-20px) scale(1.05); opacity: 1; }
    }
</style>
@endsection

@section('content')
<header class="hero-water bg-gradient-to-b from-blue-700 via-blue-600 to-blue-500 text-white pt-32 pb-24">
    <div class="max-w-5xl mx-auto px-4 text-center relative z-10">
        <p class="uppercase tracking-[0.4em] text-sm text-blue-200 mb-4">Filter Air Sumur & PAM | Garansi 1 Tahun</p>
        <h1 class="text-4xl md:text-6xl font-bold mb-6">Solusi Air Bersih untuk Rumah dan Usaha</h1>
        <p class="max-w-3xl mx-auto text-lg text-blue-100 mb-10">Nirmala Filter Air menyediakan sistem filter berkualitas untuk air sumur, PAM, depo air minum, dan kebutuhan industri kecil.</p>
        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="{{ route('produk') }}" class="bg-yellow-400 text-blue-900 px-8 py-4 rounded-full font-bold hover:bg-yellow-300 transition">Lihat Produk</a>
            <a href="{{ route('kontak') }}" class="bg-white text-blue-700 px-8 py-4 rounded-full font-bold hover:bg-gray-100 transition">Hubungi Kami</a>
        </div>
    </div>
    <div class="absolute inset-x-0 bottom-0 h-44 overflow-hidden opacity-90">
        <div class="wave"></div>
        <div class="wave wave2"></div>
        <div class="wave wave3"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
    </div>
</header>

<main class="max-w-6xl mx-auto px-4 py-16 flex-grow">
    <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
        <a href="{{ route('about') }}" class="block p-8 bg-white rounded-3xl shadow-lg hover:shadow-xl transition">
            <h2 class="text-xl font-bold mb-3">Tentang Kami</h2>
            <p class="text-gray-600">Pelajari profil perusahaan, visi misi, dan pengalaman kami dalam solusi filter air.</p>
        </a>
        <a href="{{ route('produk') }}" class="block p-8 bg-white rounded-3xl shadow-lg hover:shadow-xl transition">
            <h2 class="text-xl font-bold mb-3">Produk</h2>
            <p class="text-gray-600">Lihat daftar produk filter air Nirmala yang tersedia untuk berbagai kebutuhan.</p>
        </a>
        <a href="{{ route('keunggulan') }}" class="block p-8 bg-white rounded-3xl shadow-lg hover:shadow-xl transition">
            <h2 class="text-xl font-bold mb-3">Keunggulan</h2>
            <p class="text-gray-600">Ketahui alasan mengapa pelanggan memilih Nirmala Filter Air.</p>
        </a>
        <a href="{{ route('klien') }}" class="block p-8 bg-white rounded-3xl shadow-lg hover:shadow-xl transition">
            <h2 class="text-xl font-bold mb-3">Klien</h2>
            <p class="text-gray-600">Lihat mitra dan klien yang sudah mempercayakan masalah air kepada kami.</p>
        </a>
        <a href="{{ route('kontak') }}" class="block p-8 bg-white rounded-3xl shadow-lg hover:shadow-xl transition">
            <h2 class="text-xl font-bold mb-3">Kontak</h2>
            <p class="text-gray-600">Segera hubungi kami untuk konsultasi gratis dan pemesanan filter air.</p>
        </a>
    </div>
</main>
@endsection

@section('scripts')
<script>
    const heroWater = document.querySelector('.hero-water');
    const waves = heroWater.querySelectorAll('.wave');
    const bubbles = heroWater.querySelectorAll('.bubble');

    function updateWaterMotion(x, y) {
        waves.forEach((wave, index) => {
            const speed = 8 + index * 5;
            wave.style.transform = `translate3d(${x * speed}px, 0, 0)`;
        });
        bubbles.forEach((bubble, index) => {
            const drift = 6 + index * 2;
            bubble.style.transform = `translate3d(${x * drift}px, ${y * 10}px, 0)`;
        });
    }

    heroWater.addEventListener('mousemove', event => {
        const rect = heroWater.getBoundingClientRect();
        const x = ((event.clientX - rect.left) / rect.width - 0.5) * 2;
        const y = ((event.clientY - rect.top) / rect.height - 0.5);
        updateWaterMotion(x, y);
    });

    heroWater.addEventListener('mouseleave', () => {
        waves.forEach(wave => wave.style.transform = 'translate3d(0, 0, 0)');
        bubbles.forEach(bubble => bubble.style.transform = 'translate3d(0, 0, 0)');
    });
</script>
@endsection