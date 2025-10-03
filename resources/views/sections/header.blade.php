@php
    $current_url = url()->current();
@endphp

<nav class="bg-white sticky top-0 z-50 shadow-md" x-data="{ mobileOpen: false }">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between items-center py-4">

      <!-- Logo -->
      <div class="flex-shrink-0 flex items-center">
        <a href="{{ url('/') }}" class="flex items-center space-x-2">
          <img src="{{ get_theme_file_uri('public/images/log.png') }}" alt="RasaNusa Logo" class="h-8 w-auto">
        </a>
      </div>

      <!-- Menu Desktop -->
      <div class="hidden md:flex space-x-6 items-center">
        <a href="{{ url('/') }}" class="px-4 py-2 text-sm font-medium rounded-full text-gray-600 hover:bg-red-600 hover:text-white">
          Beranda
        </a>
         <a href="{{ get_permalink(get_page_by_path('menu')) }}" 
          class="px-4 py-2 text-sm font-medium rounded-full text-gray-600 hover:bg-red-600 hover:text-white">
          Menu
        </a>
        <a href="{{ url('/tentang') }}" class="px-4 py-2 text-sm font-medium rounded-full text-gray-600 hover:bg-red-600 hover:text-white">
          Tentang Kami
        </a>
       <a href="{{ get_permalink(get_page_by_path('promo')) }}" 
          class="px-4 py-2 text-sm font-medium rounded-full text-gray-600 hover:bg-red-600 hover:text-white">
          Promo
        </a>
        <a href="{{ url('/kontak') }}" class="px-4 py-2 text-sm font-medium rounded-full text-gray-600 hover:bg-red-600 hover:text-white">
          Kontak / Reservasi
        </a>
      </div>

      <!--Search-->
     <div class="flex items-center space-x-4">
          <button class="text-gray-600 hover:text-red-600">
      <svg xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 20 20"
          fill="currentColor"
          class="w-6 h-6">
        <path fill-rule="evenodd"
              d="M12.9 14.32a8 8 0 111.414-1.414l4.387 4.387a1 1 0 01-1.414 1.414ld-4.387-4.387zM8 14a6 6 0 100-12 6 6 0 000 12z"
              clip-rule="evenodd" />
          </svg>
        </button>
     
        <!-- Cart -->
      <button class="text-gray-600 hover:text-red-600">
        <svg xmlns="http://www.w3.org/2000/svg" 
            fill="none" 
            viewBox="0 0 24 24" 
            stroke-width="1.5" 
            stroke="currentColor" 
            class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 2.25h1.5l1.5 12.75h13.5l1.5-9H6.75M9 20.25a.75.75 0 100-1.5.75.75 0 000 1.5zm8.25 0a.75.75 0 100-1.5.75.75 0 000 1.5z" />
        </svg>
      </button>

        <!-- User -->
        <button class="text-gray-600 hover:text-red-600">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 21a8.25 8.25 0 0115 0" />
          </svg>
        </button>
      </div>

      <!-- Hamburger Mobile -->
      <div class="md:hidden flex items-center">
      <button @click="mobileOpen = !mobileOpen" class="md:hidden text-gray-600 hover:text-red-600">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3 6h18M3 12h18M3 18h18" />
          </svg>
        </button>
      </div>

    </div>
  </div>

  <!-- Menu Mobile -->
  <div x-show="mobileOpen" class="md:hidden bg-white p-4 space-y-2 shadow-md">
    <a href="{{ url('/') }}" class="block px-4 py-2 rounded text-gray-600 hover:bg-red-600 hover:text-white">Beranda</a>
    <a href="{{ url('/menu') }}" class="block px-4 py-2 rounded text-gray-600 hover:bg-red-600 hover:text-white">Menu</a>
    <a href="{{ url('/tentang') }}" class="block px-4 py-2 rounded text-gray-600 hover:bg-red-600 hover:text-white">Tentang Kami</a>
    <a href="{{ url('/promo') }}" class="block px-4 py-2 rounded text-gray-600 hover:bg-red-600 hover:text-white">Promo</a>
    <a href="{{ url('/kontak') }}" class="block px-4 py-2 rounded text-gray-600 hover:bg-red-600 hover:text-white">Kontak / Reservasi</a>
  </div>
</nav>
