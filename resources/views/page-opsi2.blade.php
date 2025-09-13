<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ambara Advocate - Law Firm</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --c-navy: #0B3954; /* Prussian Blue - Bold, Profesional, Modern */
            --c-charcoal: #36454F; /* Charcoal - Elegan & Netral */
            --c-accent: #9EADC8; /* Silver Blue - Aksen Mewah & Modern */
            --c-accent-soft: #BCC8DE; /* Aksen Hover */
            --c-gray: #F8F8FF; /* Ghost White - Latar bersih dengan nuansa biru */
        }

        body {
            font-family: 'Montserrat', sans-serif;
            color: var(--c-navy);
            background-color: var(--c-gray);
        }

        .btn-cta {
            background-color: var(--c-accent);
            color: var(--c-navy);
            padding: 0.8rem 2rem;
            border-radius: 9999px;
            font-weight: 600;
            transition: background-color 0.3s ease, transform 0.2s ease;
            display: inline-block;
        }

        .btn-cta:hover {
            background-color: var(--c-accent-soft);
            transform: translateY(-2px);
        }
        
        .section-headline {
            font-size: 2.5rem;
            font-weight: 700;
            line-height: 1.2;
            color: var(--c-navy);
        }

        @media (min-width: 768px) {
            .section-headline {
                font-size: 4rem;
            }

        #main-header {
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }
        #main-header.scrolled {
            background-color: white;
            box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
        }
        #main-header .nav-link {
            color: white;
            transition: color 0.3s ease;
        }
        #main-header.scrolled .nav-link {
            color: var(--c-navy);
        }
        #main-header .btn-cta {
            background-color: transparent;
            border: 2px solid var(--c-accent);
            color: white;
        }
        #main-header.scrolled .btn-cta {
            background-color: var(--c-accent);
            border-color: var(--c-accent);
            color: var(--c-navy);
        }
        }
    </style>
</head>
<body>

    <!-- Header & Navigation -->
    <header id="main-header" class="fixed top-0 left-0 w-full z-50 transition-colors duration-300">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center space-x-2">
                 <img class="max-w-32" src="{{asset('resources/images/ambara-logo.png')}}" alt="Logo" srcset="">
            </div>
            <nav class="hidden md:flex space-x-8 text-sm font-medium">
                <a href="#about" class="nav-link hover:text-[var(--c-accent)] transition-colors">Firma Kami</a>
                <a href="#services" class="nav-link hover:text-[var(--c-accent)] transition-colors">Layanan</a>
                <a href="#team" class="nav-link hover:text-[var(--c-accent)] transition-colors">Pengacara</a>
                <a href="#awards" class="nav-link hover:text-[var(--c-accent)] transition-colors">Pengakuan</a>
                <a href="#articles" class="nav-link hover:text-[var(--c-accent)] transition-colors">Publikasi</a>
            </nav>
            <a href="#contact" class="btn-cta hidden md:block">Hubungi Kami</a>
        </div>
    </header>

    <main>

        <!-- Hero Section - Bold & Modern -->
        <section id="hero" class="relative h-screen flex items-center justify-center">
            <!-- Background Image -->
            <img src="{{asset('resources/images/court3.jpg')}}" alt="Hero Background" class="absolute top-0 left-0 w-full h-full object-cover -z-10">
            <!-- Overlay -->
            <div class="absolute top-0 left-0 w-full h-full bg-[var(--c-navy)] opacity-50 -z-10"></div>
            
            <!-- Content -->
            <div class="relative container mx-auto px-6 text-white text-center pt-24">
                <h1 class="text-5xl md:text-7xl font-bold leading-tight mb-4">Membangun Masa Depan Hukum yang Terintegrasi</h1>
                <p class="text-xl md:text-2xl font-light max-w-3xl mx-auto mb-8">Kami adalah firma hukum yang berdedikasi untuk memberikan solusi inovatif, menggabungkan pengalaman lokal dengan standar keahlian global untuk setiap klien kami.</p>
                <a href="#about" class="btn-cta">Pelajari Lebih Lanjut</a>
            </div>
        </section>

        <!-- Tentang Kami - Dynamic Layout -->
        <section id="about" class="bg-white py-20 md:py-32">
            <div class="container mx-auto px-6">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <div class="lg:order-2">
                        <img src="{{asset('resources/images/team1.jpg')}}" alt="Tentang Kami" class="w-full h-auto rounded-xl shadow-2xl">
                    </div>
                    <div class="lg:order-1">
                        <h4 class="text-sm font-semibold uppercase text-gray-500 mb-2 tracking-widest">FIRMA KAMI</h4>
                        <h2 class="section-headline mb-6">Salah satu firma hukum independen terkemuka di Indonesia</h2>
                        <p class="text-lg text-[var(--c-charcoal)] leading-relaxed mb-4">Kami menggabungkan pengalaman dan keahlian dengan standar layanan yang tinggi, didukung oleh inovasi untuk memberikan solusi yang tepat bagi klien.</p>
                        <p class="text-sm text-[var(--c-charcoal)]/80 leading-relaxed">Pengacara kami menggabungkan keahlian lokal dan internasional. Kami berkomitmen untuk memberikan kualitas, etika, dan profesionalisme. Kami fokus pada solusi komprehensif, standar integritas tertinggi, dan tidak pernah mengambil jalan pintas.</p>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Awards Section - Grid Layout -->
        <section id="awards" class="bg-[#F5F5F5] py-20 md:py-32">
            <div class="container mx-auto px-6">
                <div class="text-center mb-12">
                    <h4 class="text-sm font-semibold uppercase text-gray-500 mb-2 tracking-widest">PENGAKUAN</h4>
                    <h2 class="text-4xl md:text-6xl font-bold text-[var(--c-navy)]">Diakui secara nasional dan internasional</h2>
                </div>
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-3 lg:grid-cols-4 gap-y-8 lg:gap-x-10">
                    <div class="award-item bg-white p-4 rounded-lg shadow-sm text-center">
                        <div class="max-w-32 max-h-32 h-full w-full mx-auto rounded-lg flex items-center justify-center p-2 mb-3">
                            <img src="{{asset('resources/images/brand1.png')}}" alt="Law Firm of the Year" class="w-full h-full object-contain">
                        </div>
                        <p class="text-xs font-semibold">Law Firm of the Year</p>
                    </div>
                     <div class="award-item bg-white p-4 rounded-lg shadow-sm text-center">
                        <div class="max-w-32 max-h-32 h-full w-full mx-auto rounded-lg flex items-center justify-center p-2 mb-3">
                            <img src="{{asset('resources/images/brand2.png')}}" alt="Law Firm of the Year" class="w-full h-full object-contain">
                        </div>
                        <p class="text-xs font-semibold">Law Firm of the Year</p>
                    </div>
                     <div class="award-item bg-white p-4 rounded-lg shadow-sm text-center">
                        <div class="max-w-32 max-h-32 h-full w-full mx-auto rounded-lg flex items-center justify-center p-2 mb-3">
                            <img src="{{asset('resources/images/brand3.png')}}" alt="Law Firm of the Year" class="w-full h-full object-contain">
                        </div>
                        <p class="text-xs font-semibold">Law Firm of the Year</p>
                    </div>
                     <div class="award-item bg-white p-4 rounded-lg shadow-sm text-center">
                        <div class="max-w-32 max-h-32 h-full w-full mx-auto rounded-lg flex items-center justify-center p-2 mb-3">
                            <img src="{{asset('resources/images/brand3.png')}}" alt="Law Firm of the Year" class="w-full h-full object-contain">
                        </div>
                        <p class="text-xs font-semibold">Law Firm of the Year</p>
                    </div>

                     <div class="award-item bg-white p-4 rounded-lg shadow-sm text-center">
                        <div class="max-w-32 max-h-32 h-full w-full mx-auto rounded-lg flex items-center justify-center p-2 mb-3">
                            <img src="{{asset('resources/images/brand5.png')}}" alt="Law Firm of the Year" class="w-full h-full object-contain">
                        </div>
                        <p class="text-xs font-semibold">Law Firm of the Year</p>
                    </div>
                     <div class="award-item bg-white p-4 rounded-lg shadow-sm text-center">
                        <div class="max-w-32 max-h-32 h-full w-full mx-auto rounded-lg flex items-center justify-center p-2 mb-3">
                            <img src="{{asset('resources/images/brand6.png')}}" alt="Law Firm of the Year" class="w-full h-full object-contain">
                        </div>
                        <p class="text-xs font-semibold">Law Firm of the Year</p>
                    </div>
                     <div class="award-item bg-white p-4 rounded-lg shadow-sm text-center">
                        <div class="max-w-32 max-h-32 h-full w-full mx-auto rounded-lg flex items-center justify-center p-2 mb-3">
                            <img src="{{asset('resources/images/brand7.png')}}" alt="Law Firm of the Year" class="w-full h-full object-contain">
                        </div>
                        <p class="text-xs font-semibold">Law Firm of the Year</p>
                    </div>
                     <div class="award-item bg-white p-4 rounded-lg shadow-sm text-center">
                        <div class="max-w-32 max-h-32 h-full w-full mx-auto rounded-lg flex items-center justify-center p-2 mb-3">
                            <img src="{{asset('resources/images/brand8.png')}}" alt="Law Firm of the Year" class="w-full h-full object-contain">
                        </div>
                        <p class="text-xs font-semibold">Law Firm of the Year</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section Timeline - Highlighted Boxes -->
        <section id="history" class="bg-white py-20 md:py-32">
            <div class="container mx-auto px-6">
                <div class="text-center mb-12">
                    <h4 class="text-sm font-semibold uppercase text-gray-500 mb-2 tracking-widest">PERJALANAN KAMI</h4>
                    <h2 class="text-4xl md:text-6xl font-bold text-[var(--c-navy)]">Tonggak Penting</h2>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <!-- Timeline Item 1 -->
                    <div class="bg-gray-100 p-8 rounded-xl shadow-lg border-l-4 border-[var(--c-accent)] hover:shadow-xl transition-shadow duration-300">
                        <span class="text-4xl font-bold text-gray-400 mb-4 block">1992</span>
                        <h3 class="font-bold text-2xl text-[var(--c-navy)] mb-2">Firma Kami Didirikan</h3>
                        <p class="text-sm text-gray-700 leading-relaxed">Ambara Advocate didirikan dan pindah ke gedung baru, yang terletak di jantung kawasan bisnis Jakarta.</p>
                    </div>
                    <!-- Timeline Item 2 -->
                    <div class="bg-gray-100 p-8 rounded-xl shadow-lg border-l-4 border-[var(--c-accent)] hover:shadow-xl transition-shadow duration-300">
                        <span class="text-4xl font-bold text-gray-400 mb-4 block">1997</span>
                        <h3 class="font-bold text-2xl text-[var(--c-navy)] mb-2">Ekspansi Regional</h3>
                        <p class="text-sm text-gray-700 leading-relaxed">Selama krisis ekonomi, kami berpartisipasi dalam kelompok inisiatif dan mengembangkan gagasan untuk menyelesaikan hutang.</p>
                    </div>
                    <!-- Timeline Item 3 -->
                    <div class="bg-gray-100 p-8 rounded-xl shadow-lg border-l-4 border-[var(--c-accent)] hover:shadow-xl transition-shadow duration-300">
                        <span class="text-4xl font-bold text-gray-400 mb-4 block">2005</span>
                        <h3 class="font-bold text-2xl text-[var(--c-navy)] mb-2">Pengakuan Internasional</h3>
                        <p class="text-sm text-gray-700 leading-relaxed">Kami mendapatkan pengakuan dari berbagai lembaga internasional dan memperkuat reputasi kami sebagai firma hukum yang berfokus pada klien.</p>
                    </div>
                    <!-- Timeline Item 4 -->
                    <div class="bg-gray-100 p-8 rounded-xl shadow-lg border-l-4 border-[var(--c-accent)] hover:shadow-xl transition-shadow duration-300">
                        <span class="text-4xl font-bold text-gray-400 mb-4 block">2015</span>
                        <h3 class="font-bold text-2xl text-[var(--c-navy)] mb-2">Era Digital</h3>
                        <p class="text-sm text-gray-700 leading-relaxed">Kami mulai mengintegrasikan teknologi dan layanan digital untuk memenuhi kebutuhan klien di era modern, dengan fokus pada efisiensi dan inovasi.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section Afiliasi - Grid with Image -->
        <section id="afiliasi" class="bg-[#F5F5F5] py-20 md:py-32">
            <div class="container mx-auto px-6">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <div>
                        <h4 class="text-sm font-semibold uppercase text-gray-500 mb-2 tracking-widest">AFILIASI</h4>
                        <h2 class="section-headline mb-4">Jejak Langkah Global Kami</h2>
                        <p class="text-lg text-gray-700 leading-relaxed">Kami berafiliasi dengan sejumlah organisasi berpengaruh yang mengakui posisi perusahaan dan meningkatkan koneksi internasional kami.</p>
                    </div>
                    <div class="grid grid-cols-2 sm:grid-cols-3 gap-8">
                        <div class="bg-white p-4 min-h-44 rounded-lg shadow-md flex justify-center items-center">
                            <img src="{{asset('resources/images/aff1.jpg')}}" alt="Logo Afiliasi" class="w-full h-auto object-contain rounded-lg">
                        </div>
                        <div class="bg-white p-4 min-h-44 rounded-lg shadow-md flex justify-center items-center">
                            <img src="{{asset('resources/images/aff2.jpg')}}" alt="Logo Afiliasi" class="w-full h-auto object-contain rounded-lg">
                        </div>
                        <div class="bg-white p-4 min-h-44 rounded-lg shadow-md flex justify-center items-center">
                            <img src="{{asset('resources/images/aff3.jpg')}}" alt="Logo Afiliasi" class="w-full h-auto object-contain rounded-lg">
                        </div>
                        <div class="bg-white p-4 min-h-44 rounded-lg shadow-md flex justify-center items-center">
                            <img src="{{asset('resources/images/aff4.jpg')}}" alt="Logo Afiliasi" class="w-full h-auto object-contain rounded-lg">
                        </div>
                        <div class="bg-white p-4 min-h-44 rounded-lg shadow-md flex justify-center items-center">
                            <img src="{{asset('resources/images/aff5.jpg')}}" alt="Logo Afiliasi" class="w-full h-auto object-contain rounded-lg">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Section Biografi Founder - Full Width Image -->
        <section id="founder" class="relative py-20 md:py-32 text-white">
            <div class="absolute inset-0 bg-cover bg-center" style="background-image: url(@asset('resources/images/team3.jpg'));"></div>
            <div class="absolute inset-0 bg-[var(--c-charcoal)] opacity-70"></div>
            <div class="relative container mx-auto px-6 text-center">
                <h4 class="text-sm font-semibold uppercase text-gray-200 mb-2 tracking-widest">BIOGRAFI</h4>
                <h2 class="text-4xl md:text-6xl font-bold mb-4">Mengenal Lebih Dekat Pendiri Kami</h2>
                <p class="text-lg md:text-xl max-w-2xl mx-auto mb-8">Nama Founder adalah seorang praktisi hukum senior dengan pengalaman lebih dari 20 tahun. Beliau mendirikan Ambara Advocate dengan keyakinan bahwa layanan hukum harus transparan, etis, dan berorientasi pada hasil nyata.</p>
                <a href="#" class="inline-block bg-transparent text-white font-semibold py-3 px-8 rounded-full border-2 border-[var(--c-accent)] hover:bg-[var(--c-accent)] hover:text-[var(--c-navy)] transition-colors">Pelajari Selengkapnya</a>
            </div>
        </section>

        <!-- Section Artikel - Cards with hover effects -->
        <section id="articles" class="bg-white py-20 md:py-32">
            <div class="container mx-auto px-6">
                <div class="flex items-center justify-between mb-8">
                    <h4 class="text-sm font-semibold uppercase text-gray-500 tracking-widest">PUBLIKASI & BLOG</h4>
                    <a href="#" class="text-[var(--c-accent)] font-semibold hover:underline">Lihat Semua &rarr;</a>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Artikel 1 -->
                    <div class="bg-gray-100 rounded-lg shadow-lg overflow-hidden hover:shadow-2xl transition-shadow duration-300">
                        <img src="{{asset('resources/images/blog1.jpg')}}" alt="Artikel 1" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <span class="text-sm text-gray-500">22 Juni 2024</span>
                            <h3 class="font-bold text-xl mt-2 mb-2 text-[var(--c-navy)]">Pentingnya Legal Due Diligence dalam M&A.</h3>
                            <a href="#" class="text-[var(--c-accent)] font-semibold mt-4 hover:underline">Baca Selengkapnya</a>
                        </div>
                    </div>
                    <!-- Artikel 2 -->
                    <div class="bg-gray-100 rounded-lg shadow-lg overflow-hidden hover:shadow-2xl transition-shadow duration-300">
                        <img src="{{asset('resources/images/blog2.jpg')}}" alt="Artikel 2" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <span class="text-sm text-gray-500">15 Mei 2024</span>
                            <h3 class="font-bold text-xl mt-2 mb-2 text-[var(--c-navy)]">Strategi Efektif dalam Penyelesaian Sengketa.</h3>
                            <a href="#" class="text-[var(--c-accent)] font-semibold mt-4 hover:underline">Baca Selengkapnya</a>
                        </div>
                    </div>
                    <!-- Artikel 3 -->
                    <div class="bg-gray-100 rounded-lg shadow-lg overflow-hidden hover:shadow-2xl transition-shadow duration-300">
                        <img src="{{asset('resources/images/blog1.jpg')}}" alt="Artikel 3" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <span class="text-sm text-gray-500">01 April 2024</span>
                            <h3 class="font-bold text-xl mt-2 mb-2 text-[var(--c-navy)]">Perlindungan Merek Dagang di Era Digital.</h3>
                            <a href="#" class="text-[var(--c-accent)] font-semibold mt-4 hover:underline">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section Biografi Founder -->
        <section id="founder" class="bg-[#F5F5F5] py-20 md:py-32">
            <div class="container mx-auto px-6 md:px-12 flex flex-col md:flex-row items-center gap-12">
                <div class="md:w-1/2">
                    <img src="{{asset('resources/images/lawyer3.jpg')}}" alt="Foto Founder" class="w-full max-h-[80vh] rounded-xl shadow-lg object-cover object-top">
                </div>
                <div class="md:w-1/2">
                    <h4 class="caption-text mb-2">Biografi</h4>
                    <h2 class="headline-text font-bold mb-4">Mengenal Lebih Dekat Pendiri Kami</h2>
                    <p class="mt-6 text-gray-700 leading-relaxed text-lg">Nama Founder adalah seorang praktisi hukum senior dengan pengalaman lebih dari 20 tahun di bidang hukum korporat dan litigasi. Beliau mendirikan Ambara Advocate dengan keyakinan bahwa layanan hukum haruslah transparan, etis, dan berorientasi pada hasil nyata bagi klien. Komitmen beliau terhadap keunggulan telah mengantarkan firma ini menjadi salah satu yang paling dihormati di industri.</p>
                </div>
            </div>
        </section>

        <!-- Section Hubungi Kami -->
        <section id="contact" class="bg-[var(--c-navy)] py-20 md:py-32 text-white">
            <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-2 items-center gap-12">
                <div>
                    <h2 class="text-4xl md:text-6xl font-bold mb-4">Hubungi Kami</h2>
                    <p class="text-lg md:text-xl text-gray-200">Hubungi tim kami untuk konsultasi awal yang komprehensif. Kami siap membantu Anda.</p>
                </div>
                <form class="bg-white p-8 md:p-12 rounded-lg shadow-xl text-[var(--c-navy)]">
                    <h3 class="text-2xl font-bold mb-6">Formulir Kontak</h3>
                    <div class="mb-4">
                        <input type="text" placeholder="Nama Lengkap" class="w-full p-3 rounded-lg bg-gray-100 border-2 border-gray-200 focus:outline-none focus:border-[var(--c-accent)]">
                    </div>
                    <div class="mb-4">
                        <input type="email" placeholder="Alamat Email" class="w-full p-3 rounded-lg bg-gray-100 border-2 border-gray-200 focus:outline-none focus:border-[var(--c-accent)]">
                    </div>
                    <div class="mb-6">
                        <textarea placeholder="Pesan Anda" rows="4" class="w-full p-3 rounded-lg bg-gray-100 border-2 border-gray-200 focus:outline-none focus:border-[var(--c-accent)]"></textarea>
                    </div>
                    <button type="submit" class="w-full btn-cta">Kirim Pesan</button>
                </form>
            </div>
        </section>

    </main>

    <!-- Footer -->
    <footer class="bg-[var(--c-charcoal)] text-gray-300 py-12">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="md:col-span-1">
                    <h3 class="text-2xl font-bold text-white mb-4">Ambara Advocate</h3>
                    <p class="text-sm mb-4">Jl. Jend. Sudirman Kav 28, Jakarta, 12920, Indonesia</p>
                    <p class="text-sm">Tel: +62 21 2953 2000</p>
                    <p class="text-sm">Email: info@ambaraadvocate.com</p>
                </div>
                <div class="grid grid-cols-2 gap-4 md:col-span-2">
                    <div>
                        <h4 class="text-white font-semibold mb-4">Menu</h4>
                        <ul class="text-sm space-y-2">
                            <li><a href="#" class="hover:text-[var(--c-accent)] transition-colors">Beranda</a></li>
                            <li><a href="#" class="hover:text-[var(--c-accent)] transition-colors">Firma Kami</a></li>
                            <li><a href="#" class="hover:text-[var(--c-accent)] transition-colors">Layanan</a></li>
                            <li><a href="#" class="hover:text-[var(--c-accent)] transition-colors">Pengacara</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-white font-semibold mb-4">Lainnya</h4>
                        <ul class="text-sm space-y-2">
                            <li><a href="#" class="hover:text-[var(--c-accent)] transition-colors">Pengakuan</a></li>
                            <li><a href="#" class="hover:text-[var(--c-accent)] transition-colors">Publikasi</a></li>
                            <li><a href="#" class="hover:text-[var(--c-accent)] transition-colors">Karir</a></li>
                            <li><a href="#" class="hover:text-[var(--c-accent)] transition-colors">Kontak</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="border-gray-700 my-8">
            <div class="flex flex-col md:flex-row justify-between items-center text-sm text-gray-500">
                <p>&copy; 2024 Ambara Advocate. Hak Cipta Dilindungi Undang-Undang.</p>
                <div class="flex space-x-4 mt-4 md:mt-0">
                    <a href="#" class="hover:text-[var(--c-accent)] transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.766s.784-1.767 1.75-1.767 1.75.79 1.75 1.767c0 .976-.784 1.766-1.75 1.766zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                    </a>
                    <a href="#" class="hover:text-[var(--c-accent)] transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-2 16h-2v-6h2v6zm-1-6.891c-.607 0-1.1-.496-1.1-1.109 0-.612.492-1.109 1.1-1.109s1.1.497 1.1 1.109c0 .613-.493 1.109-1.1 1.109zm8 6.891h-2v-3.493c0-.943-.067-1.745-1.008-1.745-1.009 0-1.192.736-1.192 1.484v3.754h-2v-6h2v.916c.31-.589 1.161-1.109 2.086-1.109 2.294 0 2.914 1.545 2.914 4.502v3.691z"/></svg>
                    </a>
                    <a href="#" class="hover:text-[var(--c-accent)] transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.772 1.667 4.92 4.919.058 1.267.07 1.646.07 4.852 0 3.204-.012 3.584-.07 4.85-.148 3.252-1.667 4.771-4.919 4.919-1.267.058-1.647.07-4.852.07-3.204 0-3.584-.012-4.85-.07-3.252-.149-4.771-1.667-4.919-4.919-.058-1.267-.07-1.647-.07-4.852 0-3.204.012-3.584.07-4.85.149-3.252 1.667-4.771 4.919-4.919 1.267-.058 1.647-.07 4.852-.07zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.203-6.78 2.618-6.983 6.982-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.203 4.358 2.618 6.78 6.982 6.982 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.358-.203 6.78-2.618 6.982-6.982.058-1.28.072-1.689.072-4.948 0-3.259-.014-3.667-.072-4.947-.203-4.358-2.618-6.78-6.982-6.982-1.281-.059-1.689-.073-4.948-.073z"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const header = document.getElementById('main-header');
            window.addEventListener('scroll', () => {
                if (window.scrollY > 50) {
                    header.classList.add('scrolled');
                } else {
                    header.classList.remove('scrolled');
                }
            });
        });
    </script>
</body>
</html>
