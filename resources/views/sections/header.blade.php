@php
    $current_url = url()->current();
@endphp

<nav class="border-gray-200 bg-blue-50" x-data="{ mobileOpen: false }">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="{{ home_url('/') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Logo" />
        <span class="self-center text-2xl font-semibold whitespace-nowrap text-blue-700">{{ $siteName }}</span>
    </a>
    <button
        @click="mobileOpen = !mobileOpen"
        :aria-expanded="mobileOpen"
        type="button"
        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-700 rounded-lg md:hidden hover:bg-blue-100 focus:outline-none focus:ring-2 focus:ring-blue-200"
        aria-controls="navbar-dropdown"
    >
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
    <div :class="mobileOpen ? 'block' : 'hidden'" class="w-full md:block md:w-auto transition-all duration-200" id="navbar-dropdown">
      <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-blue-100 rounded-lg bg-blue-50 md:space-x-8 md:flex-row md:mt-0 md:border-0 md:bg-transparent">
        @foreach ($menu_items as $item)
          @php
              $isActive = rtrim($item['url'], '/') === rtrim($current_url, '/');
          @endphp
          @if (!empty($item['children']))
            <li class="relative" x-data="{ dropdownOpen: false }">
                <a
                  href="{{ $item['url'] }}"
                  @click.prevent="dropdownOpen = !dropdownOpen"
                  @mouseenter.window="if(window.innerWidth >= 768) dropdownOpen = true"
                  @mouseleave.window="if(window.innerWidth >= 768) dropdownOpen = false"
                  :class="dropdownOpen ? 'md:text-gray-900' : ''"
                  class="flex items-center justify-between w-full py-2 px-3 text-gray-700 rounded-sm hover:text-blue-700 hover:bg-blue-100 md:hover:bg-transparent md:p-0 md:w-auto {{ $isActive ? 'bg-blue-100 text-gray-900 font-semibold md:bg-transparent' : '' }}"
                >
                  {{ $item['title'] }}
                  <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" fill="none" viewBox="0 0 10 6">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="m1 1 4 4 4-4"/>
                  </svg>
                </a>
                <!-- Dropdown menu -->
                <div
                  x-show="dropdownOpen"
                  x-transition:enter="transition ease-out duration-150"
                  x-transition:enter-start="opacity-0 scale-95"
                  x-transition:enter-end="opacity-100 scale-100"
                  x-transition:leave="transition ease-in duration-100"
                  x-transition:leave-start="opacity-100 scale-100"
                  x-transition:leave-end="opacity-0 scale-95"
                  class="z-20 absolute left-0 mt-1 font-normal bg-white divide-y divide-blue-100 rounded-lg shadow w-44"
                  @click.away="dropdownOpen = false"
                  style="display: none;"
                >
                    <ul class="py-2 text-sm text-gray-700">
                        @foreach ($item['children'] as $child)
                          @php
                              $isChildActive = rtrim($child['url'], '/') === rtrim($current_url, '/');
                          @endphp
                          <li>
                            <a href="{{ $child['url'] }}"
                               class="block px-4 py-2 hover:bg-blue-100 hover:text-blue-700 rounded-sm {{ $isChildActive ? 'bg-blue-100 text-gray-900 font-semibold' : '' }}">
                              {{ $child['title'] }}
                            </a>
                          </li>
                        @endforeach
                    </ul>
                </div>
            </li>
          @else
            <li>
              <a href="{{ $item['url'] }}"
                 class="block py-2 px-3 rounded-sm text-gray-700 hover:text-blue-700 hover:bg-blue-100 md:hover:bg-transparent md:p-0 {{ $isActive ? 'bg-blue-100 text-gray-900 font-semibold md:bg-transparent' : '' }}">
                {{ $item['title'] }}
              </a>
            </li>
          @endif
        @endforeach
      </ul>
    </div>
  </div>
</nav>
