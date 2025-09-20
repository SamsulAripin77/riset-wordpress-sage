<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ambara Advocate - Firma Hukum Profesional</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="//unpkg.com/alpinejs" defer></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Swiper JS -->
   
    <script type="module">
        tailwind.config = {
    theme: {
      extend: {
        fontFamily: {
          crimson: ['Crimson Text', 'serif'],
          roboto: ['Roboto'],
        },
            colors: {
            primary: '#111827',     // Neutral black
            secondary: '#1F2937',   // Gray-800
            surface: '#F3F4F6',     // Gray-100
            background: '#FFFFFF',   //white
            accent: '#065F46',      // hijau
        },
      },
    },
    plugins: [
        ],
  }
    </script>

    @php(do_action('get_header'))
    @php(wp_head())
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            font-family: "Open Sans", sans-serif;
        }

        h1,
        h2,
        h3 {
            font-family: "Montserrat", sans-serif;
            font-weight: 700;
        }
    </style>
    @stack('styles')
</head>

<body @php(body_class())>
    @php(wp_body_open())

    <div id="app">
        <a class="sr-only focus:not-sr-only" href="#main">
            {{ __('Skip to content', 'sage') }}
        </a>
        @include('sections.header')

        <main id="main">
            @yield('content')
        </main>
        @include('sections.footer')
    </div>
    @php(do_action('get_footer'))
    @php(wp_footer())
    @stack('scripts')
    </main>

     <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
     <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
     <script>
  AOS.init();
</script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
        const header = document.getElementById('main-header');
        const hamburgerButton = document.getElementById('hamburger-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const hamburger = hamburgerButton.querySelector('.hamburger');

        // Navbar scroll effect
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                // Only remove scrolled class if mobile menu is not open
                if (mobileMenu.classList.contains('hidden')) {
                    header.classList.remove('scrolled');
                }
            }
        });

        // Mobile menu toggle
        hamburgerButton.addEventListener('click', () => {
            hamburger.classList.toggle('active');
            mobileMenu.classList.toggle('hidden');

            // Logic to handle header background when mobile menu is open
            if (!mobileMenu.classList.contains('hidden')) {
                header.classList.add('scrolled');
            } else if (window.scrollY <= 50) {
                header.classList.remove('scrolled');
            }
        });
    });
    </script>

</body>

</html>