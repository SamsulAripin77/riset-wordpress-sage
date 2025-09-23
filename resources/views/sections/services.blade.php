@props(['class' => 'bg-background py-16 md:py-24 text-primary', 'title' => 'Layanan Kami', 'services' => []])
<section id="services" class="{{ $class }}" data-aos="fade-up">
  <div class="container mx-auto px-4">
    <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 text-primary">
     {!! $title !!}
    </h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      @foreach($services as $key => $service)
      <div class="bg-surface p-6 md:p-8 rounded-lg shadow-md hover:shadow-lg transition" data-aos="fade-up" data-aos-delay="{{ $key * 100 }}">
        <h3 class="text-xl font-semibold mb-2">{{ $service['title'] }}</h3>
        <p class="text-primary line-clamp-3">{{ $service['desc'] }}</p>
      </div>
      @endforeach
    </div>
  </div>
</section>
