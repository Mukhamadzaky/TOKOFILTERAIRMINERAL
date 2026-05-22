@extends('layouts.main')

@section('title', 'Beranda | Nirmala Filter Air')

@section('styles')
<style>
    .hero-section {
        position: relative;
        overflow: hidden;
        border-radius: 32px;
        background: linear-gradient(180deg, #f8fbff 0%, #d9e8fc 45%, #dbeeff 100%);
        box-shadow: 0 30px 80px rgba(15, 67, 122, 0.12);
    }
    .hero-section::before {
        content: '';
        position: absolute;
        inset: 0;
        background: radial-gradient(circle at 20% 20%, rgba(255,255,255,0.85), transparent 22%),
                    radial-gradient(circle at 80% 30%, rgba(255,255,255,0.65), transparent 18%);
        pointer-events: none;
    }
    .hero-inner {
        position: relative;
        display: grid;
        grid-template-columns: minmax(0, 1.3fr) minmax(360px, 1fr);
        align-items: center;
        justify-items: center;
        gap: 2.5rem;
        max-width: 1400px;
        margin: 0 auto;
        padding: 4rem 2.25rem;
    }
    .hero-copy {
        display: flex;
        flex-direction: column;
        justify-content: center;
        gap: 1.75rem;
    }
    .hero-copy p {
        color: #1e3a8a;
    }
    .hero-copy h1 {
        font-size: clamp(3rem, 4vw, 5.5rem);
        line-height: 1.02;
    }
    .hero-copy .hero-subtitle {
        max-width: 48rem;
        color: #4b6cb7;
        font-size: 1.15rem;
        line-height: 1.9;
    }
    .hero-card {
        position: relative;
        min-height: 520px;
        border-radius: 36px;
        background: linear-gradient(180deg, #ffffff 0%, #dbeeff 100%);
        border: 1px solid rgba(255,255,255,0.8);
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        padding: 2rem;
    }
    .hero-card::before {
        content: '';
        position: absolute;
        inset: 0;
        background: radial-gradient(circle at top left, rgba(255,255,255,0.85), transparent 30%),
                    radial-gradient(circle at bottom right, rgba(96,165,250,0.18), transparent 30%);
        pointer-events: none;
    }
    .hero-visual {
        position: relative;
        width: 100%;
        max-width: 560px;
        display: grid;
        place-items: center;
    }
    .hero-image {
        width: 100%;
        height: auto;
        border-radius: 32px;
        box-shadow: 0 32px 90px rgba(41, 98, 205, 0.16);
        background: white;
    }
    @media (max-width: 900px) {
        .hero-inner {
            grid-template-columns: 1fr;
            padding: 3rem 1.5rem;
        }
        .hero-card {
            min-height: 320px;
        }
    }
</style>
@endsection

@section('content')
<section class="mx-auto max-w-full px-6 md:px-10 py-20">
    <div class="hero-section">
        <div class="hero-inner">
            <div class="hero-copy">
                <p class="uppercase tracking-[0.4em] text-sm text-[#4f7fc3] mb-4">Filter Air Sumur &amp; PAM | Garansi 1 Tahun</p>
                <h1 class="font-bold text-slate-900 mb-6">Solusi Air Bersih untuk Rumah dan Usaha</h1>
                <p class="hero-subtitle text-lg leading-8 mb-10">Nirmala Filter Air menyediakan sistem filter berkualitas untuk air sumur, PAM, depo air minum, dan kebutuhan industri kecil.</p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('produk') }}" class="inline-flex items-center justify-center rounded-full bg-[#3464a3] px-8 py-4 text-white font-semibold hover:bg-[#274e7c] transition">Lihat Produk</a>
                    <a href="{{ route('kontak') }}" class="inline-flex items-center justify-center rounded-full border border-[#cfe0f7] bg-white px-8 py-4 text-[#3464a3] font-semibold hover:bg-[#eaf2ff] transition">Hubungi Kami</a>
                </div>
            </div>
            <div class="hero-card">
                <div class="hero-visual">
                    <img src="{{ asset('images/produk.png') }}" alt="Produk filter air" class="hero-image" />
                </div>
            </div>
        </div>
    </div>
</section>

<main class="max-w-6xl mx-auto px-6 lg:px-8 pb-20">
    <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
        <a href="{{ route('about') }}" class="block p-10 bg-white rounded-[36px] shadow-xl hover:shadow-2xl transition">
            <h2 class="text-2xl font-bold mb-4">Tentang Kami</h2>
            <p class="text-slate-600">Pelajari profil perusahaan, visi misi, dan pengalaman kami dalam solusi filter air.</p>
        </a>
        <a href="{{ route('produk') }}" class="block p-10 bg-white rounded-[36px] shadow-xl hover:shadow-2xl transition">
            <h2 class="text-2xl font-bold mb-4">Produk</h2>
            <p class="text-slate-600">Lihat daftar produk filter air Nirmala yang tersedia untuk berbagai kebutuhan.</p>
        </a>
        <a href="{{ route('keunggulan') }}" class="block p-10 bg-white rounded-[36px] shadow-xl hover:shadow-2xl transition">
            <h2 class="text-2xl font-bold mb-4">Keunggulan</h2>
            <p class="text-slate-600">Ketahui alasan mengapa pelanggan memilih Nirmala Filter Air.</p>
        </a>
        <a href="{{ route('klien') }}" class="block p-10 bg-white rounded-[36px] shadow-xl hover:shadow-2xl transition">
            <h2 class="text-2xl font-bold mb-4">Klien</h2>
            <p class="text-slate-600">Lihat mitra dan klien yang sudah mempercayakan masalah air kepada kami.</p>
        </a>
        <a href="{{ route('kontak') }}" class="block p-10 bg-white rounded-[36px] shadow-xl hover:shadow-2xl transition">
            <h2 class="text-2xl font-bold mb-4">Kontak</h2>
            <p class="text-slate-600">Segera hubungi kami untuk konsultasi gratis dan pemesanan filter air.</p>
        </a>
    </div>
</main>
@endsection

@section('scripts')
@endsection