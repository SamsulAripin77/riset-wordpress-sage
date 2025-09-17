<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ambara Advocate - Firma Hukum Profesional</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
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
            background: '#FFFFFF',
            accent: '#065F46',
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