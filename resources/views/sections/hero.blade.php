@props([
    'desktop_image' => asset('resources/images/ambara.png'),
    'mobile_image' => asset('resources/images/ambara-mobile.png'),
    'text' => 'Kami hadir untuk menyederhanakan masalah hukum Anda dengan pendekatan yang cermat dan profesional.',
    'button_text' => 'Hubungi Kami',
    'button_link' => '#services',
])
<section id="hero" class="relative h-screen text-center flex flex-col justify-end text-surface" data-aos="fade-in">
  <div class="absolute inset-0 bg-primary/80"></div>
  <!-- Background Image with Overlay -->
  <div class="absolute inset-0">
    <img src="{{ $desktop_image }}" alt="Tim Ambara Advocate sedang berdiskusi"
      class="w-full h-full object-[50%_70%] object-cover hidden md:block">
    <img src="{{ $mobile_image }}" alt="Tim Ambara Advocate sedang berdiskusi"
      class="w-full h-full object-[50%_70%] object-cover md:hidden">
    <div class="absolute inset-0 bg-gray-900/60"></div>
  </div>

  <!-- Content -->
  <div class="relative container mx-auto px-4 pb-20 md:pb-24">
    <div class="max-w-3xl mx-auto">
      <p class="mt-4 text-lg font-semibold text-surface">{{ $text }}</p>
      <a href="{{ $button_link }}"
        class="mt-8 inline-block  bg-accent text-surface py-3 px-8 rounded-full text-lg hover:bg-primary transition-colors">{{ $button_text }}</a>
    </div>
  </div>
</section>