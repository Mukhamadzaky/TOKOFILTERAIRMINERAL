<header class="top-header">
    <div class="header-inner">
        <div class="header-copy">ONE-STEP SOLUTION FOR WATER PURIFICATION AND SOFTENER</div>
        <div class="brand-logo">
            <h1>Nature Water</h1>
            <div class="brand-subtitle">Keman®</div>
            <div class="brand-subtitle">www.naturewater.cn</div>
        </div>
    </div>
</header>

<nav class="site-nav">
    <div class="nav-inner">
        <div class="nav-links">
            <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Beranda</a>
            <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">Tentang Kami</a>
            <a href="{{ route('produk') }}" class="{{ request()->routeIs('produk') ? 'active' : '' }}">Produk</a>
            <a href="{{ route('keunggulan') }}" class="{{ request()->routeIs('keunggulan') ? 'active' : '' }}">Keunggulan</a>
            <a href="{{ route('klien') }}" class="{{ request()->routeIs('klien') ? 'active' : '' }}">Klien</a>
            <a href="{{ route('kontak') }}" class="{{ request()->routeIs('kontak') ? 'active' : '' }}">Kontak</a>
        </div>
        <a href="{{ route('kontak') }}" class="cta-link">Pesan Sekarang</a>
    </div>
</nav>
