@php
    $current_url = url()->current();
    $is_homepage = false;
    if(is_front_page() || is_home()){
        $is_homepage = true;
    }
@endphp
@push('styles')
    <style>
        /* --- Header Scroll Effect --- */
        #main-header {
            transition: background-color 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            border-bottom: 1px solid rgba(255, 255, 255, 0.3) !important;
        }

        #main-header.scrolled {
            background-color: white;
            box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
        }

        /* Text and links color transition */
        #main-header .brand-logo,
        #main-header .nav-link {
            color: white;
            transition: color 0.3s ease-in-out;
        }

        #main-header.scrolled .brand-logo,
        #main-header.scrolled .nav-link {
            color: #2C3E50;
        }

        #main-header.scrolled .nav-link:hover {
            color: #E74C3C;
        }

        /* --- Hamburger Menu --- */
        .hamburger-line {
            background-color: white;
            /* Initial color */
            width: 100%;
            height: 3px;
            transition: all 0.3s ease-in-out;
        }

        #main-header.scrolled .hamburger-line {
            background-color: #2C3E50;
            /* Color on scroll */
        }

        /* Custom styles for the mobile menu button */
        .hamburger {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            width: 24px;
            height: 20px;
            cursor: pointer;
        }

        .hamburger.active .hamburger-line:nth-child(2) {
            opacity: 0;
        }

        .hamburger.active .hamburger-line:nth-child(1) {
            transform: translateY(8.5px) rotate(45deg);
        }

        .hamburger.active .hamburger-line:nth-child(3) {
            transform: translateY(-8.5px) rotate(-45deg);
        }

        /* When mobile menu is open, hamburger lines are always dark */
        .hamburger.active .hamburger-line {
            background-color: #2C3E50;
        }
    </style>
@endpush
<!-- Header -->
<header id="main-header" class="p-4 md:p-6 {{$is_homepage ? 'fixed' : 'bg-primary'}} w-full z-50 text-surface">
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
       <a href="#contact" class="bg-accent text-surface py-2 px-6 rounded-full hidden md:block hover:bg-primary transition-colors">Hubungi Kami</a>
        <div id="hamburger-button" class="md:hidden">
            <div class="hamburger">
                <span class="hamburger-line"></span>
                <span class="hamburger-line"></span>
                <span class="hamburger-line"></span>
            </div>
        </div>
    </div>
    <!-- Mobile Menu Container -->
    <div id="mobile-menu" class="hidden md:hidden mt-4 rounded-md">
        <a href="#about" class="block py-3 px-4 text-sm text-primary hover:bg-background">Tentang Kami</a>
        <a href="#services" class="block py-3 px-4 text-sm text-primary hover:bg-background">Layanan</a>
        <a href="#team" class="block py-3 px-4 text-sm text-primary hover:bg-background">Tim</a>
        <a href="#blog" class="block py-3 px-4 text-sm text-primary hover:bg-background">Blog</a>
        <a href="#contact" class="block py-3 px-4 text-sm text-primary hover:bg-background">Kontak</a>
    </div>
</header>