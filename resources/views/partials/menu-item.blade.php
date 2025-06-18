@php
  $hasChildren = !empty($item['children']);
@endphp

@if ($hasChildren)
  <li class="relative group">
    <button type="button" class="flex items-center justify-between w-full py-2 px-3 text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:hover:bg-gray-700 md:dark:hover:bg-transparent">
      {{ $item['title'] }}
      <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" fill="none" viewBox="0 0 10 6">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
      </svg>
    </button>
    <div class="z-10 hidden absolute left-0 mt-2 w-44 bg-white divide-y divide-gray-100 rounded-lg shadow-sm dark:bg-gray-700 dark:divide-gray-600 group-hover:block">
      <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
        @foreach ($item['children'] as $subitem)
          @include('partials.menu-item', ['item' => $subitem])
        @endforeach
      </ul>
    </div>
  </li>
@else
  <li>
    <a href="{{ $item['url'] }}" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">
      {{ $item['title'] }}
    </a>
  </li>
@endif