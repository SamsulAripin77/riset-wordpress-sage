<!-- AOS: fade-up -->
@props(['title' => 'Artikel Kami', 'class' => 'bg-background py-16 md:py-24 text-primary', 'blogs' => []])
<section id="blog" class="{{$class}}" data-aos="fade-up">
  <div class="container mx-auto px-4">
    <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 text-primary">{{ $title }}</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      @foreach($blogs as $key => $blog)
      <div class="bg-surface/10 rounded-lg shadow-md overflow-hidden hover:shadow-lg transition" data-aos="fade-up" data-aos-delay="{{ $key * 100 }}">
        <a href="{{ $blog['link'] }}">
          <div class="w-full aspect-video bg-gray-300">
            <img class="w-full h-full object-cover" src="{{ $blog['image'] }}" alt="{{ $blog['title'] }}">
          </div>
        </a>
        <div class="p-6">
          <h3 class="text-xl font-semibold mb-2">
            <a href="{{ $blog['link'] }}" class="hover:text-emerald-600">{{ $blog['title'] }}</a>
          </h3>
          <p class="text-gray-600 text-sm line-clamp-3">{!! $blog['desc'] !!}</p>
          <a href="{{ $blog['link'] }}" class="text-accent font-semibold mt-4 hover:underline">Baca Selengkapnya</a>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>