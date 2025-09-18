@props(['image', 'name', 'position'])

<div class="bg-surface rounded-lg shadow-md overflow-hidden">
  <div class="w-full aspect-square">
    <img class="h-full w-full object-cover" src="{{ $image }}" alt="{{ $name }}">
  </div>
  <div class="p-6 text-center">
    <h3 class="text-xl font-semibold text-secondary">{{ $name }}</h3>
    <p class="text-primary">{{ $position }}</p>
  </div>
</div>
