@props([
    'title' => 'Founder ambaraadvocate',
    'sub_title' => 'Lebih Dari Sekadar Pengacara',
    'description' => 'Ambara Advocate adalah firma hukum yang berdedikasi untuk memberikan layanan hukum komprehensif, didukung oleh tim ahli yang berkomitmen pada integritas dan keunggulan. Kami percaya bahwa setiap kasus adalah unik dan layak mendapatkan pendekatan personal yang terperinci. Dengan pemahaman mendalam tentang lanskap hukum yang terus berubah, kami siap menjadi mitra terpercaya Anda.',
    'image' => asset('resources/images/ceo.jpg'),
    'class' => 'bg-surface py-16 md:py-24 pt-20 text-primary'
])
<section id="founder" class="{{$class}}" data-aos="fade-up">
  <div class="container mx-auto px-4 flex flex-col md:flex-row-reverse items-center gap-8 md:gap-16">
    <div class="md:w-1/2">
      <p class="text-accent font-semibold uppercase tracking-wider mb-2">{{ $title }}</p>
      <h2 class="text-3xl md:text-4xl font-bold text-primary">{{ $sub_title }}</h2>
      <p class="mt-4 text-primary leading-relaxed">{{ $description }}</p>
    </div>
    <div class="md:w-1/2">
      <!-- Placeholder untuk gambar tim atau kantor -->
      <div class="w-full aspect-square rounded-lg">
        <img src="{{ $image }}" alt="Tim Ambara Advocate sedang berdiskusi"
          class="h-full w-full object-cover rounded-lg object-top">
      </div>
    </div>
  </div>
</section>