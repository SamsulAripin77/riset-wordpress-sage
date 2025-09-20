{{--
Template Name: Home
--}}

@extends('layouts.app')
@section('content')
<!-- Hero Section -->
<section id="hero" class="relative h-screen text-center flex flex-col justify-end text-surface">
  <div class="absolute inset-0 bg-primary/80"></div>
  <!-- Background Image with Overlay -->
  <div class="absolute inset-0">
    <img src="{{asset('resources/images/ambara.png')}}" alt="Tim Ambara Advocate sedang berdiskusi"
      class="w-full h-full object-[50%_70%] object-cover hidden md:block">
    <img src="{{asset('resources/images/ambara-mobile.png')}}" alt="Tim Ambara Advocate sedang berdiskusi"
      class="w-full h-full object-[50%_70%] object-cover md:hidden">
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
@php
$services = [
[
'title' => 'Hukum Korporat',
'desc' => 'Kami membantu perusahaan dalam pembentukan, restrukturisasi, dan kepatuhan regulasi, memastikan bisnis Anda
beroperasi secara legal dan efisien.',
'color' => 'text-secondary',
],
[
'title' => 'Litigasi & Penyelesaian Sengketa',
'desc' => 'Tim litigasi kami siap mewakili Anda di pengadilan dan arbitrase untuk menyelesaikan sengketa dengan strategi
yang efektif.',
'color' => 'text-primary',
],
[
'title' => 'Kekayaan Intelektual (IPR)',
'desc' => 'Lindungi aset intelektual Anda. Kami menyediakan layanan pendaftaran merek dagang, hak cipta, dan paten.',
'color' => 'text-primary',
]
];
@endphp
<!-- Layanan Kami -->
<section id="services" class="bg-background py-16 md:py-24 text-primary">
  <div class="container mx-auto px-4">
    <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 text-primary">
      Solusi Hukum yang Beragam untuk Setiap Kebutuhan
    </h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      @foreach($services as $service)
      <div class="bg-surface p-6 md:p-8 rounded-lg shadow-md hover:shadow-lg transition">
        <h3 class="text-xl font-semibold mb-2 {{ $service['color'] }}">{{ $service['title'] }}</h3>
        <p class="text-primary">{{ $service['desc'] }}</p>
      </div>
      @endforeach
    </div>
  </div>
</section>


<!-- Sejarah Perusahaan -->
<?php
$timeline = [
  [
    'tahun' => '2000',
    'title' => 'Didirikan',
    'desc'  => 'Ambara Advocate resmi didirikan dengan komitmen untuk memberikan layanan hukum terbaik.'
  ],
  [
    'tahun' => '2001',
    'title' => 'Ekspansi Layanan',
    'desc'  => 'Kami memperluas cakupan layanan untuk mencakup area Hukum Korporat dan Kekayaan Intelektual.'
  ],
  [
    'tahun' => '2002',
    'title' => 'Pengakuan Nasional',
    'desc'  => 'Ambara Advocate meraih penghargaan sebagai firma hukum terkemuka di Indonesia.'
  ],
  [
    'tahun' => '2003',
    'title' => 'Era Digital',
    'desc'  => 'Kami bertransformasi dengan menghadirkan layanan hukum berbasis teknologi digital.'
  ],
];
?>

<section id="history" class="bg-surface py-16 md:py-24 text-primary">
  <div class="container mx-auto px-4">
    <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 text-primary">Jejak Langkah Ambara Advocate</h2>
    <div class="relative max-w-4xl mx-auto">
      <div class="absolute w-1 h-full bg-emerald-600 left-1/2 transform -translate-x-1/2 hidden md:block"></div>
      @foreach ($timeline as $key => $item)
      @if ($key % 2 == 0)
      <!-- Timeline Item 1 -->
      <div class="mb-8 flex justify-between items-center w-full right-timeline">
        <div class="order-1 md:w-5/12"></div>
        <div class="z-20 flex items-center order-1 bg-gray-500 shadow-xl w-14 h-14 p-2 rounded-full max-md:mr-2">
          <p class="mx-auto text-white font-semibold text-md">{{$item['tahun']}}</p>
        </div>
        <div class="order-1 bg-background rounded-lg shadow-xl w-full md:w-5/12 px-6 py-4">
          <h3 class="mb-3 font-bold text-primary text-xl">{{$item['title']}}</h3>
          <p class="text-sm leading-snug tracking-wide text-primary text-opacity-100">{{ $item['desc'] }}</p>
        </div>
      </div>
      @else
      <!-- Timeline Item 2 -->
      <div class="mb-8 flex justify-between flex-row-reverse items-center w-full left-timeline">
        <div class="order-1 md:w-5/12"></div>
        <div class="z-20 flex items-center order-1 bg-gray-500 shadow-xl w-14 h-14 p-2 rounded-full max-md:ml-2">
          <p class="mx-auto text-white font-semibold text-md">{{$item['tahun']}}</p>
        </div>
        <div class="order-1 bg-background rounded-lg shadow-xl w-full md:w-5/12 px-6 py-4">
          <h3 class="mb-3 font-bold text-primary text-xl">{{$item['title']}}</h3>
          <p class="text-sm leading-snug tracking-wide text-primary text-opacity-100">{{ $item['desc'] }}</p>
        </div>
      </div>

      @endif
      @endforeach
    </div>
  </div>
</section>

<!-- Tim Pengacara -->
<section id="team" class="bg-background py-16 md:py-24 text-primary">
  <div class="container mx-auto px-4">
    <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 text-primary">Tim Profesional Kami</h2>
    @php
    $args = [
    'post_type' => 'attorneys',
    'posts_per_page' => 3
    ];
    $attorneys = new WP_Query($args);
    @endphp

    @if ($attorneys->have_posts())
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      @while ($attorneys->have_posts()) @php $attorneys->the_post() @endphp
      @php
      $image = get_the_post_thumbnail_url(get_the_ID(), 'full') ?: 'https://via.placeholder.com/400';
      $name = get_the_title();
      $terms = get_the_terms(get_the_ID(), 'attorney_category');
      $position = !empty($terms) ? $terms[0]->name : '';
      $link = get_permalink(get_the_ID())
      @endphp
      <x-attorney-card :image="$image" :name="$name" :position="$position" />
      @endwhile
    </div>
    @php wp_reset_postdata() @endphp
    @endif
  </div>
</section>

<!-- Section Pengakuan, Penghargaan & Afiliasi -->
@php
$awards = [
[
'image' => asset('resources/images/brand1.png'),
'link' => 'https://brand1.com',
'name' => 'Brand Name 1'
],
[
'image' => asset('resources/images/brand2.png'),
'link' => 'https://brand2.com',
'name' => 'Brand Name 2'
],
[
'image' => asset('resources/images/brand3.png'),
'link' => 'https://brand3.com',
'name' => 'Brand Name 3'
],
[
'image' => asset('resources/images/brand4.png'),
'link' => 'https://brand4.com',
'name' => 'Brand Name 4'
],
[
'image' => asset('resources/images/brand5.png'),
'link' => 'https://brand5.com',
'name' => 'Brand Name 5'
],
[
'image' => asset('resources/images/brand6.png'),
'link' => 'https://brand6.com',
'name' => 'Brand Name 6'
],
[
'image' => asset('resources/images/brand8.png'),
'link' => 'https://brand8.com',
'name' => 'Brand Name 8'
],
[
'image' => asset('resources/images/brand9.png'),
'link' => 'https://brand9.com',
'name' => 'Brand Name 9'
],
];
@endphp
<section id="awards" class="bg-surface py-16 md:py-24 text-primary">
  <div class="container mx-auto px-4">
    <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 text-primary">Terpercaya dan Terkemuka</h2>
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-y-8 gap-x-12 lg:gap-x-32">
      @foreach($awards as $award)
      <div class="flex flex-col items-center text-center border-b border-gray-600">
        <a href="{{ $award['link'] }}" target="_blank" rel="noopener noreferrer">
          <img class="max-w-20 mx-auto mb-2" src="{{ $award['image'] }}" alt="{{ $award['name'] }}">
          <p class="text-sm">{{ $award['name'] }}</p>
        </a>
      </div>
      @endforeach
    </div>
  </div>
</section>

<!-- Publikasi & Blog -->
@php
$blogs = [
[
'image' => asset('resources/images/blog1.jpg'),
'title' => 'Judul Artikel Blog 1',
'desc' => 'Deskripsi singkat artikel blog. Baca selengkapnya...',
'link' => '#'
],
[
'image' => asset('resources/images/blog2.jpg'),
'title' => 'Judul Artikel Blog 2',
'desc' => 'Deskripsi singkat artikel blog. Baca selengkapnya...',
'link' => '#'
],
[
'image' => asset('resources/images/blog4.jpg'),
'title' => 'Judul Artikel Blog 4',
'desc' => 'Deskripsi singkat artikel blog. Baca selengkapnya...',
'link' => '#'
],
];
@endphp

<!-- Publikasi & Blog -->
<section id="blog" class="bg-background py-16 md:py-24 text-primary">
  <div class="container mx-auto px-4">
    <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 text-primary">Insights Hukum Terbaru</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      @foreach($blogs as $blog)
      <div class="bg-surface rounded-lg shadow-md overflow-hidden hover:shadow-lg transition">
        <a href="{{ $blog['link'] }}">
          <div class="w-full aspect-video bg-gray-300">
            <img class="w-full h-full object-cover" src="{{ $blog['image'] }}" alt="{{ $blog['title'] }}">
          </div>
        </a>
        <div class="p-6">
          <h3 class="text-xl font-semibold mb-2">
            <a href="{{ $blog['link'] }}" class="hover:text-emerald-600">{{ $blog['title'] }}</a>
          </h3>
          <p class="text-gray-600 text-sm">{{ $blog['desc'] }}</p>
          <a href="#" class="text-accent font-semibold mt-4 hover:underline">Baca Selengkapnya</a>
        </div>
      </div>
      @endforeach
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