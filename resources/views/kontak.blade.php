@extends('layouts.main')

@section('title', 'Kontak | Nirmala Filter Air')

@section('content')
<header class="bg-[#4f7fc3] text-white pt-24 pb-16">
    <div class="max-w-8xl mx-auto px-8 text-center">
        <p class="uppercase tracking-[0.4em] text-sm text-[#cfe0f7] mb-4">Kontak Nirmala Filter Air</p>
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Hubungi Kami untuk Solusi Air Anda</h1>
        <p class="max-w-3xl mx-auto text-lg text-[#e5efff]">Tim kami siap membantu pemasangan, service, dan konsultasi filter air untuk rumah dan bisnis.</p>
    </div>
</header>

<main class="max-w-8xl mx-auto px-8 py-20">
    <section class="grid gap-6 lg:grid-cols-3">
        <div class="rounded-4xl bg-white p-8 shadow-xl border border-slate-200">
            <h2 class="text-2xl font-bold mb-4">Alamat Kantor</h2>
            <p class="text-gray-600 mb-3">Perum Pabean Asri Blok V Nomor 7, Kabupaten Sidoarjo.</p>
            <p class="text-sm text-slate-500">Buka Senin - Jumat, 08.00 - 17.00</p>
        </div>
        <div class="rounded-4xl bg-white p-8 shadow-xl border border-slate-200">
            <h2 class="text-2xl font-bold mb-4">Telepon / WhatsApp</h2>
            <p class="text-gray-600 mb-3">0878 7889 2188</p>
            <p class="text-gray-600">0812 3176 7702</p>
        </div>
        <div class="rounded-4xl bg-white p-8 shadow-xl border border-slate-200">
            <h2 class="text-2xl font-bold mb-4">Email & Dukungan</h2>
            <p class="text-gray-600 mb-3">nirmalafilter@gmail.com</p>
            <p class="text-sm text-slate-500">Balasan cepat untuk pertanyaan teknis dan pemesanan.</p>
        </div>
    </section>

    <section class="mt-12 grid gap-8 lg:grid-cols-[1.1fr_0.9fr]">
        <div class="rounded-4xl bg-white p-10 shadow-xl border border-slate-200">
            <h2 class="text-3xl font-bold mb-6">Kirim Pesan Langsung</h2>
            @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                    {{ session('success') }}
                </div>
            @endif
            <form action="{{ route('kontak.send') }}" method="POST" class="space-y-5">
                @csrf
                <div class="grid gap-5 md:grid-cols-2">
                    <div>
                        <label for="nama" class="block text-sm font-medium text-slate-700 mb-2">Nama</label>
                        <input type="text" name="nama" id="nama" required class="w-full rounded-2xl border border-slate-300 px-4 py-3 text-slate-900 focus:border-[#4f7fc3] focus:ring-2 focus:ring-[#dfe9ff]" placeholder="Nama lengkap">
                    </div>
                    <div>
                        <label for="telepon" class="block text-sm font-medium text-slate-700 mb-2">Telepon / WhatsApp</label>
                        <input type="text" name="telepon" id="telepon" required class="w-full rounded-2xl border border-slate-300 px-4 py-3 text-slate-900 focus:border-[#4f7fc3] focus:ring-2 focus:ring-[#dfe9ff]" placeholder="08xx xxxx xxxx">
                    </div>
                </div>
                <div class="grid gap-5 md:grid-cols-2">
                    <div>
                        <label for="email" class="block text-sm font-medium text-slate-700 mb-2">Email</label>
                        <input type="email" name="email" id="email" required class="w-full rounded-2xl border border-slate-300 px-4 py-3 text-slate-900 focus:border-[#4f7fc3] focus:ring-2 focus:ring-[#dfe9ff]" placeholder="email@contoh.com">
                    </div>
                    <div>
                        <label for="subjek" class="block text-sm font-medium text-slate-700 mb-2">Subjek</label>
                        <input type="text" name="subjek" id="subjek" class="w-full rounded-2xl border border-slate-300 px-4 py-3 text-slate-900 focus:border-[#4f7fc3] focus:ring-2 focus:ring-[#dfe9ff]" placeholder="Tujuan pesan">
                    </div>
                </div>
                <div>
                    <label for="pesan" class="block text-sm font-medium text-slate-700 mb-2">Pesan</label>
                    <textarea name="pesan" id="pesan" rows="6" required class="w-full rounded-2xl border border-slate-300 px-4 py-3 text-slate-900 focus:border-[#4f7fc3] focus:ring-2 focus:ring-[#dfe9ff]" placeholder="Tulis pesan Anda..."></textarea>
                </div>
                <button type="submit" class="w-full rounded-full bg-[#3464a3] px-6 py-4 text-white text-base font-semibold shadow-lg hover:bg-[#274e7c] transition">Kirim Pesan</button>
            </form>
        </div>
        <div class="space-y-6">
            <div class="rounded-4xl bg-[#eaf2ff] p-8 shadow-xl border border-[#d7e7ff]">
                <h3 class="text-2xl font-bold mb-3">Butuh Bantuan Cepat?</h3>
                <p class="text-gray-600 mb-4">Hubungi customer service melalui WhatsApp untuk konsultasi teknis, harga, dan layanan cepat.</p>
                <div class="space-y-3">
                    <a href="https://wa.me/6287878892188" target="_blank" class="block rounded-2xl bg-white px-5 py-3 text-[#3464a3] font-semibold shadow-sm hover:bg-slate-100 transition">WhatsApp 1</a>
                    <a href="https://wa.me/6281231767702" target="_blank" class="block rounded-2xl bg-white px-5 py-3 text-[#3464a3] font-semibold shadow-sm hover:bg-slate-100 transition">WhatsApp 2</a>
                </div>
            </div>
            <div class="rounded-4xl bg-white p-8 shadow-xl border border-slate-200">
                <h3 class="text-2xl font-bold mb-3">Jam Operasional</h3>
                <p class="text-gray-600">Senin - Jumat: 08.00 - 17.00</p>
                <p class="text-gray-600">Sabtu: 08.00 - 13.00</p>
                <p class="text-gray-500 text-sm mt-4">Di luar jam kerja, silakan kirim pesan melalui formulir atau WhatsApp.</p>
            </div>
        </div>
    </section>

    <section class="mt-12 rounded-4xl bg-[#f7fbff] p-10 shadow-xl border border-[#e3eefc]">
        <div class="grid gap-8 lg:grid-cols-3">
            <div>
                <h3 class="text-xl font-semibold mb-3">1. Konsultasi Gratis</h3>
                <p class="text-gray-600">Kami bantu analisa kebutuhan air dan solusi filter terbaik tanpa biaya.</p>
            </div>
            <div>
                <h3 class="text-xl font-semibold mb-3">2. Waktu Tanggap Cepat</h3>
                <p class="text-gray-600">Balasan cepat melalui WhatsApp dan email untuk pemesanan dan support.</p>
            </div>
            <div>
                <h3 class="text-xl font-semibold mb-3">3. Jaminan Layanan</h3>
                <p class="text-gray-600">Dukungan purna jual, servis berkala, dan pelayanan profesional.</p>
            </div>
        </div>
    </section>
</main>
@endsection
