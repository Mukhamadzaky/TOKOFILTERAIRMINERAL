@extends('layouts.main')

@section('title', 'Keunggulan | Nirmala Filter Air')

@section('content')
<header class="bg-blue-600 text-white pt-32 pb-20">
    <div class="max-w-6xl mx-auto px-4 text-center">
        <p class="uppercase tracking-[0.4em] text-sm text-blue-200 mb-4">Keunggulan Nirmala Filter Air</p>
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Kenapa Harus Memilih Filter Nirmala?</h1>
        <p class="max-w-3xl mx-auto text-lg text-blue-100">Lihat alasan mengapa pelanggan percaya kepada sistem filter air kami.</p>
    </div>
</header>

<main class="max-w-6xl mx-auto px-4 py-16 flex-grow">
    <div class="grid gap-6 md:grid-cols-3">
        <div class="p-6 bg-white rounded-3xl shadow-lg">
            <h2 class="text-xl font-bold mb-3">Garansi 1 Tahun</h2>
            <p class="text-gray-600">Perbaikan gratis jika ada masalah pada filter selama masa garansi.</p>
        </div>
        <div class="p-6 bg-white rounded-3xl shadow-lg">
            <h2 class="text-xl font-bold mb-3">Ketahanan 10 Tahun</h2>
            <p class="text-gray-600">Tabung anti karat dan sambungan kuat untuk penggunaan jangka panjang.</p>
        </div>
        <div class="p-6 bg-white rounded-3xl shadow-lg">
            <h2 class="text-xl font-bold mb-3">Pengoperasian Mudah</h2>
            <p class="text-gray-600">Sistem threeway valve memudahkan pengaturan dan perawatan.</p>
        </div>
        <div class="p-6 bg-white rounded-3xl shadow-lg">
            <h2 class="text-xl font-bold mb-3">Perawatan Ringkas</h2>
            <p class="text-gray-600">Cukup lakukan backwash mingguan untuk menjaga kinerja ideal.</p>
        </div>
        <div class="p-6 bg-white rounded-3xl shadow-lg">
            <h2 class="text-xl font-bold mb-3">Gratis Konsultasi</h2>
            <p class="text-gray-600">Tim ahli siap memberikan konsultasi gratis untuk menentukan solusi filter yang tepat.</p>
        </div>
        <div class="p-6 bg-white rounded-3xl shadow-lg">
            <h2 class="text-xl font-bold mb-3">Pemasangan Profesional</h2>
            <p class="text-gray-600">Teknisi berpengalaman memastikan instalasi yang tepat dan optimal.</p>
        </div>
    </div>
</main>
@endsection