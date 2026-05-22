@extends('layouts.main')

@section('title', 'Produk | Nirmala Filter Air')

@section('content')
<header class="bg-[#4f7fc3] text-white pt-24 pb-16">
    <div class="max-w-8xl mx-auto px-8 grid gap-10 lg:grid-cols-[1.2fr_0.8fr] items-center">
        <div class="space-y-6 text-center lg:text-left">
            <p class="uppercase tracking-[0.4em] text-sm text-[#cfe0f7]">Produk Nirmala Filter Air</p>
            <h1 class="text-4xl md:text-5xl font-bold leading-tight">Solusi Filter Air Profesional untuk Rumah & Usaha</h1>
            <p class="max-w-3xl text-lg text-[#e5efff]">Nirmala Filter Air menyediakan rangkaian produk water treatment berkualitas untuk air sumur, PAM, depo air minum, dan kebutuhan industri kecil.</p>
            <div class="flex flex-col sm:flex-row justify-center lg:justify-start gap-4">
                <a href="#produk-unggulan" class="inline-flex items-center justify-center rounded-full bg-white text-[#3464a3] px-8 py-4 font-semibold shadow-lg hover:bg-slate-100 transition">Lihat Produk Unggulan</a>
                <a href="#fitur" class="inline-flex items-center justify-center rounded-full border border-white/30 bg-white/10 px-8 py-4 text-white font-semibold hover:bg-white/20 transition">Keunggulan Kami</a>
            </div>
        </div>
        <div class="rounded-[40px] bg-white/10 p-8 ring-1 ring-white/20 backdrop-blur-xl">
            <div class="space-y-6">
                <div class="rounded-3xl bg-white p-6 shadow-lg">
                    <h2 class="text-xl font-bold text-slate-900 mb-3">Produk Unggulan</h2>
                    <p class="text-slate-600">Filter media premium, reverse osmosis, dan paket depo air minum yang sudah teruji.</p>
                </div>
                <div class="grid gap-4">
                    <div class="rounded-3xl bg-slate-950/90 p-6 text-white">
                        <h3 class="font-semibold text-lg mb-2">Kapasitas Besar</h3>
                        <p class="text-sm text-slate-200">Tersedia model untuk rumah, kantor, dan industri.</p>
                    </div>
                    <div class="rounded-3xl bg-slate-950/90 p-6 text-white">
                        <h3 class="font-semibold text-lg mb-2">Perawatan Mudah</h3>
                        <p class="text-sm text-slate-200">Struktur modular memudahkan penggantian media dan servis.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<main class="max-w-8xl mx-auto px-8 py-20">
    <section class="grid gap-6 md:grid-cols-3">
        <div class="p-8 bg-white rounded-4xl shadow-xl">
            <span class="inline-flex items-center justify-center w-14 h-14 rounded-2xl bg-[#e8f1ff] text-[#3464a3] font-bold mb-4">01</span>
            <h2 class="text-2xl font-bold mb-3">Filter Sumur & PAM</h2>
            <p class="text-gray-600">Sistem media filter untuk menyingkirkan sedimen, bau, dan kontaminan di air sumur maupun PAM.</p>
        </div>
        <div class="p-8 bg-white rounded-4xl shadow-xl">
            <span class="inline-flex items-center justify-center w-14 h-14 rounded-2xl bg-[#e8f1ff] text-[#3464a3] font-bold mb-4">02</span>
            <h2 class="text-2xl font-bold mb-3">RO Air Minum</h2>
            <p class="text-gray-600">Reverse osmosis dengan kapasitas hingga 2000 GPD, cocok untuk depo air minum dan restoran.</p>
        </div>
        <div class="p-8 bg-white rounded-4xl shadow-xl">
            <span class="inline-flex items-center justify-center w-14 h-14 rounded-2xl bg-[#e8f1ff] text-[#3464a3] font-bold mb-4">03</span>
            <h2 class="text-2xl font-bold mb-3">Depo Air Minum</h2>
            <p class="text-gray-600">Solusi lengkap depot air minum isi ulang, mulai dari filter hingga pompa dan instalasi.</p>
        </div>
    </section>

    <section id="produk-unggulan" class="mt-16">
        <div class="flex flex-col gap-4 md:flex-row md:items-end md:justify-between">
            <div>
                <p class="uppercase tracking-[0.36em] text-sm text-[#4f7fc3] mb-2">Produk Unggulan</p>
                <h2 class="text-3xl font-bold">Rangkaian Produk Nirmala yang Populer</h2>
            </div>
            <p class="max-w-2xl text-gray-600">Pilih dari solusi filter air yang dirancang untuk berbagai kebutuhan, dari rumah tangga hingga usaha komersial.</p>
        </div>

        <div class="mt-10 grid gap-6 xl:grid-cols-3 lg:grid-cols-2">
            <div class="p-8 bg-white rounded-4xl shadow-xl border border-slate-200">
                <h3 class="text-2xl font-semibold mb-3">NF 3672</h3>
                <p class="text-gray-600 mb-4">Sistem filter sumur/PAM dengan kapasitas besar dan media multi-stage untuk air bersih maksimal.</p>
                <ul class="space-y-2 text-sm text-slate-600">
                    <li>Media sediment 20"</li>
                    <li>Kapasitas 5-10 m³/jam</li>
                    <li>Garansi 1 tahun</li>
                </ul>
            </div>
            <div class="p-8 bg-white rounded-4xl shadow-xl border border-slate-200">
                <h3 class="text-2xl font-semibold mb-3">RO 2000 GPD</h3>
                <p class="text-gray-600 mb-4">Reverse osmosis untuk air minum murni dengan performa tinggi, ideal untuk depot air minum.</p>
                <ul class="space-y-2 text-sm text-slate-600">
                    <li>Membran RO berkualitas</li>
                    <li>Kapasitas 2000 GPD</li>
                    <li>Desain hemat energi</li>
                </ul>
            </div>
            <div class="p-8 bg-white rounded-4xl shadow-xl border border-slate-200">
                <h3 class="text-2xl font-semibold mb-3">Paket Depo Air Minum</h3>
                <p class="text-gray-600 mb-4">Solusi instalasi depot air minum siap pakai, termasuk pompa dan tangki sanitasi.</p>
                <ul class="space-y-2 text-sm text-slate-600">
                    <li>Mudah dipasang</li>
                    <li>Service-ready</li>
                    <li>Higienis dan tahan lama</li>
                </ul>
            </div>
        </div>
    </section>

    <section id="fitur" class="mt-16 rounded-4xl bg-[#eaf2ff] p-10 shadow-xl">
        <div class="grid gap-8 lg:grid-cols-3">
            <div class="space-y-4">
                <h3 class="text-2xl font-bold">Layanan Instalasi</h3>
                <p class="text-gray-600">Tim teknisi kami melakukan pemasangan cepat dan rapi menggunakan standar industri.</p>
            </div>
            <div class="space-y-4">
                <h3 class="text-2xl font-bold">Konsultasi Gratis</h3>
                <p class="text-gray-600">Konsultasi kebutuhan air, kualitas, dan tarif sesuai lokasi Anda.</p>
            </div>
            <div class="space-y-4">
                <h3 class="text-2xl font-bold">Garansi Terpercaya</h3>
                <p class="text-gray-600">Garansi 1 tahun untuk produk dan dukungan purna jual penuh.</p>
            </div>
        </div>
    </section>
</main>
@endsection
