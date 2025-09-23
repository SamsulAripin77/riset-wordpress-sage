<!-- AOS: fade-up -->
@props(['histories' => [], 'class' => 'bg-surface py-16 md:py-24 text-primary', 'title' => 'Jejak Langkah Ambara Advocate'])
<section id="history" class="{{ $class }}" data-aos="fade-up">
  <div class="container mx-auto px-4">
    <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 text-primary">{{ $title }}</h2>
    <div class="relative max-w-4xl mx-auto">
      <div class="absolute w-1 h-full bg-emerald-600 left-1/2 transform -translate-x-1/2 hidden md:block"></div>
      @foreach ($histories as $key => $item)
      @if ($key % 2 == 0)
      <!-- Timeline Item 1 -->
      <div class="mb-8 flex justify-between items-center w-full right-timeline" data-aos="fade-right">
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
      <div class="mb-8 flex justify-between flex-row-reverse items-center w-full left-timeline" data-aos="fade-left">
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