@extends('layouts.app')
@section('content')
<!-- Hero Section -->
<section id="hero" class="relative h-screen text-center flex flex-col justify-end text-surface">
  <div class="absolute inset-0 bg-primary/80"></div>
  <!-- Background Image with Overlay -->
  <div class="absolute inset-0">
    <img src="{{asset('resources/images/ambara.png')}}" alt="Tim Ambara Advocate sedang berdiskusi"
      class="w-full h-full object-[50%_70%] object-cover">
    <div class="absolute inset-0 bg-gray-900/60"></div>
  </div>

  <!-- Content -->
  <div class="relative container mx-auto px-4 pb-20 md:pb-24">
    <div class="max-w-3xl mx-auto">
      <p class="mt-4 text-lg font-semibold text-surface">Kami hadir untuk menyederhanakan masalah hukum Anda dengan
        pendekatan yang cermat dan profesional.</p>
      <a href="#services"
        class="mt-8 inline-block  bg-accent text-surface py-3 px-8 rounded-full text-lg hover:bg-primary transition-colors">Hubungi
        Kami</a>
    </div>
  </div>
</section>

<!-- Tentang Kami -->
<section id="about" class="bg-surface py-16 md:py-24 pt-20 text-primary">
  <div class="container mx-auto px-4 flex flex-col md:flex-row-reverse items-center gap-8 md:gap-16">
    <div class="md:w-1/2">
      <h2 class="text-3xl md:text-4xl font-bold text-primary">Lebih Dari Sekadar Pengacara</h2>
      <p class="mt-4 text-primary leading-relaxed">Ambara Advocate adalah firma hukum yang berdedikasi untuk memberikan
        layanan hukum komprehensif, didukung oleh tim ahli yang berkomitmen pada integritas dan keunggulan. Kami percaya
        bahwa setiap kasus adalah unik dan layak mendapatkan pendekatan personal yang terperinci. Dengan pemahaman
        mendalam tentang lanskap hukum yang terus berubah, kami siap menjadi mitra terpercaya Anda.</p>
    </div>
    <div class="md:w-1/2">
      <!-- Placeholder untuk gambar tim atau kantor -->
      <div class="w-full aspect-square rounded-lg">
        <img src="{{asset('resources/images/ceo.jpg')}}" alt="Tim Ambara Advocate sedang berdiskusi"
          class="h-full w-full object-cover rounded-lg object-top">
      </div>
    </div>
  </div>
</section>

<!-- Layanan Kami -->
<section id="services" class="bg-background py-16 md:py-24 text-primary">
  <div class="container mx-auto px-4">
    <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 text-primary">Solusi Hukum yang Beragam untuk Setiap
      Kebutuhan</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      <!-- Layanan 1 -->
      <div class="bg-surface p-6 md:p-8 rounded-lg shadow-md">
        <h3 class="text-xl font-semibold mb-2 text-secondary">Hukum Korporat</h3>
        <p class="text-primary">Kami membantu perusahaan dalam pembentukan, restrukturisasi, dan kepatuhan regulasi,
          memastikan bisnis Anda beroperasi secara legal dan efisien.</p>
      </div>
      <!-- Layanan 2 -->
      <div class="bg-surface p-6 md:p-8 rounded-lg shadow-md">
        <h3 class="text-xl font-semibold mb-2">Litigasi & Penyelesaian Sengketa</h3>
        <p class="text-primary">Tim litigasi kami siap mewakili Anda di pengadilan dan arbitrase untuk menyelesaikan
          sengketa dengan strategi yang efektif.</p>
      </div>
      <!-- Layanan 3 -->
      <div class="bg-surface p-6 md:p-8 rounded-lg shadow-md">
        <h3 class="text-xl font-semibold mb-2">Kekayaan Intelektual (IPR)</h3>
        <p class="text-primary">Lindungi aset intelektual Anda. Kami menyediakan layanan pendaftaran merek dagang, hak
          cipta, dan paten.</p>
      </div>
      <!-- Tambahkan layanan lainnya jika diperlukan -->
    </div>
  </div>
</section>

<!-- Sejarah Perusahaan -->
<section id="history" class="bg-surface py-16 md:py-24 text-primary">
  <div class="container mx-auto px-4">
    <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 text-primary">Jejak Langkah Ambara Advocate</h2>
    <div class="relative max-w-4xl mx-auto">
      <div class="absolute w-1 h-full bg-emerald-600 left-1/2 transform -translate-x-1/2 hidden md:block"></div>
      <!-- Timeline Item 1 -->
      <div class="mb-8 flex justify-between items-center w-full right-timeline">
        <div class="order-1 md:w-5/12"></div>
        <div class="z-20 flex items-center order-1 bg-gray-500 shadow-xl w-8 h-8 rounded-full">
          <h1 class="mx-auto text-white font-semibold text-lg">1</h1>
        </div>
        <div class="order-1 bg-background rounded-lg shadow-xl w-full md:w-5/12 px-6 py-4">
          <h3 class="mb-3 font-bold text-primary text-xl">Didirikan</h3>
          <p class="text-sm leading-snug tracking-wide text-primary text-opacity-100">Ambara Advocate resmi didirikan
            dengan komitmen untuk memberikan layanan hukum terbaik.</p>
        </div>
      </div>
      <!-- Timeline Item 2 -->
      <div class="mb-8 flex justify-between flex-row-reverse items-center w-full left-timeline">
        <div class="order-1 md:w-5/12"></div>
        <div class="z-20 flex items-center order-1 bg-gray-500 shadow-xl w-8 h-8 rounded-full">
          <h1 class="mx-auto text-white font-semibold text-lg">2</h1>
        </div>
        <div class="order-1 bg-background rounded-lg shadow-xl w-full md:w-5/12 px-6 py-4">
          <h3 class="mb-3 font-bold text-primary text-xl">Ekspansi Layanan</h3>
          <p class="text-sm leading-snug tracking-wide text-primary text-opacity-100">Kami memperluas cakupan layanan
            untuk mencakup area Hukum Korporat dan Kekayaan Intelektual.</p>
        </div>
      </div>
      <!-- Tambahkan item timeline lainnya di sini -->
        <!-- Timeline Item 3 -->
      <div class="mb-8 flex justify-between items-center w-full right-timeline">
        <div class="order-1 md:w-5/12"></div>
        <div class="z-20 flex items-center order-1 bg-gray-500 shadow-xl w-8 h-8 rounded-full">
          <h1 class="mx-auto text-white font-semibold text-lg">3</h1>
        </div>
        <div class="order-1 bg-background rounded-lg shadow-xl w-full md:w-5/12 px-6 py-4">
          <h3 class="mb-3 font-bold text-primary text-xl">Didirikan</h3>
          <p class="text-sm leading-snug tracking-wide text-primary text-opacity-100">Ambara Advocate resmi didirikan
            dengan komitmen untuk memberikan layanan hukum terbaik.</p>
        </div>
      </div>
      <!-- Timeline Item 4 -->
      <div class="mb-8 flex justify-between flex-row-reverse items-center w-full left-timeline">
        <div class="order-1 md:w-5/12"></div>
        <div class="z-20 flex items-center order-1 bg-gray-500 shadow-xl w-8 h-8 rounded-full">
          <h1 class="mx-auto text-white font-semibold text-lg">4</h1>
        </div>
        <div class="order-1 bg-background rounded-lg shadow-xl w-full md:w-5/12 px-6 py-4">
          <h3 class="mb-3 font-bold text-primary text-xl">Ekspansi Layanan</h3>
          <p class="text-sm leading-snug tracking-wide text-primary text-opacity-100">Kami memperluas cakupan layanan
            untuk mencakup area Hukum Korporat dan Kekayaan Intelektual.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Tim Pengacara -->
<section id="team" class="bg-background py-16 md:py-24 text-primary">
  <div class="container mx-auto px-4">
    <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 text-primary">Tim Profesional Kami</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      <!-- Anggota Tim 1 -->
      <div class="bg-surface rounded-lg shadow-md overflow-hidden">
        <div class="w-full aspect-square"><img class="h-full w-full object-cover"
            src="{{asset('resources/images/lawyer6.jpg')}}" alt="" srcset=""></div>
        <div class="p-6 text-center">
          <h3 class="text-xl font-semibold text-secondary">Nama Pengacara 1</h3>
          <p class="text-primary">Managing Partner</p>
        </div>
      </div>
      <!-- Anggota Tim 2 -->
      <div class="bg-surface rounded-lg shadow-md overflow-hidden">
        <div class="w-full aspect-square"><img class="h-full w-full object-cover"
            src="{{asset('resources/images/lawyer5.jpg')}}" alt="" srcset=""></div>
        <div class="p-6 text-center">
          <h3 class="text-xl font-semibold">Nama Pengacara 2</h3>
          <p class="text-primary">Partner</p>
        </div>
      </div>
      <!-- Anggota Tim 3 -->
      <div class="bg-surface rounded-lg shadow-md overflow-hidden">
        <div class="w-full aspect-square"><img class="h-full w-full object-cover"
            src="{{asset('resources/images/lawyer2.jpg')}}" alt="" srcset=""></div>
        <div class="p-6 text-center">
          <h3 class="text-xl font-semibold">Nama Pengacara 3</h3>
          <p class="text-primary">Senior Associate</p>
        </div>
      </div>
      <!-- Tambahkan anggota tim lainnya di sini -->
    </div>
  </div>
</section>

<!-- Section Pengakuan, Penghargaan & Afiliasi -->
<section id="awards" class="bg-surface py-16 md:py-24 text-primary">
  <div class="container mx-auto px-4">
    <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 text-primary">Terpercaya dan Terkemuka</h2>
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
<section id="blog" class="bg-background py-16 md:py-24 text-primary">
  <div class="container mx-auto px-4">
    <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 text-primary">Insights Hukum Terbaru</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      <!-- Artikel Blog 1 -->
      <div class="bg-surface rounded-lg shadow-md overflow-hidden">
        <div class="w-full aspect-video bg-gray-300">
          <img class="w-full h-full object-cover" src="{{asset('resources/images/blog1.jpg')}}" alt="" srcset="">
        </div>
        <div class="p-6">
          <h3 class="text-xl font-semibold mb-2">Judul Artikel Blog 1</h3>
          <p class="text-gray-600 text-sm">Deskripsi singkat artikel blog. Baca selengkapnya...</p>
        </div>
      </div>
      <!-- Artikel Blog 2 -->
      <div class="bg-surface rounded-lg shadow-md overflow-hidden">
        <div class="w-full aspect-video bg-gray-300">
          <img class="w-full h-full object-cover" src="{{asset('resources/images/blog2.jpg')}}" alt="" srcset="">
        </div>
        <div class="p-6">
          <h3 class="text-xl font-semibold mb-2">Judul Artikel Blog 2</h3>
          <p class="text-gray-600 text-sm">Deskripsi singkat artikel blog. Baca selengkapnya...</p>
        </div>
      </div>
      <!-- Artikel Blog 3 -->
      <div class="bg-surface rounded-lg shadow-md overflow-hidden">
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
<section id="contact" class="bg-surface py-16 md:py-24 text-primary">
  <div class="container mx-auto px-4 text-center">
    <h2 class="text-3xl md:text-4xl font-bold mb-4 text-primary">Mari Terhubung</h2>
    <p class="text-lg mb-8 text-secondary">Jika Anda membutuhkan konsultasi, silakan hubungi kami. Tim kami akan segera
      menanggapi pertanyaan Anda.</p>
    <form class="max-w-xl mx-auto space-y-4">
      <input type="text" placeholder="Nama Lengkap"
        class="w-full p-3 rounded-lg text-primary bg-background border border-secondary">
      <input type="email" placeholder="Email"
        class="w-full p-3 rounded-lg text-primary bg-background border border-secondary">
      <textarea placeholder="Pesan Anda" rows="4"
        class="w-full p-3 rounded-lg text-primary bg-background border border-secondary"></textarea>
      <button type="submit"
        class="w-full bg-accent py-3 rounded-lg font-semibold text-surface hover:bg-primary transition-colors">Kirim
        Pesan</button>
    </form>
  </div>
</section>

@endsection