<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ambara Advocate - Firma Hukum Profesional</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&family=Poppins:wght@600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Lato', sans-serif;
            color: #2C3E50;
        }
        h1, h2, h3 {
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
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
        .hamburger-line {
            width: 100%;
            height: 3px;
            background-color: #2C3E50;
            transition: all 0.3s ease-in-out;
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
    </style>
</head>
<body>

<!-- Header -->
<header class="bg-white p-4 md:p-6 shadow-md fixed w-full z-50">
    <div class="container mx-auto flex justify-between items-center">
        <a href="#" class="text-xl font-bold text-[#2C3E50]">AMBARA ADVOCATE</a>
        <nav id="nav-menu" class="hidden md:flex space-x-8 text-sm">
            <a href="#about" class="hover:text-[#E74C3C] transition-colors">Tentang Kami</a>
            <a href="#services" class="hover:text-[#E74C3C] transition-colors">Layanan</a>
            <a href="#team" class="hover:text-[#E74C3C] transition-colors">Tim</a>
            <a href="#blog" class="hover:text-[#E74C3C] transition-colors">Blog</a>
            <a href="#contact" class="hover:text-[#E74C3C] transition-colors">Kontak</a>
        </nav>
        <a href="#contact" class="bg-[#E74C3C] text-white py-2 px-6 rounded-full hidden md:block hover:bg-red-700 transition-colors">Hubungi Kami</a>
        <div id="hamburger-button" class="md:hidden">
            <div class="hamburger">
                <span class="hamburger-line"></span>
                <span class="hamburger-line"></span>
                <span class="hamburger-line"></span>
            </div>
        </div>
    </div>
</header>

<main class="pt-20">
    <!-- Hero Section -->
    <section id="hero" class="bg-gray-100 py-16 md:py-24">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center gap-8 md:gap-16">
            <div class="md:w-1/2">
                <h1 class="text-4xl md:text-6xl font-extrabold leading-tight text-[#2C3E50]">Transformasi Hukum Melalui Inovasi dan Integritas</h1>
                <p class="mt-4 text-lg text-gray-700">Ambara Advocate: Menemani perjalanan Anda dengan solusi hukum yang strategis dan berorientasi pada masa depan.</p>
                <a href="#services" class="mt-8 inline-block bg-[#E74C3C] text-white py-3 px-8 rounded-full text-lg hover:bg-red-700 transition-colors">Temukan Solusi Kami</a>
            </div>
            <div class="md:w-1/2">
                <!-- Placeholder untuk gambar -->
                <div class="w-full aspect-video bg-gray-300 rounded-lg"></div>
            </div>
        </div>
    </section>

    <!-- Tentang Kami -->
    <section id="about" class="bg-white py-16 md:py-24">
        <div class="container mx-auto px-4 flex flex-col md:flex-row-reverse items-center gap-8 md:gap-16">
            <div class="md:w-1/2">
                <h2 class="text-3xl md:text-4xl font-bold text-[#2C3E50]">Lebih Dari Sekadar Pengacara</h2>
                <p class="mt-4 text-gray-700 leading-relaxed">Ambara Advocate adalah firma hukum yang berdedikasi untuk memberikan layanan hukum komprehensif, didukung oleh tim ahli yang berkomitmen pada integritas dan keunggulan. Kami percaya bahwa setiap kasus adalah unik dan layak mendapatkan pendekatan personal yang terperinci. Dengan pemahaman mendalam tentang lanskap hukum yang terus berubah, kami siap menjadi mitra terpercaya Anda.</p>
            </div>
            <div class="md:w-1/2">
                <!-- Placeholder untuk gambar tim atau kantor -->
                <div class="w-full aspect-square bg-gray-200 rounded-lg"></div>
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
                <div class="absolute w-1 h-full bg-[#E74C3C] left-1/2 transform -translate-x-1/2 hidden md:block"></div>
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
                    <div class="w-full aspect-square bg-gray-300"></div>
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-semibold">Nama Pengacara 1</h3>
                        <p class="text-gray-600">Managing Partner</p>
                    </div>
                </div>
                <!-- Anggota Tim 2 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="w-full aspect-square bg-gray-300"></div>
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-semibold">Nama Pengacara 2</h3>
                        <p class="text-gray-600">Partner</p>
                    </div>
                </div>
                <!-- Anggota Tim 3 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="w-full aspect-square bg-gray-300"></div>
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
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 justify-items-center">
                <!-- Logo Afiliasi/Penghargaan Placeholder -->
                <div class="w-24 h-24 bg-gray-200 rounded-lg flex items-center justify-center p-4">
                    <span class="text-gray-500 text-sm text-center">Logo 1</span>
                </div>
                <div class="w-24 h-24 bg-gray-200 rounded-lg flex items-center justify-center p-4">
                    <span class="text-gray-500 text-sm text-center">Logo 2</span>
                </div>
                <div class="w-24 h-24 bg-gray-200 rounded-lg flex items-center justify-center p-4">
                    <span class="text-gray-500 text-sm text-center">Logo 3</span>
                </div>
                <div class="w-24 h-24 bg-gray-200 rounded-lg flex items-center justify-center p-4">
                    <span class="text-gray-500 text-sm text-center">Logo 4</span>
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
                    <div class="w-full aspect-video bg-gray-300"></div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Judul Artikel Blog 1</h3>
                        <p class="text-gray-600 text-sm">Deskripsi singkat artikel blog. Baca selengkapnya...</p>
                    </div>
                </div>
                <!-- Artikel Blog 2 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="w-full aspect-video bg-gray-300"></div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Judul Artikel Blog 2</h3>
                        <p class="text-gray-600 text-sm">Deskripsi singkat artikel blog. Baca selengkapnya...</p>
                    </div>
                </div>
                <!-- Artikel Blog 3 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="w-full aspect-video bg-gray-300"></div>
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
                <button type="submit" class="w-full bg-[#E74C3C] py-3 rounded-lg font-semibold hover:bg-red-700 transition-colors">Kirim Pesan</button>
            </form>
        </div>
    </section>
</main>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const hamburgerButton = document.getElementById('hamburger-button');
        const navMenu = document.getElementById('nav-menu');
        
        hamburgerButton.addEventListener('click', () => {
            hamburgerButton.classList.toggle('active');
            navMenu.classList.toggle('hidden');
            navMenu.classList.toggle('flex');
            navMenu.classList.toggle('flex-col');
            navMenu.classList.toggle('bg-white');
            navMenu.classList.toggle('absolute');
            navMenu.classList.toggle('top-16');
            navMenu.classList.toggle('left-0');
            navMenu.classList.toggle('w-full');
            navMenu.classList.toggle('space-x-0');
            navMenu.classList.toggle('space-y-4');
            navMenu.classList.toggle('p-4');
            navMenu.classList.toggle('shadow-md');
        });
    });
</script>

</body>
</html>
