@extends('layouts.app') 

@section('content')

{{-- Hero Section --}}
<section class="relative bg-gray-900 text-white rounded-2xl overflow-hidden mx-4 sm:mx-8 mt-6">
  <div class="absolute inset-0">
    <img src="{{ get_theme_file_uri('public/images/hero_menu.png') }}" 
         alt="Hero Background" 
         class="w-full h-full object-cover opacity-70">
  </div>
  <div class="absolute inset-0 bg-black/40"></div>
  <div class="relative z-10 px-6 py-20 max-w-6xl">
    <h1 class="text-4xl sm:text-5xl font-bold leading-tight">
      Jelajahi Cita Rasa <br>
      <span class="text-[#fdfaf7]">Nusantara</span>
    </h1>
    <p class="mt-4 text-base sm:text-lg text-gray-200 max-w-none">
      Dari Sabang sampai Merauke, kami hadirkan pilihan menu khas daerah, paket keluarga, hingga promo<br> spesial. 
      Temukan hidangan favorit Anda dan nikmati kehangatan Indonesia di setiap suapan.
    </p>
  </div>
</section>

{{-- Filter Buttons --}}
@include('partials.menu-filter')

{{-- Filter + Content --}}
<section class="bg-white py-10">
  <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-8">
    
{{-- Sidebar --}}
  <div class="md:col-span-1">
      @include('partials.filter-sidebar')
  </div>

{{-- Content --}}
  <div id="best-seller" class="md:col-span-2" role="tabpanel" aria-labelledby="nusantara-tab">
      @php
        $products = [
          [
            'name' => 'Bubur Manado',
            'image' => get_theme_file_uri('public/images/bur.png'),
            'priceOld' => 'Rp 22.000',
            'priceNew' => 'Rp 18.000',
            'rating' => 4.3,
            'badges' => ['Best Seller', 'Khas Sulawesi'],
            'description' => 'Bubur khas sulawesi dengan campuran ikan dan rempah yang kaya.'
          ],
          [
            'name' => 'Soto Banjar',
            'image' => get_theme_file_uri('public/images/banjar.png'),
            'priceOld' => 'Rp 26.000',
            'priceNew' => 'Rp 22.000',
            'rating' => 4.4,
            'badges' => ['Best Seller', 'Khas Kalimantan'],
            'description' => 'Hidangan khas Kalimantan dengan kuah bening yang wangi dan lezat.'
          ],
          [
            'name' => 'Rawon',
            'image' => get_theme_file_uri('public/images/won.png'),
            'priceOld' => 'Rp 32.000',
            'priceNew' => 'Rp 27.000',
            'rating' => 4.6,
            'badges' => ['Best Seller', 'Khas Jawa Timur'],
            'description' => 'Daging sapi empuk dimasak dengan santan dan klewuk.'
          ],
          [
            'name' => 'Rendang',
            'image' => get_theme_file_uri('public/images/rendang.png'),
            'priceOld' => 'Rp 42.000',
            'priceNew' => 'Rp 35.000',
            'rating' => 4.9,
            'badges' => ['Best Seller', 'Khas Sumatera'],
            'description' => 'Daging sapi dimasak dengan santan dan rempah khas Minang.'
          ],
          [
            'name' => 'Pempek',
            'image' => get_theme_file_uri('public/images/pem.png'),
            'priceOld' => 'Rp 26.000',
            'priceNew' => 'Rp 20.000',
            'rating' => 4.5,
            'badges' => ['Best Seller', 'Khas Sumatera'],
            'description' => 'Hidangan khas Palembang dengan campuran ikan dan sagu.'
          ],
          [
            'name' => 'Soto Kudus',
            'image' => get_theme_file_uri('public/images/sotk.png'),
            'priceOld' => 'Rp 29.000',
            'priceNew' => 'Rp 25.000',
            'rating' => 4.8,
            'badges' => ['Best Seller', 'Khas Jawa Tengah'],
            'description' => 'Soto ayam khas kudus dengan kuah gurih dan manis.'
          ],
          [
            'name' => 'Ayam Betutu',
            'image' => get_theme_file_uri('public/images/betu.png'),
            'priceOld' => 'Rp 49.000',
            'priceNew' => 'Rp 40.000',
            'rating' => 4.5,
            'badges' => ['Best Seller', 'Khas Bali'],
            'description' => 'Ayam utuh khas Bali yang dibumbui rempah pedas, dimasak perlahan hingga daging empuk dan.'
          ],
          [
            'name' => 'Nasi Liwet Solo',
            'image' => get_theme_file_uri('public/images/rice.png'),
            'priceOld' => 'Rp 26.000',
            'priceNew' => 'Rp 22.000',
            'rating' => 4.4,
            'badges' => ['Best Seller', 'Khas Jawa Tengah'],
            'description' => 'Nasi gurih khas Solo dengan lauk sayur labu siam, ayam suwir, dan santan yang creamy.'
          ],
          [
            'name' => 'Papeda & ikan',
            'image' => get_theme_file_uri('public/images/bapeda.png'),
            'priceOld' => 'Rp 49.000',
            'priceNew' => 'Rp 39.000',
            'rating' => 4.7,
            'badges' => ['Best Seller', 'Khas Papua'],
            'description' => 'Hidangan khas Papua dengan papeda dan ikan bakar.'
          ],
          [
            'name' => 'Naniura',
            'image' => get_theme_file_uri('public/images/naniura.png'),
            'priceOld' => 'Rp 49.000',
            'priceNew' => 'Rp 40.000',
            'rating' => 4.5,
            'badges' => ['Best Seller', 'Khas Sumatera'],
            'description' => 'Ikan mas segar khas Batak Toba, Sumatera Utara dimasak tanpa api dengan bumbu rempah asam.'
          ],
          [
            'name' => 'Gudeg Jogja',
            'image' => get_theme_file_uri('public/images/gudeg1.png'),
            'priceOld' => 'Rp 26.000',
            'priceNew' => 'Rp 22.000',
            'rating' => 4.8,
            'badges' => ['Best Seller', 'Khas  DIY'],
            'description' => 'Nasi gurih khas Yogyakarta dengan lauk sayur nangka muda, ayam suwir,telur,dan areh santan.'
          ],
          [
            'name' => 'Sei Tanah Rote',
            'image' => get_theme_file_uri('public/images/sei.png'),
            'priceOld' => 'Rp 49.000',
            'priceNew' => 'Rp 39.000',
            'rating' => 4.8,
            'badges' => ['Best Seller', 'Khas Nusa Tenggara'],
            'description' => 'Daging asap khas Nusa Tenggara Timur, dimasak perlahan dengan aroma kayu bakar, disajikan.'
          ],
    ];
      @endphp
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($products as $product)
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
  </div>
  <!-- Pagination -->
    <div class="flex items-center justify-end space-x-4 mt-8">
      <!-- Tombol Sebelumnya -->
      <button class="flex items-center px-4 py-2 bg-[#C1442E] text-white rounded-lg hover:bg-[#a63622] transition">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 mr-2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
        </svg>
        Sebelumnya
      </button>

      <!-- Nomor Halaman -->
      <div class="flex items-center space-x-2">
        <span class="px-3 py-1 border rounded-md bg-white text-gray-700 font-medium">1</span>
        <span class="text-gray-600">Dari 24</span>
      </div>

      <!-- Tombol Selanjutnya -->
      <button class="flex items-center px-4 py-2 bg-[#C1442E] text-white rounded-lg hover:bg-[#a63622] transition">
        Selanjutnya
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 ml-2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
        </svg>
      </button>
    </div>
  </div>
</section>
@endsection
