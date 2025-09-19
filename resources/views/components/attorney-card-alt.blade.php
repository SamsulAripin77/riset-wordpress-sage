@props(['image' => '#', 'category' => '', 'title' => '', 'link' => '#'])

<div class="bg-surface rounded-lg shadow-md overflow-hidden group transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
  <a href="{{ $link }}" class="block">
    <div class="w-full aspect-[4/5] relative">
      <img class="h-full w-full object-cover" src="{{ $image }}" alt="{{ $title }}">
      <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
      <div class="absolute bottom-0 left-0 p-4">
        <p class="text-sm text-surface/80 font-semibold">{{ $category }}</p>
        <h3 class="text-lg font-bold text-surface">{{ $title }}</h3>
      </div>
    </div>
  </a>
  <div class="p-4 bg-surface">
      <a href="{{ $link }}" class="font-semibold text-accent hover:underline">Baca Biodata &rarr;</a>
  </div>
</div>
