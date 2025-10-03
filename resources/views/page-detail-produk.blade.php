@php
  $produk_slug = get_query_var('produk_slug');
@endphp

@extends('layouts.app') 

@section('content')

<section class="max-w-7xl mx-auto px-6 py-10 grid grid-cols-1 md:grid-cols-2 gap-10">
  {{-- Left: Product Image Gallery --}}
  <div>
    <div class="grid grid-cols-3 gap-3">
      {{-- Foto besar --}}
      <div class="col-span-3 row-span-3 rounded-2xl overflow-hidden shadow-md">
        <img id="mainImage"
             src="{{ get_theme_file_uri('public/images/rendang.png') }}" 
             alt="Rendang Minang" 
             class="w-full h-full object-cover transition duration-300 ease-in-out">
      </div>

      {{-- Thumbnails --}}
      <div class="col-span-1 rounded-xl overflow-hidden">
        <img src="{{ get_theme_file_uri('public/images/rdg1.png') }}" 
            class="thumbnail w-full h-24 object-cover cursor-pointer rounded-xl border-2 border-transparent hover:border-red-500 shadow-sm">
      </div>
      <div class="col-span-1 rounded-xl overflow-hidden">
        <img src="{{ get_theme_file_uri('public/images/rdg2.png') }}" 
            class="thumbnail w-full h-24 object-cover cursor-pointer rounded-xl border-2 border-transparent hover:border-red-500 shadow-sm">
      </div>
      <div class="col-span-1 rounded-xl overflow-hidden">
        <img src="{{ get_theme_file_uri('public/images/rdg3.png') }}" 
            class="thumbnail w-full h-24 object-cover cursor-pointer rounded-xl border-2 border-transparent hover:border-red-500 shadow-sm">
      </div>
    </div>
  </div>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    const mainImage = document.getElementById("mainImage");
    const thumbnails = document.querySelectorAll(".thumbnail");

    thumbnails.forEach(thumb => {
      thumb.addEventListener("click", function() {
        // Ganti gambar utama
        mainImage.src = this.src;

        // Animasi halus
        mainImage.classList.add("opacity-0");
        setTimeout(() => {
          mainImage.classList.remove("opacity-0");
          mainImage.classList.add("opacity-100");
        }, 100);

        // Highlight thumbnail terpilih
        thumbnails.forEach(t => t.classList.remove("border-red-500"));
        this.classList.add("border-red-500");
      });
    });
  });
</script>

  {{-- Right: Product Info --}}
  <div>
    <h1 class="text-3xl font-bold text-gray-900">Rendang Minang</h1>
    <p class="text-gray-600 mt-1">Persembahan Tanah Minang untuk Dunia</p>

    {{-- Rating --}}
    <div class="flex items-center mt-3">
      <div class="flex text-yellow-400">
        @for ($i = 0; $i < 5; $i++)
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.97a1 1 0 00.95.69h4.174c.969 0 1.371 1.24.588 1.81l-3.377 2.455a1 1 0 00-.364 1.118l1.287 3.97c.3.922-.755 1.688-1.54 1.118L10 13.348l-3.375 2.71c-.784.57-1.838-.196-1.539-1.118l1.287-3.97a1 1 0 00-.364-1.118L2.63 9.397c-.783-.57-.38-1.81.588-1.81h4.174a1 1 0 00.95-.69l1.286-3.97z"/></svg>
        @endfor
      </div>
      <span class="ml-2 text-gray-600 text-sm">(3k+ ulasan)</span>
    </div>

    {{-- Labels --}}
    <div class="flex gap-2 mt-3">
      <span class="bg-red-600 text-white px-3 py-1 text-xs font-semibold rounded-lg">Best Seller</span>
      <span class="bg-yellow-500 text-white px-3 py-1 text-xs font-semibold rounded-lg">Masterpiece</span>
      <span class="bg-green-600 text-white px-3 py-1 text-xs font-semibold rounded-lg">Khas Sumatera Barat</span>
    </div>

    {{-- Harga --}}
    <div class="mt-5">
      <span class="text-2xl font-bold text-red-600">Rp 35.000</span>
      <span class="text-gray-400 line-through ml-2">Rp 42.000</span>
    </div>

    {{-- Deskripsi --}}
    <p class="mt-4 text-gray-700 leading-relaxed">
      Daging sapi premium dimasak perlahan dengan santan kental dan rempah Minangkabau, menghasilkan tekstur lembut dengan bumbu gurih pedas yang meresap hingga ke serat daging. Cocok dinikmati dengan nasi hangat atau jadi sajian spesial bersama orang tersayang.
    </p>

    {{-- Detail Produk --}}
    <div class="mt-6">
      <h2 class="font-bold text-lg mb-2">Detail Produk</h2>
      <ul class="text-gray-700 text-sm space-y-1">
        <li><span class="font-semibold w-24 inline-block">Nama Menu</span> Rendang Minang</li>
        <li><span class="font-semibold w-24 inline-block">Kategori</span> Masakan Khas Sumatera</li>
        <li><span class="font-semibold w-24 inline-block">Porsi</span> 1–2 Orang</li>
      </ul>
    </div>

    {{-- Add to cart --}}
    <div class="mt-6 flex items-center gap-3">
      <div class="flex items-center border rounded-lg">
        <button class="px-3 py-2 text-gray-600 hover:bg-gray-100">-</button>
        <input type="text" value="1" class="w-12 text-center border-0 focus:ring-0">
        <button class="px-3 py-2 text-gray-600 hover:bg-gray-100">+</button>
      </div>
      <button class="flex-1 px-4 py-2 border rounded-lg text-gray-700 hover:bg-gray-100">
        Tambah ke Keranjang
      </button>
    </div>

    {{-- CTA --}}
    <button class="mt-4 w-full bg-red-600 text-white py-3 rounded-lg font-semibold hover:bg-red-700">
      Pesan Sekarang
    </button>
  </div>
</section>

{{-- Ulasan Costumer --}}
<section class="bg-[#FAF7F5] py-12 px-6 md:px-12 rounded-2xl mt-8">
  <div class="max-w-7xl mx-auto">
    
    {{-- Heading + Filter --}}
    <h2 class="text-xl md:text-2xl font-semibold mb-4">Ulasan Customer</h2>
    <div class="flex flex-wrap items-center justify-between gap-4 mb-8">
      <div class="flex flex-wrap gap-2">
          <button class="px-4 py-2 rounded-md text-sm font-medium bg-white border border-gray-200 text-gray-700 hover:bg-red-600 hover:text-white transition">
            Semua
          </button>
          <button class="px-4 py-2 rounded-md text-sm font-medium bg-white border border-gray-200 text-gray-700 hover:bg-red-600 hover:text-white transition">
           Paling Relevan
          </button>
          <button class="px-4 py-2 rounded-md text-sm font-medium bg-white border border-gray-200 text-gray-700 hover:bg-red-600 hover:text-white transition">
            Dengan Foto
          </button>
          <button class="px-4 py-2 rounded-md text-sm font-medium bg-white border border-gray-200 text-gray-700 hover:bg-red-600 hover:text-white transition">
            Ulasan Terbaik
          </button>
        </div>
      <div>
        <input type="text" placeholder="Cari Ulasan" 
               class="border border-gray-300 rounded-full px-4 py-2 text-sm w-60 focus:outline-none focus:ring-1 focus:ring-gray-400">
      </div>
    </div>

    {{-- Rating --}}
    <div class="flex items-center gap-4 mb-8">
      <div class="text-4xl font-bold">4.9<span class="text-2xl">/5</span></div>
      <div>
        <div class="text-yellow-500">★★★★★</div>
        <p class="text-sm text-gray-600">Dari 3k+ Ulasan</p>
      </div>
    </div>

    {{-- Review Cards --}}
    <div class="grid md:grid-cols-2 gap-6">
      <div class="bg-white border border-gray-200 rounded-2xl p-5 shadow-sm">
        <p class="text-gray-700 mb-4">Worth it dengan harganya. Tekstur daging lembut, tidak alot, dan aroma rempahnya bikin nagih. Rasanya benar-benar Nusantara</p>
        <div class="text-yellow-500 mb-2">★★★★★</div>
        <p class="font-semibold">Jessica</p>
      </div>

      <div class="bg-white border border-gray-200 rounded-2xl p-5 shadow-sm">
        <p class="text-gray-700 mb-4">Rendangnya enak, tapi agak berminyak. Tapi rasa tetap top, recommended buat pecinta rendang asli Minang!</p>
        <div class="text-yellow-500 mb-2">★★★★☆</div>
        <p class="font-semibold">Clara</p>
      </div>

      <div class="bg-white border border-gray-200 rounded-2xl p-5 shadow-sm">
        <p class="text-gray-700 mb-4">Dagingnya empuk banget, bumbunya meresap sampai ke dalam. Rasanya autentik seperti rendang di rumah nenek di Padang. Pasti repeat order!</p>
        <div class="text-yellow-500 mb-2">★★★★★</div>
        <p class="font-semibold">Uni Bakwan</p>
      </div>

      <div class="bg-white border border-gray-200 rounded-2xl p-5 shadow-sm">
        <p class="text-gray-700 mb-4">Pengiriman cepat, packaging rapi, dan porsinya pas. Bumbunya pekat, meski aku lebih suka sedikit lebih pedas. Overall enak banget</p>
        <div class="text-yellow-500 mb-2">★★★★☆</div>
        <p class="font-semibold">Rizky</p>
      </div>

      <div class="bg-white border border-gray-200 rounded-2xl p-5 shadow-sm">
        <p class="text-gray-700 mb-4">Rasanya kaya rempah dan gurihnya mantap. Cocok banget dimakan bareng nasi panas. Ini salah satu rendang terenak yang pernah aku coba</p>
        <div class="text-yellow-500 mb-2">★★★★★</div>
        <p class="font-semibold">Maya</p>
      </div>

      <div class="bg-white border border-gray-200 rounded-2xl p-5 shadow-sm">
        <p class="text-gray-700 mb-4">First time coba, langsung jatuh cinta! Packagingnya juga rapi dan ramah lingkungan, jadi makin suka.</p>
        <div class="text-yellow-500 mb-2">★★★★★</div>
        <p class="font-semibold">Bayu</p>
      </div>

     {{-- Button --}}
    <div class="mt-8">
      <button class="bg-[#C1442E] text-white px-6 py-2 rounded-lg hover:bg-red-700 transition">
        Lihat Ulasan <span class="text-lg">⌄</span>
      </button>
    </div>
  </div>
</section>

{{-- Menu Yang Mungkin Kamu Suka --}}
<section class="bg-[#FAF7F5] py-12 px-6 md:px-12 mt-6 rounded-2xl">
  <div class="max-w-7xl mx-auto text-center">
    <h2 class="text-2xl font-semibold mb-8">Menu Yang Mungkin Kamu Suka</h2>

{{-- Content --}}
  <div id="best-seller" class="md:col-span-2" role="tabpanel" aria-labelledby="nusantara-tab">
      @php
        $products = [
          [
            'name' => 'Nasi Liwet Solo',
            'image' => get_theme_file_uri('public/images/rice.png'),
            'priceOld' => 'Rp 26.000',
            'priceNew' => 'Rp 22.000',
            'rating' => 4.5,
            'badges' => ['Best Seller', 'Khas Jawa Tengah'],
            'description' => 'Nasi gurih khas Solo dengan lauk sayur labu siam, ayam suwir, dan santan yang creamy.'
          ],
          [
            'name' => 'Ayam Betutu',
            'image' => get_theme_file_uri('public/images/betu.png'),
            'priceOld' => 'Rp 49.000',
            'priceNew' => 'Rp 40.000',
            'rating' => 4.5,
            'badges' => ['Best Seller', 'Khas Bali'],
            'description' => 'Ayam utuh khas Bali yang dibumbui rempah pedas, dimasak perlahan hingga daging empuk dan bumbu meresap.'
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
            'name' => 'Rendang',
            'image' => get_theme_file_uri('public/images/rendang.png'),
            'priceOld' => 'Rp 42.000',
            'priceNew' => 'Rp 35.000',
            'rating' => 4.9,
            'badges' => ['Best Seller', 'Khas Sumatera'],
            'description' => 'Daging sapi dimasak dengan santan dan rempah khas Minang.'
          ],
        ];
      @endphp
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 text-left">
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

{{-- Button --}}
<div class="mt-8 flex justify-center">
  <button class="bg-[#C1442E] text-white px-6 py-2 rounded-lg hover:bg-red-700 transition">
    Lihat Semua
  </button>
</div>

@endsection

