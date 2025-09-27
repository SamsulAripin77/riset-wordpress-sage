@php
    $current_url = url()->current();
    $is_homepage = false;
    if(is_front_page() || is_home()){
        $is_homepage = true;
    }
@endphp
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
            color: #065F46;
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

        /* --- Mobile Menu --- */
        #mobile-menu .nav-link {
            color: #2C3E50;
            padding-top: 0.75rem;
            padding-bottom: 0.75rem;
        }

        #mobile-menu .nav-link:hover {
            color: #065F46;
        }

        #mobile-menu .mobile-menu {
            background-color: white;
            border-radius: 0.375rem;
            /* box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1); */
            /* border: 1px solid #e5e7eb; */
        }

        #mobile-menu .mobile-menu > li:not(:last-child) {
            border-bottom: 1px solid #e5e7eb;
        }
    </style>
<!-- Header -->
<header id="main-header" class="p-4 md:p-6 {{$is_homepage ? 'fixed' : 'bg-primary'}} w-full z-50 text-surface">
    <div class="container mx-auto flex justify-between items-center">
        <a href="/" class="brand-logo text-xl font-bold text-surface">
            <img class="max-w-32" src="{{asset('resources/images/ambara-logo.png')}}" alt="Logo" srcset="">
        </a>
        @if (!empty($menu_items))
            <nav class="hidden lg:flex text-sm">
                <ul class="flex md:gap-x-4 lg:gap-x-12">
                    @foreach ($menu_items as $item)
                        @include('partials.menu-item', ['item' => $item])
                    @endforeach
                </ul>
            </nav>
        @endif
       <a href="/contact-us" class="bg-accent text-surface py-2 px-6 rounded-full hidden lg:block hover:bg-accent transition-colors">Hubungi Kami</a>
        <div id="hamburger-button" class="lg:hidden">
            <div class="hamburger">
                <span class="hamburger-line"></span>
                <span class="hamburger-line"></span>
                <span class="hamburger-line"></span>
            </div>
        </div>
    </div>
    <!-- Mobile Menu Container -->
    <div id="mobile-menu" class="hidden lg:hidden mt-4">
        @if (!empty($menu_items))
            <ul class="mobile-menu">
                @foreach ($menu_items as $item)
                    @include('partials.menu-item', ['item' => $item])
                @endforeach
            </ul>
        @endif
    </div>
</header>
