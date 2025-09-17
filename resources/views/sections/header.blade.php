@php
    $current_url = url()->current();
@endphp

<!-- Header -->
<header id="main-header" class="p-4 md:p-6 fixed w-full z-50 bg-primary text-surface">
    <div class="container mx-auto flex justify-between items-center">
        <a href="#" class="brand-logo text-xl font-bold text-surface">
            <img class="max-w-32" src="{{asset('resources/images/ambara-logo.png')}}" alt="Logo" srcset="">
        </a>
        <nav class="hidden md:flex space-x-8 text-sm">
            <a href="#about" class="nav-link hover:text-secondary">Tentang Kami</a>
            <a href="#team" class="nav-link hover:text-secondary">Pengacara Kami</a>
            <a href="#services" class="nav-link hover:text-secondary">Layanan Kami</a>
            <a href="#blog" class="nav-link hover:text-secondary">Artikel</a>
        </nav>
        <a href="#contact" class="bg-secondary text-surface py-2 px-6 rounded-full hidden md:block hover:bg-primary transition-colors">Hubungi Kami</a>
        <div id="hamburger-button" class="md:hidden">
            <div class="hamburger">
                <span class="hamburger-line"></span>
                <span class="hamburger-line"></span>
                <span class="hamburger-line"></span>
            </div>
        </div>
    </div>
    <!-- Mobile Menu Container -->
    <div id="mobile-menu" class="hidden md:hidden bg-surface mt-4 rounded-md shadow-lg">
        <a href="#about" class="block py-3 px-4 text-sm text-primary hover:bg-background">Tentang Kami</a>
        <a href="#services" class="block py-3 px-4 text-sm text-primary hover:bg-background">Layanan</a>
        <a href="#team" class="block py-3 px-4 text-sm text-primary hover:bg-background">Tim</a>
        <a href="#blog" class="block py-3 px-4 text-sm text-primary hover:bg-background">Blog</a>
        <a href="#contact" class="block py-3 px-4 text-sm text-primary hover:bg-background">Kontak</a>
    </div>
</header>