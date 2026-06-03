@extends('layouts.main')

@section('title', 'Tentang Kami | Nirmala Filter Air')

@section('content')
<header class="bg-[#4f7fc3] text-white pt-28 pb-16">
    <div class="max-w-8xl mx-auto px-8 text-center">
        <p class="uppercase tracking-[0.4em] text-sm text-[#cfe0f7] mb-4">Tentang Kami</p>
        <h1 class="text-4xl md:text-5xl font-bold mb-4">CV. Nirmala Sumber Asri</h1>
        <p class="max-w-3xl mx-auto text-lg text-[#e5efff]">Perusahaan water treatment berpengalaman lebih dari 10 tahun dalam solusi filter air sumur, PAM, demineralisasi, dan depo air minum.</p>
    </div>
</header>

<main class="max-w-8xl mx-auto px-8 py-20">
    <section class="grid gap-10 lg:grid-cols-2 items-center bg-[#eff6ff] rounded-[40px] p-10 shadow-xl">
        <div class="space-y-6">
            <span class="inline-flex rounded-full bg-[#dcebff] px-4 py-2 text-sm font-semibold text-[#1f4b8b]">Tentang Kami</span>
            <h2 class="text-4xl font-bold text-gray-900">CV. Nirmala Sumber Asri</h2>
            <p class="text-gray-600">CV. Nirmala Sumber Asri adalah perusahaan water treatment berpengalaman lebih dari 10 tahun, menyediakan solusi filter air sumur, PAM, depo air minum, reverse osmosis, dan demineralisasi. Kami menghadirkan layanan lengkap yang membantu pelanggan mendapatkan air bersih, aman, dan terjangkau di rumah, usaha, dan depot air minum.</p>
            <div class="grid gap-4 sm:grid-cols-2">
                <div class="rounded-3xl bg-white p-6 shadow-sm">
                    <h3 class="font-semibold text-lg text-gray-900 mb-2">Pengalaman</h3>
                    <p class="text-gray-600">Lebih dari 10 tahun menangani berbagai masalah air dengan solusi yang dapat diandalkan.</p>
                </div>
                <div class="rounded-3xl bg-white p-6 shadow-sm">
                    <h3 class="font-semibold text-lg text-gray-900 mb-2">Solusi Tepat</h3>
                    <p class="text-gray-600">Dari komponen filter sampai paket jadi, semua disiapkan agar pemasangan lebih cepat dan mudah.</p>
                </div>
            </div>
        </div>
        <div class="relative overflow-hidden rounded-[36px] shadow-2xl bg-white">
            <img src="/images/produk.png" alt="Kantor Nirmala Filter Air" class="w-full h-full object-cover">
            <div class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-slate-900/85 to-transparent p-6">
                <p class="text-sm uppercase tracking-[0.24em] text-slate-300">Nirmala Filter Air</p>
                <h3 class="text-2xl font-semibold text-white">Praktis, Profesional, Terpercaya</h3>
            </div>
        </div>
    </section>

    <section class="mt-10 bg-[#eaf2ff] rounded-3xl p-10">
        <div class="space-y-4">
            <h3 class="text-2xl font-bold text-gray-900">Visi & Misi</h3>
            <p class="text-gray-600">Visi kami adalah menjadi solusi filter air terpercaya yang menghadirkan air bersih dan sehat bagi seluruh keluarga Indonesia. Misi kami adalah menyediakan pemasangan filter air berkualitas dengan teknologi canggih, layanan purna jual responsif, serta menjaga integritas melalui kejujuran, profesionalisme, dan fokus pada kualitas air yang aman dan halal.</p>
        </div>
    </section>

    <section class="mt-10 grid gap-8 lg:grid-cols-3">
        <div class="rounded-3xl bg-white p-8 shadow-md">
            <h3 class="text-xl font-bold mb-3">Pengalaman 10+ Tahun</h3>
            <p class="text-gray-600">Menangani berbagai pelanggan dari Sidoarjo hingga daerah lain dengan solusi air lengkap.</p>
        </div>
        <div class="rounded-3xl bg-white p-8 shadow-md">
            <h3 class="text-xl font-bold mb-3">2 Cabang Siap Layani</h3>
            <p class="text-gray-600">Dua cabang kami membuat layanan lebih cepat dan lebih dekat ke pelanggan.</p>
        </div>
        <div class="rounded-3xl bg-white p-8 shadow-md">
            <h3 class="text-xl font-bold mb-3">Melayani Seluruh Indonesia</h3>
            <p class="text-gray-600">Kami melayani pemasangan, perawatan, dan konsultasi untuk pelanggan di berbagai wilayah.</p>
        </div>
    </section>

    <section class="mt-10 bg-white rounded-3xl p-10 shadow-lg">
        <div class="text-center mb-8">
            <h2 class="text-3xl font-bold text-gray-900">Kantor Pusat & Kontak</h2>
        </div>
        <div class="grid gap-8 md:grid-cols-3">
            <div>
                <h3 class="font-bold text-lg text-gray-900">Kantor Pusat</h3>
                <p class="text-gray-600">Perum Pabean Asri Blok V Nomor 7, Kabupaten Sidoarjo.</p>
            </div>
            <div>
                <h3 class="font-bold text-lg text-gray-900">Customer Service</h3>
                <p class="text-gray-600">(031) 9969 1712</p>
            </div>
            <div>
                <h3 class="font-bold text-lg text-gray-900">Email</h3>
                <p class="text-gray-600">nirmalafilter@gmail.com</p>
            </div>
        </div>
    </section>
</main>
@endsection