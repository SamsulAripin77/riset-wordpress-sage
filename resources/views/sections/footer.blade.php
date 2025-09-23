@php
    $footer_settings = get_page_by_path('footer-settings');
    if ($footer_settings) {
        $footer_settings = get_field('footer_settings', $footer_settings->ID);
    }
@endphp 


<footer class="bg-primary text-surface py-12">
    <div class="container mx-auto px-6 md:px-12">
        <!-- Baris Pertama: 4 Kolom -->
        <div class="grid grid-cols-1 md:grid-cols-10 gap-8">
            <!-- Kolom 1: Profile -->
            <div class="md:col-span-4">
                <h3 class="text-2xl font-bold mb-4 text-background">{{$footer_settings['site_title'] ?? ''}}</h3>
                <p class="text-sm mb-6 md:max-w-2/3">
                   {{$footer_settings['site_description'] ?? ''}}
                </p>
                <p class="text-sm">{{$footer_settings['address'] ?? ''}}</p>
            </div>

            <!-- Kolom 2: Kontak -->
            <div class="md:col-span-3">
                <h4 class="font-semibold text-lg mb-4">{{$footer_settings['contact_title'] ?? ''}}</h4>
                <ul class="space-y-2 text-sm">
                    <li>Email: {{$footer_settings['email'] ?? ''}}</li>
                    <li>Telp: {{$footer_settings['phone'] ?? ''}}</li>
                    <li>Fax: {{$footer_settings['fax'] ?? ''}}</li>
                </ul>
            </div>

            <!-- Kolom 3 & 4: Menu + Informasi -->
            <div class="md:col-span-3">
                <div class="grid grid-cols-2 gap-8">
                    <!-- Menu -->
                    <div>
                        <h4 class="font-semibold text-lg mb-4">{{$footer_settings['menu_title'] ?? ''}}</h4>
                        @if (!empty($menu_items))
                        <ul class="space-y-2 text-sm">
                            @foreach ($menu_items as $item)
                                <li><a href="{{ $item['url'] }}" class="hover:text-accent">{{ $item['title'] }}</a></li>
                            @endforeach
                        </ul>
                        @endif
                    </div>
                    <!-- Informasi -->
                    <div>
                        <h4 class="font-semibold text-lg mb-4">{{$footer_settings['info_title'] ?? ''}}</h4>
                        <ul class="space-y-2 text-sm">
                            <li><a href="{{$footer_settings['privacy_policy']['url'] ?? ''}}" class="hover:text-accent">{{$footer_settings['privacy_policy']['title'] ?? ''}}</a></li>
                            <li><a href="{{$footer_settings['terms_of_service']['url'] ?? ''}}" class="hover:text-accent">{{$footer_settings['terms_of_service']['title'] ?? ''}}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Garis Pembatas -->
        <hr class="border-secondary my-8">

        <!-- Baris Kedua: Sosmed & Copyright -->
        <div class="flex flex-col md:flex-row justify-between items-center gap-4">
            <!-- Sosmed -->
            <div class="flex space-x-4">
                <a href="{{$footer_settings['instagram']['url'] ?? ''}}" class="hover:text-accent" aria-label="Instagram">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.162 6.162 6.162 6.162-2.759 6.162-6.162-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4s1.791-4 4-4 4 1.79 4 4-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44 1.441-.645 1.441-1.44-.645-1.44-1.441-1.44z"/>
                    </svg>
                </a>
                <a href="{{$footer_settings['linkedin']['url'] ?? ''}}" class="hover:text-accent" aria-label="LinkedIn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                    </svg>
                </a>
                {{-- <a href="tel:+622112345678" class="hover:text-accent" aria-label="Telepon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                    </svg>
                </a> --}}
            </div>

            <!-- Copyright -->
            <p class="text-sm">&copy; {{ $footer_settings['copyright'] ?? '' }}</p>
        </div>
    </div>
</footer>