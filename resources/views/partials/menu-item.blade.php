@props(['item'])

<li class="">
    <a href="{{ $item['url'] }}" class="nav-link block md:inline-block py-2 px-4 md:p-0">{{ $item['title'] }}</a>
    @if (!empty($item['children']))
        <button class="submenu-toggle absolute top-0 right-0 mt-2 mr-2 md:hidden">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
        </button>
        <ul class="submenu hidden md:absolute md:left-0 md:top-full md:bg-white md:shadow-lg md:py-2 md:mt-0 group-hover:block">
            @foreach ($item['children'] as $child)
                @include('partials.menu-item', ['item' => $child])
            @endforeach
        </ul>
    @endif
</li>
