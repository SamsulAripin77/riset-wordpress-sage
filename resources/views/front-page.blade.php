@extends('layouts.app')

@section('content')

{{-- Hero Section --}}
<section class="relative text-white h-[80vh] rounded-2xl overflow-hidden mx-2 sm:mx-6 sm:rounded-2xl">
  <div class="swiper myHeroSwiper h-full w-full">
    <div class="swiper-wrapper">
      
      {{-- Slide 1 --}}
      <div class="swiper-slide relative">
        <img src="{{ get_theme_file_uri('public/images/hero.jpg') }}" 
             alt="Hero 1" 
             class="w-full h-full object-cover" />
        <div class="absolute inset-0 bg-black/40"></div>
        <div class="absolute inset-0 flex flex-col justify-center px-6 sm:px-8 lg:px-16 max-w-3xl z-10">
          <h1 class="text-2xl sm:text-3xl md:text-5xl font-bold mb-4 leading-tight drop-shadow-lg">
            Cita Rasa Nusantara<br> di Setiap Suapan
          </h1>
          <p class="text-sm sm:text-base md:text-lg text-gray-200 drop-shadow">
            Nikmati hidangan autentik dari Sabang hingga Merauke, dihidangkan dengan cinta.
          </p>
          <div class="mt-6">
            <a href="{{ url('/reservasi') }}" 
               class="inline-block bg-[#C1442E]/70 text-white px-6 py-3 sm:px-8 sm:py-3 rounded-full font-medium hover:bg-[#C1442E]/90 transition shadow-md">
              Reservasi Sekarang
            </a>
          </div>
        </div>
      </div>

      {{-- Slide 2 --}}
      <div class="swiper-slide relative">
        <img src="{{ get_theme_file_uri('public/images/explore.png') }}" 
             alt="Hero 2" 
             class="w-full h-full object-cover" />
        <div class="absolute inset-0 bg-black/40"></div>
         <div class="absolute inset-0 flex flex-col justify-center px-6 sm:px-8 lg:px-16 max-w-3xl z-10">
          <h1 class="text-2xl sm:text-3xl md:text-5xl font-bold mb-4 leading-tight drop-shadow-lg">
            Cita Rasa Nusantara<br> di Setiap Suapan
          </h1>
          <p class="text-sm sm:text-base md:text-lg text-gray-200 drop-shadow">
            Nikmati hidangan autentik dari Sabang hingga Merauke, dihidangkan dengan cinta.
          </p>
          <div class="mt-6">
            <a href="{{ url('/reservasi') }}" 
               class="inline-block bg-[#C1442E]/70 text-white px-6 py-3 sm:px-8 sm:py-3 rounded-full font-medium hover:bg-[#C1442E]/90 transition shadow-md">
              Reservasi Sekarang
            </a>
          </div>
        </div>
      </div>

      {{-- Slide 3 --}}
      <div class="swiper-slide relative">
        <img src="{{ get_theme_file_uri('public/images/komen1.png') }}" 
             alt="Hero 3" 
             class="w-full h-full object-cover" />
        <div class="absolute inset-0 bg-black/40"></div>
         <div class="absolute inset-0 flex flex-col justify-center px-6 sm:px-8 lg:px-16 max-w-3xl z-10">
          <h1 class="text-2xl sm:text-3xl md:text-5xl font-bold mb-4 leading-tight drop-shadow-lg">
            Cita Rasa Nusantara<br> di Setiap Suapan
          </h1>
          <p class="text-sm sm:text-base md:text-lg text-gray-200 drop-shadow">
            Nikmati hidangan autentik dari Sabang hingga Merauke, dihidangkan dengan cinta.
          </p>
          <div class="mt-6">
            <a href="{{ url('/reservasi') }}" 
               class="inline-block bg-[#C1442E]/70 text-white px-6 py-3 sm:px-8 sm:py-3 rounded-full font-medium hover:bg-[#C1442E]/90 transition shadow-md">
              Reservasi Sekarang
            </a>
          </div>
      </div>
    </div>
  </div>
</section>


{{-- Spesial Hari Ini --}}
<section id="special" class="py-20 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    {{-- Heading --}}
    <div class="mb-12">
      <h2 class="text-3xl md:text-4xl font-bold text-gray-900">
        Spesial Hari Ini,<br> Spesial untuk Anda
      </h2>
    <p class="mt-4 text-gray-600 max-w-xl">
      Jelajahi hidangan pilihan dari seluruh penjuru Nusantara, diracik dengan 
      bumbu autentik dan disajikan segar hanya untuk Anda hari ini.
    </p>
    </div>

{{-- Grid Menu --}}
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-20">

  {{-- Ayam Taliwang --}}
  <div class="relative rounded-2xl overflow-hidden shadow-lg sm:row-span-2">
    <img src="{{ get_theme_file_uri('public/images/taliwang.png') }}" class="w-full h-60 sm:h-full object-cover">
    <div class="absolute bottom-0 w-full p-3 bg-gradient-to-t from-black/70 to-transparent text-white">
      <div class="text-yellow-400">★★★★★</div>
      <div class="font-semibold">Ayam Taliwang</div>
      <div class="text-sm">Mulai Rp 29.000</div>
    </div>
  </div>

  {{-- Rendang --}}
  <div class="relative rounded-2xl overflow-hidden shadow-lg sm:col-span-2 sm:row-span-2">
    <img src="{{ get_theme_file_uri('public/images/rendang.png') }}" class="w-full h-60 sm:h-full object-cover">
    <div class="absolute bottom-0 w-full p-3 bg-gradient-to-t from-black/70 to-transparent text-white">
      <div class="text-yellow-400">★★★★★</div>
      <div class="font-semibold">Rendang</div>
      <div class="text-sm">Mulai Rp 39.000</div>
    </div>
  </div>

  {{-- Gudeg --}}
  <div class="relative rounded-2xl overflow-hidden shadow-lg sm:row-span-2">
    <img src="{{ get_theme_file_uri('public/images/gudeg.png') }}" class="w-full h-60 sm:h-full object-cover">
    <div class="absolute bottom-0 w-full p-3 bg-gradient-to-t from-black/70 to-transparent text-white">
      <div class="text-yellow-400">★★★★★</div>
      <div class="font-semibold">Gudeg Jogja</div>
      <div class="text-sm">Mulai Rp 24.000</div>
      <button class="mt-2 px-3 py-1 bg-orange-600 text-xs rounded-lg">Reservasi</button>
    </div>
  </div>

  {{-- Coto --}}
  <div class="relative rounded-2xl overflow-hidden shadow-lg sm:row-span-2">
    <img src="{{ get_theme_file_uri('public/images/coto.png') }}" class="w-full h-60 sm:h-full object-cover">
    <div class="absolute bottom-0 w-full p-3 bg-gradient-to-t from-black/70 to-transparent text-white">
      <div class="text-yellow-400">★★★★★</div>
      <div class="font-semibold">Coto Makassar</div>
      <div class="text-sm">Mulai Rp 34.000</div>
    </div>
  </div>

  {{-- Banner --}}
  <div class="relative rounded-2xl overflow-hidden shadow-lg sm:col-span-2">
    <img src="{{ get_theme_file_uri('public/images/explore.png') }}" class="w-full h-40 sm:h-full object-cover">
  </div>

  {{-- Rawon --}}
  <div class="relative rounded-2xl overflow-hidden shadow-lg">
    <img src="{{ get_theme_file_uri('public/images/won.png') }}" class="w-full h-40 sm:h-full object-cover">
    <div class="absolute bottom-0 w-full p-2 bg-gradient-to-t from-black/70 to-transparent text-white">
      <div class="text-yellow-400 text-sm">★★★★★</div>
      <div class="font-semibold text-sm">Rawon</div>
      <div class="text-xs">Mulai Rp 22.000</div>
    </div>
  </div>

  {{-- Papeda --}}
  <div class="relative rounded-2xl overflow-hidden shadow-lg">
    <img src="{{ get_theme_file_uri('public/images/bapeda.png') }}" class="w-full h-40 sm:h-full object-cover">
    <div class="absolute bottom-0 w-full p-2 bg-gradient-to-t from-black/70 to-transparent text-white">
      <div class="text-yellow-400 text-sm">★★★★★</div>
      <div class="font-semibold text-sm">Papeda & Ikan</div>
      <div class="text-xs">Mulai Rp 49.000</div>
    </div>
  </div>

  {{-- Nasi Tutug --}}
  <div class="relative rounded-2xl overflow-hidden shadow-lg sm:col-span-2">
    <img src="{{ get_theme_file_uri('public/images/tug.png') }}" class="w-full h-40 sm:h-full object-cover">
    <div class="absolute bottom-0 w-full p-2 bg-gradient-to-t from-black/70 to-transparent text-white">
      <div class="text-yellow-400 text-sm">★★★★★</div>
      <div class="font-semibold text-sm">Nasi Tutug Oncom</div>
      <div class="text-xs">Mulai Rp 44.000</div>
    </div>
  </div>

</div>


{{-- Cita Rasa yang Selalu Dirindukan --}}
<section id="favorite" class="pt-4 pb-16 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    {{-- Heading + Tabs --}}
    <div class="mb-12 flex flex-col md:flex-row md:items-center md:justify-between gap-6">
      <div>
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900">
          Cita Rasa yang<br> Selalu Dirindukan
        </h2>
        <p class="mt-4 text-gray-600 max-w-xl">
          Dari Sabang sampai Merauke, menu andalan ini menjadi favorit karena
          kelezatannya yang tak lekang oleh waktu.
        </p>
      </div>

      {{-- Tabs --}}
      <div>
        <ul class="flex space-x-2 text-sm font-medium text-center" role="tablist">
          <li role="presentation">
            <button 
              class="px-4 py-2 rounded-full text-white bg-[#C1442E]" 
              id="best-seller-tab"
              data-tabs-target="#best-seller" 
              type="button" 
              role="tab" 
              aria-controls="best-seller" 
              aria-selected="true">
              Best Seller
            </button>
          </li>
          <li role="presentation">
            <button 
              class="px-4 py-2 rounded-full text-gray-600 bg-gray-100 hover:bg-gray-200" 
              id="rekomendasi-tab"
              data-tabs-target="#rekomendasi" 
              type="button" 
              role="tab" 
              aria-controls="rekomendasi" 
              aria-selected="false">
              Rekomendasi
            </button>
          </li>
        </ul>
      </div>
    </div>

{{-- Tab Content --}}
<div id="best-seller" role="tabpanel" aria-labelledby="best-seller-tab">
  @php
    $products = [
      [
        'name' => 'Bubur Manado',
        'image' => get_theme_file_uri('public/images/bur.png'),
        'priceOld' => 'Rp 22.000',
        'priceNew' => 'Rp 18.000',
        'rating' => 4.3,
        'badges' => ['Best Seller', 'Khas Sulawesi'],
        'description' => 'Bubur khas Sulawesi dengan campuran sayuran segar dan rasa gurih...'
      ],
      [
        'name' => 'Soto Banjar',
        'image' => get_theme_file_uri('public/images/tob.png'),
        'priceOld' => 'Rp 26.000',
        'priceNew' => 'Rp 22.000',
        'rating' => 4.4,
        'badges' => ['Best Seller', 'Khas Kalimantan'],
        'description' => 'Hidangan khas Kalimantan dengan kuah bening gurih, suwiran ayam, perkedel, dan bawang.'
      ],
      [
        'name' => 'Rawon',
        'image' => get_theme_file_uri('public/images/won.png'),
        'priceOld' => 'Rp 32.000',
        'priceNew' => 'Rp 27.000',
        'rating' => 4.6,
        'badges' => ['Best Seller', 'Khas Jawa Timur'],
        'description' => 'Hidangan khas Jawa Timurdengan kuah bening gurih, suwiran ayam, perkedel dan bawang'
      ],
      [
        'name' => 'Pempek',
        'image' => get_theme_file_uri('public/images/pem.png'),
        'priceOld' => 'Rp 26.000',
        'priceNew' => 'Rp 20.000',
        'rating' => 4.5,
        'badges' => ['Best Seller', 'Khas Sumatera'],
        'description' => 'Hidangan khas Palembang dengan rasa kenyal, disajikan dengan kuah cuko pedas-manis'
      ],
      [
        'name' => 'Rendang',
        'image' => get_theme_file_uri('public/images/rendang.png'),
        'priceOld' => 'Rp 42.000',
        'priceNew' => 'Rp 35.000',
        'rating' => 4.9,
        'badges' => ['Best Seller', 'Khas Sumatera'],
        'description' => 'Daging sapi empuk khas Minang, yang dimasak dengan santan dan rempah hingga meresap'
      ],
      [
        'name' => 'Soto Kudus',
        'image' => get_theme_file_uri('public/images/sotk.png'),
        'priceOld' => 'Rp 29.000',
        'priceNew' => 'Rp 25.000',
        'rating' => 4.8,
        'badges' => ['Best Seller', 'Khas Jawa Tengah'],
        'description' => 'Soto ayam khas Kudus dengan kuah gurih ringan, suwiran ayam, dan taburan bawang'
      ],
      [
        'name' => 'Ayam Betutu',
        'image' => get_theme_file_uri('public/images/betu.png'),
        'priceOld' => 'Rp 49.000',
        'priceNew' => 'Rp 40.000',
        'rating' => 4.5,
        'badges' => ['Best Seller', 'Khas Bali'],
        'description' => 'Ayam utuh khas Bali yang dibumbui rempah pedas, dimasak perlahan hingga daging empuk.'
      ],
      [
        'name' => 'Nasi liwet Solo',
        'image' => get_theme_file_uri('public/images/rice.png'),
        'priceOld' => 'Rp 26.000',
        'priceNew' => 'Rp 22.000',
        'rating' => 4.4,
        'badges' => ['Best Seller', 'Khas Jawa Tengah'],
        'description' => 'Nasi gurih khas Solo dengan lauk sayur labu siam, ayam suwir, dan santan yang creamy.'
      ],
    ];
  @endphp

  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
    @foreach ($products as $product)
      <x-product-card 
        class="transform transition-transform duration-500 ease-in-out hover:scale-110 hover:shadow-xl"
        :name="$product['name']"
        :image="$product['image']"
        :price-old="$product['priceOld']"
        :price-new="$product['priceNew']"
        :rating="$product['rating']"
        :badges="$product['badges']"
        :description="$product['description']"
      />
    @endforeach
  </div>
</div>

    <div id="rekomendasi" class="hidden" role="tabpanel" aria-labelledby="rekomendasi-tab">
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        
        {{-- Card makanan rekomendasi --}}
        <p class="text-gray-600">Nanti isi rekomendasi di sini.</p>
      </div>
    </div>

    {{-- Tombol Lihat Semua --}}
    <div class="flex justify-center mt-10">
      <a href="{{ url('/menu') }}" class="bg-[#C1442E] text-white px-6 py-3 rounded-full shadow-md hover:bg-[#a83620] transition">
        Lihat Semua Menu
      </a>
    </div>
  </div>
</section>

{{-- Paket Keluarga Nusantara --}}
<section class="w-full bg-[#B33A3A] rounded-3xl py-16 md:py-20 overflow-hidden">
  <div class="max-w-7xl mx-auto px-6 lg:px-8">
    <div class="flex flex-col lg:flex-row gap-10 lg:gap-12 items-center">
      
      {{-- Kolom Kiri --}}
      <div class="text-white w-full lg:w-1/3">
        <h2 class="text-2xl md:text-3xl font-bold">Paket Keluarga Nusantara</h2>
        <p class="mt-3 md:mt-4 text-white/80 text-sm md:text-base">
          Menu istimewa untuk berbagi cerita di meja makan.
        </p>

        <div class="flex space-x-4 mt-6">
          <button id="prevBtn" class="w-10 h-10 flex items-center justify-center rounded-full border border-white hover:bg-white hover:text-[#B33A3A] transition">←</button>
          <button id="nextBtn" class="w-10 h-10 flex items-center justify-center rounded-full border border-white hover:bg-white hover:text-[#B33A3A] transition">→</button>
        </div>
      </div>

    {{-- Kolom Kanan --}}
<div class="relative w-full lg:w-2/3">
  <div id="slider" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
    
    {{-- Card 1 --}}
    <div class="px-3">
      <div class="rounded-2xl overflow-hidden shadow-lg relative">
        <img src="{{ get_theme_file_uri('public/images/tug.png') }}" class="w-full h-60 md:h-80 object-cover">
        <div class="absolute bottom-0 w-full p-4 bg-gradient-to-t from-black/80 via-black/40 to-transparent text-white">
          <div class="text-yellow-400 text-sm">★★★★★</div>
          <h3 class="font-semibold text-lg">Nasi Tutug Oncom</h3>
          <p class="text-sm">Mulai Rp 150.000 untuk 4 orang</p>
          <button class="mt-3 px-4 py-1 bg-[#C1442E] text-sm rounded-md hover:bg-[#a83724] transition">
            Reservasi Sekarang
          </button>
        </div>
      </div>
    </div>

    {{-- Card 2 --}}
    <div class="px-3">
      <div class="rounded-2xl overflow-hidden shadow-lg relative">
        <img src="{{ get_theme_file_uri('public/images/rice.png') }}" class="w-full h-60 md:h-80 object-cover">
        <div class="absolute bottom-0 w-full p-4 bg-gradient-to-t from-black/80 via-black/40 to-transparent text-white">
          <div class="text-yellow-400 text-sm">★★★★★</div>
          <h3 class="font-semibold text-lg">Nasi Liwet Solo</h3>
          <p class="text-sm">Mulai Rp 150.000 untuk 4 orang</p>
          <button class="mt-3 px-4 py-1 bg-[#C1442E] text-sm rounded-md hover:bg-[#a83724] transition">
            Reservasi Sekarang
          </button>
        </div>
      </div>
    </div>

    {{-- Card 3 --}}
    <div class="px-3">
      <div class="rounded-2xl overflow-hidden shadow-lg relative">
        <img src="{{ get_theme_file_uri('public/images/gudeg.png') }}" class="w-full h-60 md:h-80 object-cover">
        <div class="absolute bottom-0 w-full p-4 bg-gradient-to-t from-black/80 via-black/40 to-transparent text-white">
          <div class="text-yellow-400 text-sm">★★★★★</div>
          <h3 class="font-semibold text-lg">Gudeg Jogja</h3>
          <p class="text-sm">Mulai Rp 96.000 untuk 4 orang</p>
          <button class="mt-3 px-4 py-1 bg-[#C1442E] text-sm rounded-md hover:bg-[#a83724] transition">
            Reservasi Sekarang
          </button>
        </div>
      </div>
    </div>

  </div>
</div>

</section>

{{-- Section Cerita Dibalik Rasa Nusa --}}
<section class="pt-16 pb-6 bg-white"> 
  <div class="container mx-auto px-4">

    {{-- Judul --}}
    <h2 class="text-3xl md:text-4xl font-bold mb-4">Cerita Dibalik Rasa Nusa</h2>
    <p class="text-gray-600 text-sm md:text-base mb-8">
      Setiap hidangan punya kisah. Temukan perjalanan rasa, dari bahan pilihan hingga<br>tradisi 
      yang kami jaga, untuk menghadirkan kelezatan sejati dari nusantara
    </p>

    {{-- Accordion --}}
 <div class="grid md:grid-cols-2 gap-6" x-data="{ open: 1 }">
      
      {{-- Item 1 --}}
      <div class="border rounded-2xl p-4" 
           :class="open === 1 ? 'bg-black text-white' : 'bg-white text-black'">
        <button @click="open === 1 ? open = null : open = 1" class="flex justify-between w-full items-center">
          <span class="font-semibold text-lg">Sejarah Rasa Nusa</span>
          <span x-show="open !== 1" class="text-2xl">+</span>
          <span x-show="open === 1" class="text-2xl">−</span>
        </button>
        <div x-show="open === 1" x-transition class="mt-4 text-sm leading-relaxed">
          Kami percaya bahwa rasa terbaik lahir dari bahan terbaik. Semua bahan yang kami gunakan
          berasal dari petani dan nelayan lokal, dipilih secara ketat untuk menjaga kesegaran,
          kualitas, dan rasa yang autentik. Dengan cara ini, kami tidak hanya menjaga cita rasa,
          tetapi juga mendukung perekonomian lokal.
        </div>
      </div>

      {{-- Item 2 --}}
      <div class="border rounded-2xl p-4" 
           :class="open === 2 ? 'bg-black text-white' : 'bg-white text-black'">
        <button @click="open === 2 ? open = null : open = 2" class="flex justify-between w-full items-center">
          <span class="font-semibold text-lg">Filosofi Rasa</span>
          <span x-show="open !== 2" class="text-2xl">+</span>
          <span x-show="open === 2" class="text-2xl">−</span>
        </button>
        <div x-show="open === 2" x-transition class="mt-4 text-sm leading-relaxed">
          Filosofi kami sederhana: menghadirkan makanan yang bukan hanya lezat, tapi juga penuh makna.
        </div>
      </div>

      {{-- Item 3 --}}
      <div class="border rounded-2xl p-4" 
           :class="open === 3 ? 'bg-black text-white' : 'bg-white text-black'">
        <button @click="open === 3 ? open = null : open = 3" class="flex justify-between w-full items-center">
          <span class="font-semibold text-lg">Komitmen Halal</span>
          <span x-show="open !== 3" class="text-2xl">+</span>
          <span x-show="open === 3" class="text-2xl">−</span>
        </button>
        <div x-show="open === 3" x-transition class="mt-4 text-sm leading-relaxed">
          Semua produk kami dijamin halal dan diproses sesuai standar syariat, memastikan rasa aman
          dan nyaman bagi setiap pelanggan.
        </div>
      </div>

      {{-- Item 4 --}}
      <div class="border rounded-2xl p-4" 
           :class="open === 4 ? 'bg-black text-white' : 'bg-white text-black'">
        <button @click="open === 4 ? open = null : open = 4" class="flex justify-between w-full items-center">
          <span class="font-semibold text-lg">Perjalanan Kami ke Depan</span>
          <span x-show="open !== 4" class="text-2xl">+</span>
          <span x-show="open === 4" class="text-2xl">−</span>
        </button>
        <div x-show="open === 4" x-transition class="mt-4 text-sm leading-relaxed">
          Kami berkomitmen untuk terus berinovasi sambil menjaga kearifan lokal. Visi kami adalah 
          membawa cita rasa nusantara ke dunia.
        </div>
      </div>
    </div>
  </div>
</section> 

{{-- Section Apa Kata Mereka --}}
<section class="pt-6 pb-16 bg-white"> 
  <div class="container mx-auto px-4">
    {{-- Judul --}}
    <h2 class="text-3xl md:text-4xl font-bold mb-4">Apa Kata Mereka?</h2>
    <p class="text-gray-600 text-sm md:text-base mb-10">
      Cerita nyata dari pelanggan yang telah mencicipi dan jatuh cinta<br>
      pada cita rasa nusantara di Rasa Nusa.
    </p>

    {{-- Tombol navigasi --}}
    <div class="flex justify-end gap-4 mb-6">
      <button class="w-10 h-10 flex items-center justify-center rounded-full border border-gray-400">
        ←
      </button>
      <button class="w-10 h-10 flex items-center justify-center rounded-full border border-gray-400">
        →
      </button>
    </div>

    {{-- Testimonial Wrapper --}}
    <div class="flex items-center justify-center gap-6">
      
      {{-- Foto kiri --}}
      <div class="w-1/5 hidden md:block">
        <img src="{{ get_theme_file_uri('public/images/komen2.png') }}" alt="Customer Left" class="rounded-xl object-cover" />
      </div>

      {{-- Foto + Card tengah --}}
      <div class="flex bg-white rounded-2xl overflow-hidden w-full md:w-3/5">
        
        {{-- Foto customer --}}
        <div class="w-1/2">
          <img src="{{ get_theme_file_uri('public/images/face1.png') }}" alt="Jessica" class="w-full h-full object-cover" />
        </div>

        {{-- Card testimoni --}}
        <div class="bg-gray-900 text-white p-8 flex flex-col justify-center w-1/2">

        {{-- Icon quote --}}
        <div class="mb-4 w-8 h-8">
          <img 
            src="{{ get_theme_file_uri('public/images/kutip.svg') }}" 
            alt="Quote Icon" 
            class="w-full h-full object-contain" 
          />
        </div>

          <p class="mb-6">
            Rasa masakannya benar–benar membawa saya pulang ke kampung halaman.
            Rempahnya pas, nasinya pulen, dan sambalnya bikin nagih!
          </p>

          {{-- Info user --}}
          <div>
            <div class="flex items-center gap-1 text-yellow-400 text-sm mb-1">
              ★★★★★
            </div>
            <p class="font-bold">Jessica</p>
            <p class="text-sm text-gray-400">Bandung</p>
          </div>
        </div>
      </div>

      {{-- Foto kanan --}}
      <div class="w-1/5 hidden md:block">
        <img src="{{ get_theme_file_uri('public/images/komen3.png') }}" alt="Customer Right" class="rounded-xl object-cover" />
      </div>
    </div>
  </section>

{{-- Section Rasa Nusantara --}}
<section class="pt-12 pb-8 bg-white">
<div class="max-w-7xl mx-auto px-6 lg:px-8 flex flex-col lg:flex-row items-start gap-10">
    
    {{-- Kiri: Text --}}
    <div class="flex-1">
      <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4 leading-snug">
        Rasakan Kemewahan<br> Cita Rasa Nusantara
      </h2>
      <p class="text-gray-600 mb-6 max-w-md">
        Setiap hidangan adalah karya seni dari rempah terbaik negeri. 
        Nikmati pengalaman bersantap yang berkelas, autentik, 
        dan penuh kehangatan tradisi.
      </p>

      {{-- Tombol --}}
      <div class="flex gap-4">
        <a href="{{ url('/reservasi') }}" 
           class="bg-[#C1442E] text-white px-6 py-3 rounded-full shadow-md hover:bg-[#a83724] transition">
          Pesan sekarang
        </a>
        <a href="{{ url('/menu') }}" 
           class="bg-[#f1e7e3] text-gray-800 px-6 py-3 rounded-full shadow-md hover:bg-[#e5d9d4] transition">
          Jelajahi Rasa
        </a>
      </div>
    </div>

    {{-- Kanan: Gambar dengan masking --}}
   <div class="w-[500px] h-[400px] overflow-hidden [clip-path:path('M 0 200 Q 0 0 200 0 Q 500 0 500 200 Q 500 400 200 400 Q 0 400 0 200 Z')]">
  <img src="{{ get_theme_file_uri('public/images/pict0.png') }}" 
       alt="Rasa Nusa" 
       class="w-full h-full object-cover">
</div>

</section>
@endsection
  