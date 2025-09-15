<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ambara Advocate - Firma Hukum Profesional</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
            border-bottom: 1px solid #1D2D50;
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
        #main-header .nav-link {
            color: white;
            transition: color 0.3s ease-in-out;
        }
        #main-header.scrolled .nav-link {
            color: #1D2D50;
        }

    </style>
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }
        
        body {
            color: #1D2D50;
            background-color: #F5F5F5;
        }
        
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

        /* Timeline Container */
        .timeline-wrap {
            position: relative;
            padding: 0 50px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .timeline {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            background-repeat: repeat-x;
            background-size: 10px 2px;
            background-position: center top 60%;
            background-image: linear-gradient(90deg, #CFAF70 66%, transparent 0);
            padding: 50px 0;
            display: flex;
            justify-content: space-between;
            flex: 1 1 100%;
            flex-flow: row nowrap;
            transition: height 0.2s ease-out;
        }

        .timeline-item {
            display: flex;
            justify-content: space-between;
            flex-flow: wrap;
            transition: max-width 0.2s, transform 0.4s ease-out;
            cursor: pointer;
            margin: 0 30px;
            height: auto;
            min-width: 150px;
        }

        .timeline-item.i-is-active {
            cursor: default;
        }

        .p-timeline-item {
            align-items: center;
            display: flex;
            flex-wrap: wrap;
            min-width: 150px;
            max-width: 150px;
            position: relative;
            text-align: center;
            transition: color 0.3s ease-in-out, transform 0.3s ease;
        }

        .p-timeline-item:hover {
            transform: scale(1.1);
            transition: transform 0.3s ease;
        }

        .p-timeline-item.i-is-active:hover {
            transform: scale(1.1);
        }

        .i-is-active .p-timeline-item {
            transform: scale(1.1);
        }

        .p-timeline-date {
            width: 100%;
            font-weight: 600;
            font-size: 20px;
            color: #1D2D50;
            transition: color 0.3s ease;
        }

        .p-timeline-carmodel {
            width: 100%;
            margin-top: 5px;
            margin-bottom: 10px;
            font-weight: 500;
            color: #1D2D50;
        }

        .p-timeline-block {
            min-width: 55px;
            min-height: 55px;
            max-width: 55px;
            max-height: 55px;
            border: solid 0px black;
            border-radius: 50%;
            background-color: #CFAF70;
            position: relative;
            top: 3px;
            left: 48px;
            margin-bottom: 20px;
            transition: background-color 0.3s ease;
            box-shadow: 0 4px 12px rgba(207, 175, 112, 0.3);
        }

        /* Hover effects */
        .timeline-item:hover .p-timeline-date {
            color: #CFAF70;
        }

        .timeline-item:hover .p-timeline-block {
            background-color: #1D2D50;
            transform: scale(1.1);
        }

        .timeline-item.i-is-active .p-timeline-date {
            color: #CFAF70;
        }

        .timeline-item.i-is-active .p-timeline-block {
            background-color: #1D2D50;
        }

        /* Timeline Content */
        .timeline-content {
            width: 100%;
            position: relative;
        }

        .p-timeline-content {
            width: 98%;
            height: 0;
            position: absolute;
            overflow: hidden;
            visibility: hidden;
            opacity: 0;
            transform: translateY(-50px);
            transition: all 0.5s ease-in-out;
            padding: 0;
            margin-top: 40px;
        }

        .p-timeline-content.i-is-active {
            height: auto;
            padding: 40px 20px 20px 20px;
            width: 98%;
            position: relative;
            visibility: visible;
            opacity: 1;
            transform: translateY(0px);
            transition: all 0.5s ease-in-out;
            background: white;
            border-radius: 16px;
            box-shadow: 0 8px 32px rgba(29, 45, 80, 0.1);
            margin-bottom: 40px;
        }

        .timeline-content-card {
            width: 48%;
            float: left;
            padding-right: 32px;
        }

        .timeline-content-image {
            width: 50%;
            float: left;
        }

        .timeline-content-image img {
            width: 100%;
            height: auto;
            max-width: 100%;
            border-radius: 8px;
        }

        .timeline-content-title {
            font-size: 28px;
            font-weight: 700;
            color: #1D2D50;
            margin-bottom: 10px;
        }

        .timeline-content-date {
            font-size: 15px;
            line-height: 40px;
            font-style: italic;
            color: #CFAF70;
            display: block;
            margin-bottom: 15px;
        }

        .p-timeline-content p {
            font-size: 14px;
            line-height: 24px;
            font-weight: 300;
            color: #666;
            margin-bottom: 20px;
        }

        .btn {
            min-width: 150px;
            margin-bottom: 10px;
            color: #fff;
            display: inline-block;
            font-weight: 600;
            padding: 12px 24px;
            text-align: center;
            font-size: 14px;
            line-height: 1.4;
            transition: all 0.3s ease;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            text-decoration: none;
            background-color: #CFAF70;
        }

        .btn:hover {
            background-color: #1D2D50;
            transform: translateY(-2px);
        }

        .close {
            position: absolute;
            right: 20px;
            top: 20px;
            width: 32px;
            height: 32px;
            opacity: 0.7;
            cursor: pointer;
            z-index: 10;
        }

        .close:hover {
            opacity: 1;
        }

        .close:before,
        .close:after {
            position: absolute;
            left: 15px;
            content: ' ';
            height: 25px;
            width: 2px;
            background-color: #1D2D50;
        }

        .close:before {
            transform: rotate(45deg);
        }

        .close:after {
            transform: rotate(-45deg);
        }

        /* Custom scrollbar */
        .timeline::-webkit-scrollbar {
            height: 8px;
        }

        .timeline::-webkit-scrollbar-track {
            box-shadow: inset 0 0 5px lightgrey;
            border-radius: 10px;
        }

        .timeline::-webkit-scrollbar-thumb {
            background: #CFAF70;
            border-radius: 10px;
        }

        /* Responsive */
        @media screen and (max-width: 1020px) {
            .p-timeline-content.i-is-active {
                display: flex;
                flex-flow: column;
            }

            .timeline-content-card,
            .timeline-content-image {
                width: 100% !important;
                float: none;
                padding-right: 0;
            }

            .timeline-content-image {
                order: 0;
                margin-bottom: 20px;
            }

            .timeline-content-card {
                order: 1;
            }
        }

        @media screen and (max-width: 768px) {
            .timeline {
                background-position: center top 55%;
            }

            .timeline-item {
                margin: 0 15px;
            }

            .p-timeline-block {
                min-width: 45px;
                min-height: 45px;
                max-width: 45px;
                max-height: 45px;
                left: 53px;
            }

            .p-timeline-date {
                font-size: 16px;
            }

            .p-timeline-carmodel {
                margin: 0;
                line-height: 20px;
                font-size: 13px;
            }

            .timeline-content-title {
                font-size: 24px;
                line-height: 1.3em;
            }

            .close {
                right: 10px;
                top: 10px;
            }

            .timeline::-webkit-scrollbar {
                height: 4px;
            }
        }
    </style>
</head>
<body class="bg-[#F5F5F5]">

<!-- Header -->
<header id="main-header" class="p-6 md:p-8 fixed w-full z-50">
    <div class="container mx-auto flex justify-between items-center">
        <a href="#" class="brand-logo text-2xl font-bold text-white">
             <img class="max-w-32" src="{{asset('resources/images/ambara-logo.png')}}" alt="Logo" srcset="">
        </a>
        <nav class="hidden md:flex space-x-12 text-sm">
            <a href="#about" class="nav-link hover:text-[#CFAF70] transition-colors">Tentang Kami</a>
            <a href="#services" class="nav-link hover:text-[#CFAF70] transition-colors">Layanan</a>
            <a href="#team" class="nav-link hover:text-[#CFAF70] transition-colors">Tim</a>
            <a href="#articles" class="nav-link hover:text-[#CFAF70] transition-colors">Artikel</a>
            <a href="#contact" class="nav-link hover:text-[#CFAF70] transition-colors">Kontak</a>
        </nav>
        <a href="#contact" class="bg-[#CFAF70] text-[#1D2D50] py-3 px-8 rounded-full hidden md:block hover:bg-[#E6C37D] transition-colors font-semibold">Hubungi Kami</a>
    </div>
</header>

<main>
    <!-- Hero Section -->
    <section id="hero" class="relative h-screen">
        <div class="absolute inset-0">
            <img src="{{asset('resources/images/court3.jpg')}}" alt="Ambara Advocate" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        </div>
        <div class="relative z-10 h-full flex flex-col items-center md:items-start justify-center text-center md:text-left text-white px-6 md:px-16">
            <h1 class="text-3xl lg:text-5xl xl:text-6xl font-extrabold leading-tight md:max-w-4xl xl:max-w-5xl mt-8">Kami hadir untuk menyederhanakan masalah hukum Anda dengan pendekatan yang cermat dan profesional</h1>
            <p class="mt-6 md:text-xl max-w-2xl">Ambara Advocate adalah firma hukum yang berdedikasi untuk memberikan layanan hukum komprehensif, didukung oleh tim ahli yang berkomitmen pada integritas dan keunggulan.</p>
            <a href="#services" class="mt-10 inline-block bg-[#CFAF70] text-[#1D2D50] py-4 px-10 rounded-full text-lg hover:bg-[#E6C37D] transition-colors font-semibold">Jelajahi Layanan Kami</a>
        </div>
    </section>
    
    <!-- Section Penghargaan (Awards) - FIXED -->
    <section id="awards" class="bg-[#F5F5F5] py-20 md:py-32">
        <div class="container mx-auto px-6 md:px-12">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
                <!-- Kolom Kiri: Teks -->
                <div>
                    <h4 class="caption-text mb-2">Penghargaan</h4>
                    <h2 class="headline-text font-bold mb-6">Pengakuan dari Industri</h2>
                    <p class="text-lg text-gray-700 leading-relaxed">Kami diakui secara nasional dan internasional atas komitmen kami pada keunggulan dan integritas dalam praktik hukum. Setiap penghargaan adalah bukti dedikasi kami untuk memberikan hasil terbaik bagi klien.</p>
                </div>
                <!-- Kolom Kanan: Grid Gambar -->
                <div>
                    <div class="flex items-center justify-end space-x-4 mb-8">
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
            <div class="relative mb-8">
                <div class="relative z-10 bg-opacity-60 rounded-xl">
                    <div class="w-full lg:w-1/2">
                        <h4 class="caption-text mb-2 ">Afiliasi</h4>
                        <h2 class="headline-text font-bold headline-text mb-4">Jejak Langkah Global Kami.</h2>
                        <p class="text-lg leading-relaxed headline-text ">Kami bangga menjadi bagian dari jaringan global dan diakui oleh berbagai lembaga terkemuka, menunjukkan komitmen kami pada standar tertinggi.</p>
                    </div>
                </div>
            </div>
            
            <!-- Section 2: Grid Afiliasi -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-y-12 lg:gap-x-40">
                <div class="text-center ks-border">
                    <img class="w-full aspect-square object-contain max-h-[300px] lg:max-h-[100px] rounded-lg flex items-center justify-center mb-3 text-center" src="@asset('resources/images/aff2.jpg')" alt="" srcset="">
                    <p class="text-sm font-semibold">International Bar Association</p>
                </div>
                <div class="text-center ks-border">
                    <img class="w-full aspect-square object-contain max-h-[300px] lg:max-h-[100px] rounded-lg flex items-center justify-center mb-3 text-center" src="@asset('resources/images/aff3.jpg')" alt="" srcset="">
                    <p class="text-sm font-semibold">Asian Legal Business</p>
                </div>
                <div class="text-center ks-border">
                    <img class="w-full aspect-square object-contain max-h-[300px] lg:max-h-[100px] rounded-lg flex items-center justify-center mb-3 text-center" src="@asset('resources/images/aff4.jpg')" alt="" srcset="">
                    <p class="text-sm font-semibold">ASEAN Law Association</p>
                </div>
                <div class="text-center ks-border">
                    <img class="w-full aspect-square object-contain max-h-[300px] lg:max-h-[100px] rounded-lg flex items-center justify-center mb-3 text-center" src="@asset('resources/images/aff5.jpg')" alt="" srcset="">
                    <p class="text-sm font-semibold">Asosiasi Advokat Indonesia</p>
                </div>
                
                 <div class="text-center ks-border">
                    <img class="w-full aspect-square object-contain max-h-[300px] lg:max-h-[100px] rounded-lg flex items-center justify-center mb-3 text-center" src="@asset('resources/images/brand1.png')" alt="" srcset="">
                    <p class="text-sm font-semibold">International Bar Association</p>
                </div>
                <div class="text-center ks-border">
                    <img class="w-full aspect-square object-contain max-h-[300px] lg:max-h-[100px] rounded-lg flex items-center justify-center mb-3 text-center" src="@asset('resources/images/brand2.png')" alt="" srcset="">
                    <p class="text-sm font-semibold">Asian Legal Business</p>
                </div>
                <div class="text-center ks-border">
                    <img class="w-full aspect-square object-contain max-h-[100px] rounded-lg flex items-center justify-center mb-3 text-center" src="@asset('resources/images/brand3.png')" alt="" srcset="">
                    <p class="text-sm font-semibold">ASEAN Law Association</p>
                </div>
                <div class="text-center ks-border">
                    <img class="w-full aspect-square object-contain max-h-[100px] rounded-lg flex items-center justify-center mb-3 text-center" src="@asset('resources/images/brand4.png')" alt="" srcset="">
                    <p class="text-sm font-semibold">Asosiasi Advokat Indonesia</p>
                </div>
            </div>
        </div>
    </section>

<!-- Section Sejarah Perusahaan (Timeline Interaktif) -->
<section id="history" class="py-20 md:py-32 bg-[#F5F5F5]">
    <div class="container mx-auto px-6 md:px-12 mb-16 text-center">
        <h4 class="caption-text mb-4 font-semibold">Timeline</h4>
        <h2 class="timeline-title headline-text font-bold mb-4">Kisah Perjalanan Kami</h2>
        <p class="text-gray-600 max-w-2xl mx-auto mb-4">Dari awal berdirinya hingga pencapaian terkini, berikut adalah tonggak-tonggak penting dalam perjalanan Ambara Advocate.</p>
        <p class="text-sm text-gray-500">(Klik pada item timeline untuk melihat detail)</p>
    </div>
    
    <div class="wrap">
        <div class="timeline-wrap">
            <ul class="timeline">
                <!-- Timeline Item 1 -->
                <li class="timeline-item">
                    <div class="p-timeline-item">
                        <time class="p-timeline-date" datetime="2010-01-01">2010</time>
                        <span class="p-timeline-carmodel" data-car="1">Didirikan</span>
                        <div class="p-timeline-block"></div>
                    </div>
                </li>
                
                <!-- Timeline Item 2 -->
                <li class="timeline-item">
                    <div class="p-timeline-item">
                        <time class="p-timeline-date" datetime="2015-01-01">2015</time>
                        <span class="p-timeline-carmodel" data-car="2">Ekspansi Layanan</span>
                        <div class="p-timeline-block"></div>
                    </div>
                </li>
                
                <!-- Timeline Item 3 -->
                <li class="timeline-item">
                    <div class="p-timeline-item">
                        <time class="p-timeline-date" datetime="2020-01-01">2020</time>
                        <span class="p-timeline-carmodel" data-car="3">Penghargaan</span>
                        <div class="p-timeline-block"></div>
                    </div>
                </li>
                
                <!-- Timeline Item 4 -->
                <li class="timeline-item">
                    <div class="p-timeline-item">
                        <time class="p-timeline-date" datetime="2023-01-01">2023</time>
                        <span class="p-timeline-carmodel" data-car="4">Ekspansi Tim</span>
                        <div class="p-timeline-block"></div>
                    </div>
                </li>
            </ul>
            
            <!-- Timeline Content -->
            <div class="timeline-content">
                <!-- Content 1 -->
                <div class="p-timeline-content" data-car="1">
                    <div class="timeline-content-card">
                        <h3 class="timeline-content-title">Pendirian Ambara Advocate</h3>
                        <time class="timeline-content-date" datetime="2010-01-01">Tanggal Pendirian: 1 Januari 2010</time>
                        <p>Ambara Advocate resmi didirikan pada tahun 2010 dengan visi untuk menjadi firma hukum terdepan di Indonesia. Kami memulai perjalanan dengan komitmen memberikan layanan hukum berkualitas tinggi dan solusi inovatif untuk berbagai kebutuhan klien.</p>
                        <p>Dengan tim awal yang terdiri dari advokat berpengalaman, kami fokus pada bidang hukum perdata, pidana, dan korporat. Dedikasi terhadap keunggulan dan integritas menjadi fondasi utama dalam setiap layanan yang kami berikan.</p>
                        <a class="btn" href="javascript:void(0);" title="Pelajari lebih lanjut">Pelajari Lebih Lanjut</a>
                        <div class="hidden close" data-type-close></div>
                    </div>
                    <div class="timeline-content-image">
                        <img src="{{asset('resources/images/time1.jpg')}}" alt="Pendirian Ambara Advocate 2010"/>
                    </div>
                </div>
                
                <!-- Content 2 -->
                <div class="p-timeline-content" data-car="2">
                    <div class="timeline-content-card">
                        <h3 class="timeline-content-title">Ekspansi Layanan</h3>
                        <time class="timeline-content-date" datetime="2015-01-01">Periode Ekspansi: 2015</time>
                        <p>Pada tahun 2015, Ambara Advocate mengalami perkembangan signifikan dengan memperluas cakupan layanan. Kami menambahkan divisi Hukum Korporat dan Kekayaan Intelektual untuk memenuhi kebutuhan klien yang semakin beragam.</p>
                        <p>Ekspansi ini mencakup penambahan expertise dalam merger & akuisisi, kontrak komersial, compliance, serta perlindungan hak cipta dan merek dagang. Tim kami diperkuat dengan spesialis di bidang-bidang baru tersebut.</p>
                        <a class="btn" href="javascript:void(0);" title="Pelajari lebih lanjut">Pelajari Lebih Lanjut</a>
                        <div class="close hidden" data-type-close></div>
                    </div>
                    <div class="timeline-content-image">
                        <img src="{{asset('resources/images/time2.jpg')}}" alt="Ekspansi Layanan 2015"/>
                    </div>
                </div>
                
                <!-- Content 3 -->
                <div class="p-timeline-content" data-car="3">
                    <div class="timeline-content-card">
                        <h3 class="timeline-content-title">Penghargaan Bergengsi</h3>
                        <time class="timeline-content-date" datetime="2020-01-01">Tahun Penghargaan: 2020</time>
                        <p>Tahun 2020 menjadi momen bersejarah bagi Ambara Advocate. Kami meraih penghargaan bergengsi dari Asian Legal Business sebagai salah satu firma hukum terbaik di Asia, pengakuan atas dedikasi dan kualitas layanan kami.</p>
                        <p>Penghargaan ini mencerminkan komitmen kami terhadap inovasi, profesionalisme, dan hasil yang luar biasa bagi klien. Pencapaian ini memperkuat posisi kami sebagai pemimpin dalam industri hukum regional.</p>
                        <a class="btn" href="javascript:void(0);" title="Pelajari lebih lanjut">Pelajari Lebih Lanjut</a>
                        <div class="close hidden" data-type-close></div>
                    </div>
                    <div class="timeline-content-image">
                        <img src="{{asset('resources/images/time3.jpg')}}" alt="Penghargaan 2020"/>
                    </div>
                </div>
                
                <!-- Content 4 -->
                <div class="p-timeline-content" data-car="4">
                    <div class="timeline-content-card">
                        <h3 class="timeline-content-title">Ekspansi Tim</h3>
                        <time class="timeline-content-date" datetime="2023-01-01">Periode Ekspansi: 2023</time>
                        <p>Memasuki tahun 2023, Ambara Advocate terus berkembang dengan menyambut partner baru dan memperkuat tim dengan menambah ahli-ahli hukum berpengalaman di berbagai bidang spesialisasi.</p>
                        <p>Penambahan tim ini meliputi ekspert di bidang teknologi hukum, ESG (Environmental, Social, Governance), dan hukum digital. Dengan tim yang lebih kuat, kami siap menghadapi tantangan hukum era modern dan memberikan solusi terdepan.</p>
                        <a class="btn" href="javascript:void(0);" title="Pelajari lebih lanjut">Pelajari Lebih Lanjut</a>
                        <div class="close hidden" data-type-close></div>
                    </div>
                    <div class="timeline-content-image">
                        <img src="{{asset('resources/images/time4.jpg')}}" alt="Ekspansi Tim 2023"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Section Biografi Founder -->
    <section id="founder" class="bg-white py-20 md:py-32">
        <div class="container mx-auto px-6 md:px-12 flex flex-col md:flex-row items-center gap-12">
            <div class="md:w-1/2">
                <img src="{{asset('resources/images/ceo2.jpg')}}" alt="Foto Founder" class="w-full h-auto rounded-xl shadow-lg">
            </div>
            <div class="md:w-1/2">
                <h4 class="caption-text mb-2">Biografi</h4>
                <h2 class="headline-text font-bold mb-4">Mengenal Lebih Dekat Pendiri Kami</h2>
                <p class="mt-6 text-gray-700 leading-relaxed text-lg">Nama Founder adalah seorang praktisi hukum senior dengan pengalaman lebih dari 20 tahun di bidang hukum korporat dan litigasi. Beliau mendirikan Ambara Advocate dengan keyakinan bahwa layanan hukum haruslah transparan, etis, dan berorientasi pada hasil nyata bagi klien. Komitmen beliau terhadap keunggulan telah mengantarkan firma ini menjadi salah satu yang paling dihormati di industri.</p>
            </div>
        </div>
    </section>

    <!-- Section Artikel (Articles) -->
    <section id="articles" class="bg-[#F5F5F5] py-20 md:py-32">
        <div class="container mx-auto px-6 md:px-12">
            <h4 class="caption-text mb-2">Artikel</h4>
            <h2 class="headline-text font-bold mb-12">Wawasan Hukum Terkini</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Artikel 1 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="{{asset('resources/images/blog1.jpg')}}" alt="Artikel 1" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <span class="text-sm text-gray-500">22 Juni 2024</span>
                        <h3 class="font-semibold text-xl mt-2 mb-2">Pentingnya Legal Due Diligence dalam M&A.</h3>
                        <p class="text-gray-700 text-sm">Pelajari mengapa uji tuntas hukum adalah langkah krusial sebelum melakukan merger atau akuisisi...</p>
                        <a href="#" class="inline-block text-[#1D2D50] font-semibold mt-4 hover:text-[#CFAF70] transition-colors">Baca Selengkapnya &rarr;</a>
                    </div>
                </div>
                <!-- Artikel 2 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="{{asset('resources/images/blog2.jpg')}}" alt="Artikel 1" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <span class="text-sm text-gray-500">15 Mei 2024</span>
                        <h3 class="font-semibold text-xl mt-2 mb-2">Strategi Efektif dalam Penyelesaian Sengketa.</h3>
                        <p class="text-gray-700 text-sm">Memahami berbagai pendekatan litigasi dan arbitrase untuk menyelesaikan konflik bisnis...</p>
                        <a href="#" class="inline-block text-[#1D2D50] font-semibold mt-4 hover:text-[#CFAF70] transition-colors">Baca Selengkapnya &rarr;</a>
                    </div>
                </div>
                <!-- Artikel 3 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                   <img src="{{asset('resources/images/blog3.jpg')}}" alt="Artikel 1" class="w-full h-48 object-cover">
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
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url(@asset('resources/images/court2.jpg'));"></div>
        <div class="absolute inset-0 bg-black bg-opacity-60"></div>
        <div class="relative z-10 container mx-auto px-6 md:px-12 flex flex-col items-center justify-center text-center text-white">
            <h4 class="caption-text mb-2 text-white">Subscribe</h4>
            <h2 class="headline-text font-bold mb-4 text-white">Dapatkan Informasi dan Wawasan Terbaru</h2>
            <p class="text-lg max-w-2xl mb-8 text-gray-200">Berlangganan newsletter kami untuk mendapatkan analisis hukum terkini, wawasan dari para ahli, dan undangan acara eksklusif.</p>
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
        <div class="flex flex-col md:flex-row gap-y-4 justify-between">
            <!-- Profile -->
            <div class="w-full lg:w-1/3">
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
            <div class="w-full lg:w-1/3">
                <h4 class="font-semibold text-lg mb-4">Kontak</h4>
                <div class="space-y-2 text-sm">
                    <p>Jl. Sudirman No. 123</p>
                    <p>Jakarta Selatan 12190</p>
                    <p>+62 21 1234 5678</p>
                    <p>info@ambaraadvocate.com</p>
                </div>
            </div>

            <!-- Menu -->
            <div class="w-full lg:w-1/3">
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
        // Navbar scroll effect
        const header = document.getElementById('main-header');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // Awards data
        const awardsData = [
            { year: 2024, name: 'Law Firm of the Year', logo: '{{ asset('resources/images/brand1.png') }}' },
            { year: 2024, name: 'Legal Excellence Award', logo: '{{ asset('resources/images/brand2.png') }}' },
            { year: 2023, name: 'Top Tier Law Firm', logo: '{{ asset('resources/images/brand3.png') }}' },
            { year: 2024, name: 'Best Corporate Law Firm', logo: '{{ asset('resources/images/brand4.png') }}' },
        ];

        const yearFilter = document.getElementById('year-filter');
        const awardsGrid = document.getElementById('awards-grid');

        function renderAwards(year) {
            awardsGrid.innerHTML = '';
            const filteredAwards = year === 'all' ? awardsData : awardsData.filter(award => award.year.toString() === year);

            if (filteredAwards.length === 0) {
                awardsGrid.innerHTML = '<p class="col-span-full text-center text-gray-500">Tidak ada penghargaan untuk tahun ini.</p>';
            } else {
                filteredAwards.forEach(award => {
                    const awardItem = document.createElement('div');
                    awardItem.className = 'award-item bg-white p-4 rounded-lg shadow-sm text-center';
                    awardItem.innerHTML = `
                        <div class="max-w-32 max-h-32 h-full w-full mx-auto rounded-lg flex items-center justify-center p-2 mb-3">
                            <img src="${award.logo}" alt="${award.name}" class="w-full h-full object-contain">
                        </div>
                        <p class="text-xs font-semibold">${award.name}</p>
                    `;
                    awardsGrid.appendChild(awardItem);
                });
            }
        }

        yearFilter.addEventListener('change', (e) => {
            renderAwards(e.target.value);
        });

        // Initial render
        renderAwards('all');

        // Initialize Swiper for Timeline section
        const timelineSwiper = new Swiper('.timelineSwiper', {
            slidesPerView: 1,
            spaceBetween: 30,
            centeredSlides: true,
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });
    });
</script>
<script>
$(document).ready(function() {
    // Set up global variables
    var item = '.timeline-item';
    var content = '.p-timeline-content';
    var active = 'i-is-active';

     // Show the first timeline item by default without scrolling
    var firstItem = $('.timeline-item:first');
    if (firstItem.length) {
        showTimelineContent(firstItem[0], false); // `false` prevents scrolling on page load
    }
    
    // Event handlers
    $('.timeline-item').on('click', function(){ 
        showTimelineContent(this, true);
    });
    
    $('.close').on('click', function(){ 
        closeCurrentContent(this); 
    });
    
     function showTimelineContent(element, withScroll) {
        var $element = $(element);
        var itemId = $element.find('.p-timeline-carmodel').attr('data-car');
        var $currentContent = $(content + '[data-car="' + itemId + '"]');

        // If the clicked item is already active, do nothing.
        if ($element.hasClass(active)) {
            return;
        }

        // Deactivate any other active items
        $(item + '.' + active).removeClass(active);
        $(content + '.' + active).removeClass(active);

        // Activate the new item
        $element.addClass(active);
        $currentContent.addClass(active);

        // Scroll to shown content if requested
        // if (withScroll && $currentContent.length) {
        //     setTimeout(function() {
        //         $('html, body').stop().animate({ 
        //             scrollTop: $currentContent.offset().top - 100 
        //         }, 800);
        //     }, 100);
        // }
        
    }
    
function closeCurrentContent(closeButton) {
        var $contentblock = $(closeButton).closest(content);
        var contentid = $contentblock.attr('data-car');
        
        var $itemToClose = $(item).filter(function() {
            return $(this).find('.p-timeline-carmodel').attr('data-car') === contentid;
        });

        if ($itemToClose.length) {
            // Move page back to timeline title
            var target = $('.timeline-title');
            if (target.length) {
                setTimeout(function() {
                $('html, body').stop().animate({ scrollTop: target.offset().top - 50 }, 800);
                }, 100); // Delay to prevent animation clash
            }
            
            // Remove active classes
            $itemToClose.removeClass(active);
            $contentblock.removeClass(active);
        }
    }
    
    
    // Clear all content after animation
    $('.close').on('click', function() {
        setTimeout(function() {
            $(content).removeClass(active);
            $(item).removeClass(active);
        }, 100);
    });
});
</script>
</body>
</html>