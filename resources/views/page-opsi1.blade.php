<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ambara Advocate - Firma Hukum Profesional</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: "Open Sans", sans-serif;
            color: #2C3E50;
        }
        h1, h2, h3 {
            font-family: "Montserrat", sans-serif;
            font-weight: 700;
        }

        /* --- Header Scroll Effect --- */
        #main-header {
            transition: background-color 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }
        #main-header.scrolled {
            background-color: white;
            box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
        }
        
        /* Text and links color transition */
        #main-header .brand-logo, #main-header .nav-link {
            color: white;
            transition: color 0.3s ease-in-out;
        }
        #main-header.scrolled .brand-logo, #main-header.scrolled .nav-link {
            color: #2C3E50;
        }
        #main-header.scrolled .nav-link:hover {
            color: #E74C3C;
        }

        /* --- Hamburger Menu --- */
        .hamburger-line {
            background-color: white; /* Initial color */
            width: 100%;
            height: 3px;
            transition: all 0.3s ease-in-out;
        }
        #main-header.scrolled .hamburger-line {
            background-color: #2C3E50; /* Color on scroll */
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
<body>

<!-- Header -->
<header id="main-header" class="p-4 md:p-6 fixed w-full z-50">
    <div class="container mx-auto flex justify-between items-center">
        <a href="#" class="brand-logo text-xl font-bold">
            <img class="max-w-32" src="{{asset('resources/images/ambara-logo.png')}}" alt="Logo" srcset="">
        </a>
        <nav class="hidden md:flex space-x-8 text-sm">
            <a href="#about" class="nav-link hover:text-emerald-600">Tentang Kami</a>
            <a href="#services" class="nav-link hover:text-emerald-600">Layanan</a>
            <a href="#team" class="nav-link hover:text-emerald-600">Tim</a>
            <a href="#blog" class="nav-link hover:text-emerald-600">Blog</a>
            <a href="#contact" class="nav-link hover:text-emerald-600">Kontak</a>
        </nav>
        <a href="#contact" class="bg-emerald-600 text-white py-2 px-6 rounded-full hidden md:block hover:bg-red-700 transition-colors">Hubungi Kami</a>
        <div id="hamburger-button" class="md:hidden">
            <div class="hamburger">
                <span class="hamburger-line"></span>
                <span class="hamburger-line"></span>
                <span class="hamburger-line"></span>
            </div>
        </div>
    </div>
    <!-- Mobile Menu Container -->
    <div id="mobile-menu" class="hidden md:hidden bg-white mt-4 rounded-md shadow-lg">
        <a href="#about" class="block py-3 px-4 text-sm text-[#2C3E50] hover:bg-gray-100">Tentang Kami</a>
        <a href="#services" class="block py-3 px-4 text-sm text-[#2C3E50] hover:bg-gray-100">Layanan</a>
        <a href="#team" class="block py-3 px-4 text-sm text-[#2C3E50] hover:bg-gray-100">Tim</a>
        <a href="#blog" class="block py-3 px-4 text-sm text-[#2C3E50] hover:bg-gray-100">Blog</a>
        <a href="#contact" class="block py-3 px-4 text-sm text-[#2C3E50] hover:bg-gray-100">Kontak</a>
    </div>
</header>

<main>
    <!-- Hero Section -->
    <section id="hero" class="relative h-screen text-center flex flex-col justify-end text-zinc-400">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0">
            <img src="{{asset('resources/images/ambara.png')}}" alt="Tim Ambara Advocate sedang berdiskusi" class="w-full h-full object-[50%_70%] object-cover">
            <div class="absolute inset-0 bg-gray-900/60"></div>
        </div>

        <!-- Content -->
        <div class="relative container mx-auto px-4 pb-20 md:pb-24">
            <div class="max-w-3xl mx-auto">
                <p class="mt-4 text-lg font-semibold ">Kami hadir untuk menyederhanakan masalah hukum Anda dengan pendekatan yang cermat dan profesional.</p>
                <a href="#services" class="mt-8 inline-block bg-emerald-600 text-gray-200 py-3 px-8 rounded-full text-lg hover:bg-red-700 transition-colors">Hubungi Kami</a>
            </div>
        </div>
    </section>

    <!-- Tentang Kami -->
    <section id="about" class="bg-white py-16 md:py-24 pt-20">
        <div class="container mx-auto px-4 flex flex-col md:flex-row-reverse items-center gap-8 md:gap-16">
            <div class="md:w-1/2">
                <h2 class="text-3xl md:text-4xl font-bold text-[#2C3E50]">Lebih Dari Sekadar Pengacara</h2>
                <p class="mt-4 text-gray-700 leading-relaxed">Ambara Advocate adalah firma hukum yang berdedikasi untuk memberikan layanan hukum komprehensif, didukung oleh tim ahli yang berkomitmen pada integritas dan keunggulan. Kami percaya bahwa setiap kasus adalah unik dan layak mendapatkan pendekatan personal yang terperinci. Dengan pemahaman mendalam tentang lanskap hukum yang terus berubah, kami siap menjadi mitra terpercaya Anda.</p>
            </div>
            <div class="md:w-1/2">
                <!-- Placeholder untuk gambar tim atau kantor -->
                <div class="w-full aspect-square rounded-lg">
                     <img src="{{asset('resources/images/ceo.jpg')}}" alt="Tim Ambara Advocate sedang berdiskusi" class="h-full w-full object-cover rounded-lg object-top">
                </div>
            </div>
        </div>
    </section>

    <!-- Layanan Kami -->
    <section id="services" class="bg-gray-100 py-16 md:py-24">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12">Solusi Hukum yang Beragam untuk Setiap Kebutuhan</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Layanan 1 -->
                <div class="bg-white p-6 md:p-8 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold mb-2">Hukum Korporat</h3>
                    <p class="text-gray-600">Kami membantu perusahaan dalam pembentukan, restrukturisasi, dan kepatuhan regulasi, memastikan bisnis Anda beroperasi secara legal dan efisien.</p>
                </div>
                <!-- Layanan 2 -->
                <div class="bg-white p-6 md:p-8 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold mb-2">Litigasi & Penyelesaian Sengketa</h3>
                    <p class="text-gray-600">Tim litigasi kami siap mewakili Anda di pengadilan dan arbitrase untuk menyelesaikan sengketa dengan strategi yang efektif.</p>
                </div>
                <!-- Layanan 3 -->
                <div class="bg-white p-6 md:p-8 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold mb-2">Kekayaan Intelektual (IPR)</h3>
                    <p class="text-gray-600">Lindungi aset intelektual Anda. Kami menyediakan layanan pendaftaran merek dagang, hak cipta, dan paten.</p>
                </div>
                <!-- Tambahkan layanan lainnya jika diperlukan -->
            </div>
        </div>
    </section>

    <!-- Sejarah Perusahaan -->
    <section id="history" class="bg-white py-16 md:py-24">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12">Jejak Langkah Ambara Advocate</h2>
            <div class="relative max-w-4xl mx-auto">
                <div class="absolute w-1 h-full bg-emerald-600 left-1/2 transform -translate-x-1/2 hidden md:block"></div>
                <!-- Timeline Item 1 -->
                <div class="mb-8 flex justify-between items-center w-full right-timeline">
                    <div class="order-1 md:w-5/12"></div>
                    <div class="z-20 flex items-center order-1 bg-gray-500 shadow-xl w-8 h-8 rounded-full">
                        <h1 class="mx-auto text-white font-semibold text-lg">1</h1>
                    </div>
                    <div class="order-1 bg-gray-100 rounded-lg shadow-xl w-full md:w-5/12 px-6 py-4">
                        <h3 class="mb-3 font-bold text-gray-800 text-xl">Didirikan</h3>
                        <p class="text-sm leading-snug tracking-wide text-gray-600 text-opacity-100">Ambara Advocate resmi didirikan dengan komitmen untuk memberikan layanan hukum terbaik.</p>
                    </div>
                </div>
                <!-- Timeline Item 2 -->
                <div class="mb-8 flex justify-between flex-row-reverse items-center w-full left-timeline">
                    <div class="order-1 md:w-5/12"></div>
                    <div class="z-20 flex items-center order-1 bg-gray-500 shadow-xl w-8 h-8 rounded-full">
                        <h1 class="mx-auto text-white font-semibold text-lg">2</h1>
                    </div>
                    <div class="order-1 bg-gray-100 rounded-lg shadow-xl w-full md:w-5/12 px-6 py-4">
                        <h3 class="mb-3 font-bold text-gray-800 text-xl">Ekspansi Layanan</h3>
                        <p class="text-sm leading-snug tracking-wide text-gray-600 text-opacity-100">Kami memperluas cakupan layanan untuk mencakup area Hukum Korporat dan Kekayaan Intelektual.</p>
                    </div>
                </div>
                <!-- Tambahkan item timeline lainnya di sini -->
            </div>
        </div>
    </section>
    
    <!-- Tim Pengacara -->
    <section id="team" class="bg-gray-100 py-16 md:py-24">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12">Tim Profesional Kami</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Anggota Tim 1 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="w-full aspect-square"><img class="h-full w-full object-cover" src="{{asset('resources/images/lawyer6.jpg')}}" alt="" srcset=""></div>
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-semibold">Nama Pengacara 1</h3>
                        <p class="text-gray-600">Managing Partner</p>
                    </div>
                </div>
                <!-- Anggota Tim 2 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="w-full aspect-square"><img class="h-full w-full object-cover" src="{{asset('resources/images/lawyer5.jpg')}}" alt="" srcset=""></div>
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-semibold">Nama Pengacara 2</h3>
                        <p class="text-gray-600">Partner</p>
                    </div>
                </div>
                <!-- Anggota Tim 3 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="w-full aspect-square"><img class="h-full w-full object-cover" src="{{asset('resources/images/lawyer2.jpg')}}" alt="" srcset=""></div>
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-semibold">Nama Pengacara 3</h3>
                        <p class="text-gray-600">Senior Associate</p>
                    </div>
                </div>
                <!-- Tambahkan anggota tim lainnya di sini -->
            </div>
        </div>
    </section>

    <!-- Section Pengakuan, Penghargaan & Afiliasi -->
    <section id="awards" class="bg-white py-16 md:py-24">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12">Terpercaya dan Terkemuka</h2>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-y-8 gap-x-12 lg:gap-x-32">
                <div class="flex flex-col items-center text-center border-b border-gray-600">
                    <img class="max-w-20" src="{{asset('resources/images/brand1.png')}}" alt="" srcset="">
                    <p>Brand Name 1</p>
                </div>
                <div class="flex flex-col items-center text-center border-b border-gray-600">
                    <img class="max-w-20" src="{{asset('resources/images/brand2.png')}}" alt="" srcset="">
                    <p>Brand Name 2</p>
                </div>
                 <div class="flex flex-col items-center text-center border-b border-gray-600">
                    <img class="max-w-20" src="{{asset('resources/images/brand3.png')}}" alt="" srcset="">
                    <p>Brand Name 3</p>
                </div>
                 <div class="flex flex-col items-center text-center border-b border-gray-600">
                    <img class="max-w-20" src="{{asset('resources/images/brand4.png')}}" alt="" srcset="">
                    <p>Brand Name 4</p>
                </div>
                 <div class="flex flex-col items-center text-center border-b border-gray-600">
                    <img class="max-w-20" src="{{asset('resources/images/brand5.png')}}" alt="" srcset="">
                    <p>Brand Name 5</p>
                </div>
                 <div class="flex flex-col items-center text-center border-b border-gray-600">
                    <img class="max-w-20" src="{{asset('resources/images/brand6.png')}}" alt="" srcset="">
                    <p>Brand Name 6</p>
                </div>
                 <div class="flex flex-col items-center text-center border-b border-gray-600">
                    <img class="max-w-20" src="{{asset('resources/images/brand8.png')}}" alt="" srcset="">
                    <p>Brand Name 8</p>
                </div>
                 <div class="flex flex-col items-center text-center border-b border-gray-600">
                    <img class="max-w-20" src="{{asset('resources/images/brand9.png')}}" alt="" srcset="">
                    <p>Brand Name 9</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Publikasi & Blog -->
    <section id="blog" class="bg-gray-100 py-16 md:py-24">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12">Insights Hukum Terbaru</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Artikel Blog 1 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="w-full aspect-video bg-gray-300">
                        <img class="w-full h-full object-cover" src="{{asset('resources/images/blog1.jpg')}}" alt="" srcset="">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Judul Artikel Blog 1</h3>
                        <p class="text-gray-600 text-sm">Deskripsi singkat artikel blog. Baca selengkapnya...</p>
                    </div>
                </div>
                <!-- Artikel Blog 2 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="w-full aspect-video bg-gray-300">
                        <img class="w-full h-full object-cover" src="{{asset('resources/images/blog2.jpg')}}" alt="" srcset="">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Judul Artikel Blog 2</h3>
                        <p class="text-gray-600 text-sm">Deskripsi singkat artikel blog. Baca selengkapnya...</p>
                    </div>
                </div>
                <!-- Artikel Blog 3 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="w-full aspect-video bg-gray-300">
                        <img class="w-full h-full object-cover" src="{{asset('resources/images/blog3.jpg')}}" alt="" srcset="">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Judul Artikel Blog 3</h3>
                        <p class="text-gray-600 text-sm">Deskripsi singkat artikel blog. Baca selengkapnya...</p>
                    </div>
                </div>
                <!-- Tambahkan artikel lainnya jika diperlukan -->
            </div>
        </div>
    </section>

    <!-- Formulir Kontak -->
    <section id="contact" class="bg-[#2C3E50] text-white py-16 md:py-24">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Mari Terhubung</h2>
            <p class="text-lg mb-8">Jika Anda membutuhkan konsultasi, silakan hubungi kami. Tim kami akan segera menanggapi pertanyaan Anda.</p>
            <form class="max-w-xl mx-auto space-y-4">
                <input type="text" placeholder="Nama Lengkap" class="w-full p-3 rounded-lg text-gray-800">
                <input type="email" placeholder="Email" class="w-full p-3 rounded-lg text-gray-800">
                <textarea placeholder="Pesan Anda" rows="4" class="w-full p-3 rounded-lg text-gray-800"></textarea>
                <button type="submit" class="w-full bg-emerald-600 py-3 rounded-lg font-semibold hover:bg-red-700 transition-colors">Kirim Pesan</button>
            </form>
        </div>
    </section>
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
