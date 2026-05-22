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
    <section class="grid gap-10 lg:grid-cols-2 items-center">
        <div class="space-y-6">
            <h2 class="text-3xl font-bold text-gray-900">CV. Nirmala Sumber Asri</h2>
            <p class="text-gray-600">CV. Nirmala Sumber Asri atau Nirmala Filter Air adalah perusahaan yang bergerak di bidang water treatment, meliputi penjernihan air, depo air minum, reverse osmosis, dan demineralisasi.</p>
            <p class="text-gray-600">Kami telah berpengalaman lebih dari 10 tahun membantu pelanggan menyelesaikan masalah air di berbagai sektor, mulai dari rumah tangga, industri, depot air minum, hingga perusahaan berskala besar.</p>
            <p class="text-gray-600">Teknologi media filter yang kami gunakan sangat cocok untuk menangani beragam masalah air di seluruh Indonesia.</p>
        </div>
        <div class="rounded-3xl overflow-hidden shadow-xl">
            <img src="/images/produk.png" alt="Kantor Nirmala Filter Air" class="w-full h-full object-cover">
        </div>
    </section>

    <section class="mt-10 bg-[#eaf2ff] rounded-3xl p-10">
        <div class="grid gap-8 lg:grid-cols-3">
            <div class="space-y-3">
                <h3 class="text-xl font-bold text-gray-900">Visi</h3>
                <p class="text-gray-600">Menjadi solusi filter air terpercaya yang menghadirkan air bersih dan sehat untuk seluruh keluarga Indonesia.</p>
            </div>
            <div class="space-y-3">
                <h3 class="text-xl font-bold text-gray-900">Misi</h3>
                <p class="text-gray-600">Memberikan layanan pemasangan filter air dengan kualitas terbaik, teknologi canggih, dan layanan purna jual responsif.</p>
            </div>
            <div class="space-y-3">
                <h3 class="text-xl font-bold text-gray-900">Nilai Kami</h3>
                <p class="text-gray-600">Kejujuran, profesionalisme, dan fokus pada kualitas air yang aman dan halal.</p>
            </div>
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