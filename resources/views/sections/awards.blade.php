<!-- AOS: fade-up -->
@props(['awards' => [], 'class' => 'bg-surface py-16 md:py-24 text-primary', 'title' => 'Pengakuan, Penghargaan & Afiliasi'])
<section id="awards" class="{{ $class }}" data-aos="fade-up">
  <div class="container mx-auto px-4">
    <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 text-primary">{{ $title }}</h2>
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-y-8 gap-x-12 lg:gap-x-32">
      @foreach($awards as $key => $award)
      <div class="flex flex-col items-center text-center border-b border-gray-600" data-aos="fade-up" data-aos-delay="{{ $key * 100 }}">
        <a href="{{ $award['link'] }}" target="_blank" rel="noopener noreferrer">
          <img class="max-w-20 mx-auto mb-2" src="{{ $award['image'] }}" alt="{{ $award['name'] }}">
          <p class="text-sm">{{ $award['name'] }}</p>
        </a>
      </div>
      @endforeach
    </div>
  </div>
</section>