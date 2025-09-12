<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ambara Advocate - Firma Hukum Profesional</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- Swiper.js CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            color: #1D2D50;
        }
        .full-width-scroll {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
        .full-width-scroll::-webkit-scrollbar {
            display: none;
        }
        /* Style untuk garis timeline */
        .timeline-line {
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            height: 2px;
            background-color: #CFAF70;
            transform: translateY(-50%);
            z-index: 10;
        }
        /* Gaya mewah untuk teks dan elemen */
        .caption-text {
            color: #CFAF70;
            letter-spacing: 0.1em;
            text-transform: uppercase;
        }
        .headline-text {
            font-size: 3rem;
            line-height: 1.2;
            color: #1D2D50;
        }
        @media (min-width: 768px) {
            .headline-text {
                font-size: 4.5rem;
            }
        }
        /* Swiper custom styles */
        .swiper-button-prev,
        .swiper-button-next {
            display: none !important;
        }
        .swiper-pagination-bullet {
            background-color: #1D2D50;
            width: 12px;
            height: 12px;
            opacity: 0.5;
        }
        .swiper-pagination-bullet-active {
            background-color: #CFAF70;
            opacity: 1;
        }
        .award-item {
            transition: transform 0.3s ease-in-out;
        }
        .award-item:hover {
            transform: scale(1.05);
        }
        .underline-input {
            border-top: none;
            border-left: none;
            border-right: none;
            border-bottom: 2px solid #1D2D50;
            background: transparent;
            padding: 0 4px;
        }
        .underline-input:focus {
            outline: none;
            border-bottom-color: #CFAF70;
        }
        .soft-underline {
            border-bottom: 1px solid #E5E7EB;
            padding-bottom: 4px;
        }
    </style>
</head>
<body class="bg-[#F5F5F5]">

<!-- Header -->
<header class="bg-white p-6 md:p-8 shadow-md fixed w-full z-50">
    <div class="container mx-auto flex justify-between items-center">
        <a href="#" class="text-2xl font-bold text-[#1D2D50]">AMBARA ADVOCATE</a>
        <nav class="hidden md:flex space-x-12 text-sm">
            <a href="#about" class="hover:text-[#CFAF70] transition-colors">Tentang Kami</a>
            <a href="#services" class="hover:text-[#CFAF70] transition-colors">Layanan</a>
            <a href="#team" class="hover:text-[#CFAF70] transition-colors">Tim</a>
            <a href="#articles" class="hover:text-[#CFAF70] transition-colors">Artikel</a>
            <a href="#contact" class="hover:text-[#CFAF70] transition-colors">Kontak</a>
        </nav>
        <a href="#contact" class="bg-[#CFAF70] text-[#1D2D50] py-3 px-8 rounded-full hidden md:block hover:bg-[#E6C37D] transition-colors font-semibold">Hubungi Kami</a>
    </div>
</header>

<main class="pt-24">
    <!-- Hero Section -->
    <section id="hero" class="relative overflow-hidden">
        <div class="absolute inset-0 bg-cover bg-center bg-gray-400" style="background-image: url('https://placehold.co/1920x1080/333333/CFAF70?text=Ambara+Advocate');"></div>
        <div class="relative z-10 bg-black bg-opacity-50 flex flex-col items-start justify-center text-white min-h-screen px-6 py-24 md:px-16">
            <h4 class="caption-text mb-4 text-[#CFAF70] tracking-widest text-lg">Kepercayaan dan Integritas</h4>
            <h1 class="text-5xl md:text-8xl font-extrabold leading-tight">Membentuk Masa Depan Hukum Indonesia.</h1>
            <p class="mt-6 md:text-xl max-w-2xl">Ambara Advocate adalah firma hukum yang berdedikasi untuk memberikan layanan hukum komprehensif, didukung oleh tim ahli yang berkomitmen pada integritas dan keunggulan.</p>
            <a href="#services" class="mt-10 inline-block bg-[#CFAF70] text-[#1D2D50] py-4 px-10 rounded-full text-lg hover:bg-[#E6C37D] transition-colors font-semibold">Jelajahi Layanan Kami</a>
        </div>
    </section>
    
    <!-- New Image Section - FIXED -->
    <section id="promo-image" class="py-12 md:py-24">
        <div class="container mx-auto px-0">
            <div class="w-[70%] h-80 md:h-96 rounded-r-xl overflow-hidden shadow-lg bg-cover bg-center" style="background-image: url('https://placehold.co/1920x1080/CFAF70/1D2D50?text=Promo+Image');"></div>
        </div>
    </section>

    <!-- Section Penghargaan (Awards) - FIXED -->
    <section id="awards" class="bg-[#F5F5F5] py-20 md:py-32">
        <div class="container mx-auto px-6 md:px-12">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
                <!-- Kolom Kiri: Teks -->
                <div>
                    <h4 class="caption-text mb-2">Penghargaan</h4>
                    <h2 class="headline-text font-bold mb-6">Pengakuan dari Industri.</h2>
                    <p class="text-lg text-gray-700 leading-relaxed">Kami diakui secara nasional dan internasional atas komitmen kami pada keunggulan dan integritas dalam praktik hukum. Setiap penghargaan adalah bukti dedikasi kami untuk memberikan hasil terbaik bagi klien.</p>
                </div>
                <!-- Kolom Kanan: Grid Gambar -->
                <div>
                    <div class="flex items-center space-x-4 mb-8">
                        <span class="text-sm font-semibold text-gray-600">Filter Tahun:</span>
                        <select id="year-filter" class="text-sm underline-input focus:ring-0">
                            <option value="all">Semua</option>
                            <option value="2024">2024</option>
                            <option value="2023">2023</option>
                            <option value="2022">2022</option>
                        </select>
                    </div>
                    <div id="awards-grid" class="grid grid-cols-2 gap-6">
                        <!-- Awards will be injected here by JS -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Afiliasi - FIXED -->
    <section id="afiliasi" class="bg-white py-20 md:py-32">
        <div class="container mx-auto px-6 md:px-12">
            <!-- Section 1: Title dengan Background -->
            <div class="relative mb-16">
                <div class="absolute inset-0 bg-cover bg-center rounded-xl" style="background-image: url('https://placehold.co/1920x800/CFAF70/1D2D50?text=Affiliate+Background');"></div>
                <div class="relative z-10 bg-black bg-opacity-40 p-12 rounded-xl">
                    <div class="w-1/2">
                        <h4 class="caption-text mb-2 text-white">Afiliasi</h4>
                        <h2 class="headline-text font-bold text-white mb-4">Jejak Langkah Global Kami.</h2>
                        <p class="text-lg leading-relaxed text-white">Kami bangga menjadi bagian dari jaringan global dan diakui oleh berbagai lembaga terkemuka, menunjukkan komitmen kami pada standar tertinggi.</p>
                    </div>
                </div>
            </div>
            
            <!-- Section 2: Grid Afiliasi -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="w-full aspect-square bg-gray-200 rounded-lg flex items-center justify-center mb-3">
                        <span class="text-gray-500">Logo 1</span>
                    </div>
                    <p class="text-sm font-semibold">Asosiasi Advokat Indonesia</p>
                </div>
                <div class="text-center">
                    <div class="w-full aspect-square bg-gray-200 rounded-lg flex items-center justify-center mb-3">
                        <span class="text-gray-500">Logo 2</span>
                    </div>
                    <p class="text-sm font-semibold">International Bar Association</p>
                </div>
                <div class="text-center">
                    <div class="w-full aspect-square bg-gray-200 rounded-lg flex items-center justify-center mb-3">
                        <span class="text-gray-500">Logo 3</span>
                    </div>
                    <p class="text-sm font-semibold">Asian Legal Business</p>
                </div>
                <div class="text-center">
                    <div class="w-full aspect-square bg-gray-200 rounded-lg flex items-center justify-center mb-3">
                        <span class="text-gray-500">Logo 4</span>
                    </div>
                    <p class="text-sm font-semibold">ASEAN Law Association</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Sejarah Perusahaan (Timeline) - FIXED -->
    <section id="history" class="py-20 md:py-32 bg-[#F5F5F5]">
        <div class="container mx-auto px-6 md:px-12 mb-12 text-center">
            <h4 class="caption-text mb-2">Timeline</h4>
            <h2 class="headline-text font-bold">Kisah Perjalanan Kami.</h2>
        </div>
        <div class="relative">
            <div class="swiper timelineSwiper">
                <div class="swiper-wrapper">
                    <!-- Timeline Item 1 -->
                    <div class="swiper-slide">
                        <div class="w-80 mx-auto p-6 bg-white rounded-xl shadow-lg">
                            <h3 class="font-bold text-xl mb-2 text-[#1D2D50]">2010: Didirikan</h3>
                            <p class="text-sm text-gray-600">Ambara Advocate resmi didirikan dengan visi untuk menjadi firma hukum terdepan di Indonesia.</p>
                        </div>
                    </div>
                    <!-- Timeline Item 2 -->
                    <div class="swiper-slide">
                        <div class="w-80 mx-auto p-6 bg-white rounded-xl shadow-lg">
                            <h3 class="font-bold text-xl mb-2 text-[#1D2D50]">2015: Ekspansi Layanan</h3>
                            <p class="text-sm text-gray-600">Kami memperluas cakupan layanan untuk mencakup area Hukum Korporat dan Kekayaan Intelektual.</p>
                        </div>
                    </div>
                    <!-- Timeline Item 3 -->
                    <div class="swiper-slide">
                        <div class="w-80 mx-auto p-6 bg-white rounded-xl shadow-lg">
                            <h3 class="font-bold text-xl mb-2 text-[#1D2D50]">2020: Penghargaan</h3>
                            <p class="text-sm text-gray-600">Kami menerima penghargaan bergengsi dari Asian Legal Business sebagai salah satu firma hukum terbaik di Asia.</p>
                        </div>
                    </div>
                    <!-- Timeline Item 4 -->
                    <div class="swiper-slide">
                        <div class="w-80 mx-auto p-6 bg-white rounded-xl shadow-lg">
                            <h3 class="font-bold text-xl mb-2 text-[#1D2D50]">2023: Ekspansi Tim</h3>
                            <p class="text-sm text-gray-600">Kami menyambut partner baru dan memperkuat tim dengan menambah ahli-ahli hukum di berbagai bidang.</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination mt-8"></div>
            </div>
        </div>
    </section>

    <!-- Section Biografi Founder -->
    <section id="founder" class="bg-white py-20 md:py-32">
        <div class="container mx-auto px-6 md:px-12 flex flex-col md:flex-row items-center gap-12">
            <div class="md:w-1/2">
                <img src="https://placehold.co/600x800/333333/CFAF70?text=Foto+Founder" alt="Foto Founder" class="w-full h-auto rounded-xl shadow-lg">
            </div>
            <div class="md:w-1/2">
                <h4 class="caption-text mb-2">Biografi</h4>
                <h2 class="headline-text font-bold mb-4">Mengenal Lebih Dekat Pendiri Kami.</h2>
                <p class="mt-6 text-gray-700 leading-relaxed text-lg">Nama Founder adalah seorang praktisi hukum senior dengan pengalaman lebih dari 20 tahun di bidang hukum korporat dan litigasi. Beliau mendirikan Ambara Advocate dengan keyakinan bahwa layanan hukum haruslah transparan, etis, dan berorientasi pada hasil nyata bagi klien. Komitmen beliau terhadap keunggulan telah mengantarkan firma ini menjadi salah satu yang paling dihormati di industri.</p>
            </div>
        </div>
    </section>

    <!-- Section Artikel (Articles) -->
    <section id="articles" class="bg-[#F5F5F5] py-20 md:py-32">
        <div class="container mx-auto px-6 md:px-12">
            <h4 class="caption-text mb-2">Artikel</h4>
            <h2 class="headline-text font-bold mb-12">Wawasan Hukum Terkini.</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Artikel 1 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="https://placehold.co/600x400/1D2D50/CFAF70?text=Hukum+Korporasi" alt="Artikel 1" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <span class="text-sm text-gray-500">22 Juni 2024</span>
                        <h3 class="font-semibold text-xl mt-2 mb-2">Pentingnya Legal Due Diligence dalam M&A.</h3>
                        <p class="text-gray-700 text-sm">Pelajari mengapa uji tuntas hukum adalah langkah krusial sebelum melakukan merger atau akuisisi...</p>
                        <a href="#" class="inline-block text-[#1D2D50] font-semibold mt-4 hover:text-[#CFAF70] transition-colors">Baca Selengkapnya &rarr;</a>
                    </div>
                </div>
                <!-- Artikel 2 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="https://placehold.co/600x400/1D2D50/CFAF70?text=Hukum+Litigasi" alt="Artikel 2" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <span class="text-sm text-gray-500">15 Mei 2024</span>
                        <h3 class="font-semibold text-xl mt-2 mb-2">Strategi Efektif dalam Penyelesaian Sengketa.</h3>
                        <p class="text-gray-700 text-sm">Memahami berbagai pendekatan litigasi dan arbitrase untuk menyelesaikan konflik bisnis...</p>
                        <a href="#" class="inline-block text-[#1D2D50] font-semibold mt-4 hover:text-[#CFAF70] transition-colors">Baca Selengkapnya &rarr;</a>
                    </div>
                </div>
                <!-- Artikel 3 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="https://placehold.co/600x400/1D2D50/CFAF70?text=Hukum+IP" alt="Artikel 3" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <span class="text-sm text-gray-500">01 April 2024</span>
                        <h3 class="font-semibold text-xl mt-2 mb-2">Perlindungan Merek Dagang di Era Digital.</h3>
                        <p class="text-gray-700 text-sm">Bagaimana memastikan merek dagang Anda terlindungi dari pelanggaran di platform online...</p>
                        <a href="#" class="inline-block text-[#1D2D50] font-semibold mt-4 hover:text-[#CFAF70] transition-colors">Baca Selengkapnya &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Subscribe -->
    <section id="subscribe" class="relative py-20 md:py-32">
        <div class="absolute inset-0 bg-cover bg-center bg-gray-800" style="background-image: url('https://placehold.co/1920x1080/1D2D50/CFAF70?text=Background+Image');"></div>
        <div class="relative z-10 container mx-auto px-6 md:px-12 flex flex-col items-center justify-center text-center text-white">
            <h4 class="caption-text mb-2 text-white">Subscribe</h4>
            <h2 class="headline-text font-bold mb-4">Dapatkan Informasi dan Wawasan Terbaru.</h2>
            <p class="text-lg max-w-2xl mb-8">Berlangganan newsletter kami untuk mendapatkan analisis hukum terkini, wawasan dari para ahli, dan undangan acara eksklusif.</p>
            <form class="flex flex-col md:flex-row items-center w-full max-w-xl gap-4">
                <input type="email" placeholder="Masukkan Email Anda" class="w-full md:flex-1 p-4 rounded-lg bg-white bg-opacity-90 text-gray-800 focus:outline-none focus:ring-2 focus:ring-[#E6C37D]">
                <button type="submit" class="w-full md:w-auto bg-[#CFAF70] text-[#1D2D50] py-4 px-8 rounded-lg font-semibold hover:bg-[#E6C37D] transition-colors">Berlangganan</button>
            </form>
        </div>
    </section>

</main>

<!-- Footer - FIXED -->
<footer class="bg-[#333333] text-white py-12">
    <div class="container mx-auto px-6 md:px-12">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Profile -->
            <div>
                <h3 class="text-2xl font-bold mb-4 text-[#CFAF70]">AMBARA ADVOCATE</h3>
                <p class="text-sm mb-6">Firma hukum yang berkomitmen pada keunggulan, integritas, dan inovasi untuk memberikan solusi hukum terbaik.</p>
                <div class="flex space-x-4">
                    <a href="#" class="text-white hover:text-[#CFAF70] transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                        </svg>
                    </a>
                    <a href="#" class="text-white hover:text-[#CFAF70] transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"/>
                        </svg>
                    </a>
                    <a href="#" class="text-white hover:text-[#CFAF70] transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Contact -->
            <div>
                <h4 class="font-semibold text-lg mb-4">Kontak</h4>
                <div class="space-y-2 text-sm">
                    <p>Jl. Sudirman No. 123</p>
                    <p>Jakarta Selatan 12190</p>
                    <p>+62 21 1234 5678</p>
                    <p>info@ambaraadvocate.com</p>
                </div>
            </div>

            <!-- Menu -->
            <div>
                <h4 class="font-semibold text-lg mb-4">Menu</h4>
                <div class="grid grid-cols-2 gap-2 text-sm">
                    <a href="#about" class="hover:text-[#CFAF70] transition-colors">Tentang Kami</a>
                    <a href="#services" class="hover:text-[#CFAF70] transition-colors">Layanan</a>
                    <a href="#team" class="hover:text-[#CFAF70] transition-colors">Tim</a>
                    <a href="#articles" class="hover:text-[#CFAF70] transition-colors">Artikel</a>
                    <a href="#history" class="hover:text-[#CFAF70] transition-colors">Sejarah</a>
                    <a href="#afiliasi" class="hover:text-[#CFAF70] transition-colors">Afiliasi</a>
                    <a href="#founder" class="hover:text-[#CFAF70] transition-colors">Pendiri</a>
                    <a href="#contact" class="hover:text-[#CFAF70] transition-colors">Kontak</a>
                </div>
            </div>
        </div>
        
        <hr class="border-gray-600 my-8">
        <div class="text-center text-sm text-gray-400">
            <p>&copy; 2024 Ambara Advocate. All rights reserved.</p>
        </div>
    </div>
</footer>

<!-- Swiper.js JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Awards data
        const awardsData = [
            { year: 2024, name: 'Law Firm of the Year', logo: 'https://placehold.co/100x100/3A77F5/FFFFFF?text=Logo+A' },
            { year: 2024, name: 'Legal Excellence Award', logo: 'https://placehold.co/100x100/1D2D50/CFAF70?text=Logo+B' },
            { year: 2023, name: 'Top Tier Law Firm', logo: 'https://placehold.co/100x100/CFAF70/1D2D50?text=Logo+C' },
            { year: 2024, name: 'Best Corporate Law Firm', logo: 'https://placehold.co/