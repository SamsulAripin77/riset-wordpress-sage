@props([
  'name',
  'image',
  'priceOld' => null,
  'priceNew',
  'rating' => 0,
  'badges' => [], 
  'description' => null,
])

<div {{ $attributes->merge(['class' => 'bg-white rounded-2xl shadow-md overflow-hidden relative w-full box-border']) }}>
  
  <!-- Gambar + Badge -->
  <div class="relative">
    <img src="{{ $image }}" alt="{{ $name }}" class="w-full h-40 object-cover">

    @if(!empty($badges))
      <div class="absolute top-2 left-2 flex space-x-2 z-10">
        @foreach($badges as $badge)
          <span
            class="text-white text-xs px-2 py-1 rounded-md
              @if($badge === 'Best Seller') bg-red-600
              @elseif(str_contains($badge, 'Khas') || str_contains($badge, 'Jawa') || str_contains($badge, 'Bali')) bg-green-600
              @else bg-gray-500
              @endif
            "
          >
            {{ $badge }}
          </span>
        @endforeach
      </div>
    @endif
  </div>

  <div class="bg-white rounded-xl shadow p-4 transform transition-transform duration-300 hover:scale-105">

  <!-- Konten Card -->
  <div class="p-4 flex flex-col">
    <!-- Nama + Rating -->
    <div class="flex items-center justify-between mb-2">
    <h3 class="font-semibold text-gray-800">
        <a href="{{ home_url('/detail-produk/' . Str::slug($name)) }}">
            {{ $name }}
        </a>
      </h3>
      <div class="flex items-center text-yellow-500 text-sm">
        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20" class="w-4 h-4 mr-1">
          <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.176 0l-2.8 2.034c-.785.57-1.84-.197-1.54-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.462a1 1 0 00.95-.69l1.07-3.292z"/>
        </svg>
        <span>{{ $rating }}</span>
      </div>
    </div>

    <!-- Harga -->
    <div class="mb-2">
      @if($priceOld)
        <span class="text-sm text-gray-500 line-through mr-2">{{ $priceOld }}</span>
      @endif
      <span class="text-red-600 font-bold">{{ $priceNew }}</span>
    </div>

    <!-- Deskripsi -->
    @if($description)
      <p class="text-gray-600 text-sm line-clamp-2 mb-4">{{ $description }}</p>
    @endif

    <!-- Tombol Pesan & Love -->
    <div class="flex items-center justify-between">
      <button class="bg-[#C1442E] text-white text-sm px-4 py-2 rounded-xl hover:bg-red-700 transition">
        Pesan Sekarang
      </button>
      <button class="p-2 rounded-full border hover:bg-gray-100 transition">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" class="w-5 h-5 text-gray-500">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
        </svg>
      </button>
    </div>
  </div>
</div>
</div>
