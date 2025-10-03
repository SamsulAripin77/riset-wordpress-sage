{{-- resources/views/partials/filter-sidebar.blade.php --}}
@php
  // contoh nilai default (ambil dari query string kalau ada)
  $q_availability = request()->get('availability', '');
  $q_level = request()->get('level', '');
  $q_min = request()->get('price_min', '');
  $q_max = request()->get('price_max', '');
  $q_region = request()->get('region', '');
  $q_category = request()->get('category', '');
@endphp

<aside class="w-full md:w-72 lg:w-80 bg-transparent">
  <form method="GET" action="{{ get_permalink(get_page_by_path('menu')) }}" class="space-y-6">
    {{-- Header --}}
    <div class="flex items-center justify-between">
      <h3 class="text-sm font-semibold text-gray-900">Filter</h3>
      <a href="{{ get_permalink(get_page_by_path('menu')) }}" class="text-sm text-red-600 hover:underline">Reset</a>
    </div>

    {{-- Availability --}}
    <div class="space-y-2">
      <div class="flex items-center justify-between">
        <h4 class="text-xs font-medium text-gray-700">Availability</h4>
        <a href="{{ request()->fullUrlWithQuery(['availability' => null]) }}" class="text-xs text-red-600">Reset</a>
      </div>
      <div class="space-y-1 text-sm text-gray-700">
        <label class="flex items-center gap-2">
          <input type="radio" name="availability" value="available" class="form-radio" {{ $q_availability === 'available' ? 'checked' : '' }}>
          <span>Tersedia</span>
        </label>
        <label class="flex items-center gap-2">
          <input type="radio" name="availability" value="soldout" class="form-radio" {{ $q_availability === 'soldout' ? 'checked' : '' }}>
          <span>Habis</span>
        </label>
      </div>
    </div>

    {{-- Level Pedas --}}
    <div class="space-y-2">
      <div class="flex items-center justify-between">
        <h4 class="text-xs font-medium text-gray-700">Level Pedas</h4>
        <a href="{{ request()->fullUrlWithQuery(['level' => null]) }}" class="text-xs text-red-600">Reset</a>
      </div>
      <div class="space-y-1 text-sm text-gray-700">
        <label class="flex items-center gap-2">
          <input type="radio" name="level" value="none" class="form-radio" {{ $q_level === 'none' ? 'checked' : '' }}>
          <span>Tidak Pedas</span>
        </label>
        <label class="flex items-center gap-2">
          <input type="radio" name="level" value="medium" class="form-radio" {{ $q_level === 'medium' ? 'checked' : '' }}>
          <span>Sedang</span>
        </label>
        <label class="flex items-center gap-2">
          <input type="radio" name="level" value="hot" class="form-radio" {{ $q_level === 'hot' ? 'checked' : '' }}>
          <span>Pedas</span>
        </label>
        <label class="flex items-center gap-2">
          <input type="radio" name="level" value="extra" class="form-radio" {{ $q_level === 'extra' ? 'checked' : '' }}>
          <span>Extra Pedas</span>
        </label>
      </div>
    </div>

    {{-- Harga (range inputs agar kompatibel) --}}
    <div class="space-y-2">
      <div class="flex items-center justify-between">
        <h4 class="text-xs font-medium text-gray-700">Harga</h4>
        <a href="{{ request()->fullUrlWithQuery(['price_min' => null, 'price_max' => null]) }}" class="text-xs text-red-600">Reset</a>
      </div>
      <div class="text-sm text-gray-700">
        <div class="flex gap-2 items-center">
          <input type="number" name="price_min" placeholder="Rp min" value="{{ $q_min }}" class="w-1/2 px-3 py-2 border border-gray-200 rounded-md text-sm">
          <input type="number" name="price_max" placeholder="Rp max" value="{{ $q_max }}" class="w-1/2 px-3 py-2 border border-gray-200 rounded-md text-sm">
        </div>
        <p class="mt-1 text-xs text-gray-500">Masukkan range harga dalam rupiah (contoh: 15000)</p>
      </div>
    </div>

    {{-- Daerah Asal Menu (checkbox list) --}}
    <div class="space-y-2">
      <div class="flex items-center justify-between">
        <h4 class="text-xs font-medium text-gray-700">Daerah Asal Menu</h4>
        <a href="{{ request()->fullUrlWithQuery(['region' => null]) }}" class="text-xs text-red-600">Reset</a>
      </div>
      <div class="space-y-1 text-sm text-gray-700">
        @php
          $regions = ['Jawa','Sumatera','Kalimantan','Sulawesi','Bali','Nusa Tenggara','Maluku','Papua'];
        @endphp
        @foreach($regions as $r)
          <label class="flex items-center gap-2">
            <input type="checkbox" name="region[]" value="{{ $r }}" 
                   {{ is_array(request()->get('region')) && in_array($r, request()->get('region')) ? 'checked' : '' }}>
            <span>{{ $r }}</span>
          </label>
        @endforeach
      </div>
    </div>

    {{-- Kategori (ambil dinamis kalau mau: contoh static dulu) --}}
    <div class="space-y-2">
      <div class="flex items-center justify-between">
        <h4 class="text-xs font-medium text-gray-700">Kategori</h4>
        <a href="{{ request()->fullUrlWithQuery(['category' => null]) }}" class="text-xs text-red-600">Reset</a>
      </div>
      <div class="space-y-1 text-sm text-gray-700">
        @php
          $cats = ['Menu Nusantara','Promo Special','Cemilan & Penutup','Paket Keluarga','Menu Sehat','Minuman Segar'];
        @endphp
        @foreach($cats as $c)
          <label class="flex items-center gap-2">
            <input type="checkbox" name="category[]" value="{{ $c }}" 
                   {{ is_array(request()->get('category')) && in_array($c, request()->get('category')) ? 'checked' : '' }}>
            <span>{{ $c }}</span>
          </label>
        @endforeach
      </div>
    </div>

    {{-- Submit --}}
    <div>
      <button type="submit" class="w-full px-4 py-2 rounded-md bg-red-600 text-white text-sm font-medium hover:bg-red-700 transition">
        Terapkan Filter
      </button>
    </div>
  </form>
</aside>
