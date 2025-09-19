@extends('layouts.app')

@section('content')
  <div class="container mx-auto py-16 md:py-24 px-4">
    <div class="flex flex-col lg:flex-row gap-12">

      {{-- Sidebar --}}
      <aside class="w-full lg:w-1/4">
        <div class="sticky top-24">
          <h3 class="text-xl font-bold text-primary mb-6">Pengacara Kami</h3>
          {{-- Attorney list accordion --}}
          <div x-data="{ openCategory: '' }">
            @foreach ($attorney_categories as $category)
              <div class="border-b border-gray-200">
                <button @click="openCategory = openCategory === '{{ $category->slug }}' ? '' : '{{ $category->slug }}'" class="w-full text-left py-4 px-2 focus:outline-none">
                  <div class="flex justify-between items-center">
                    <span class="font-semibold text-primary">{{ $category->name }}</span>
                    <svg class="w-4 h-4 transform transition-transform" :class="{ 'rotate-180': openCategory === '{{ $category->slug }}' }" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                  </div>
                </button>
                <div x-show="openCategory === '{{ $category->slug }}'" x-transition class="pb-4 px-2">
                  <ul>
                    @foreach ($category->attorneys as $attorney_item)
                      <li>
                        <a href="{{ get_permalink($attorney_item->ID) }}" class="block py-2 text-sm hover:text-accent {{ get_the_ID() == $attorney_item->ID ? 'font-bold text-accent' : 'text-gray-700' }}">
                          {{ $attorney_item->post_title }}
                        </a>
                      </li>
                    @endforeach
                  </ul>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </aside>

      {{-- Main Content --}}
      <main class="w-full lg:w-3/4">
        @while(have_posts()) @php(the_post())
          <div class="flex flex-col md:flex-row gap-8">
            <div class="w-full md:w-1/3">
              <img src="{{ get_the_post_thumbnail_url(get_the_ID(), 'large') }}" alt="{{ the_title_attribute('echo=0') }}" class="w-full h-auto object-cover rounded-lg shadow-md">
            </div>
            <div class="w-full md:w-2/3">
              <p class="text-accent font-semibold">{{-- Role/Position --}}</p>
              <h1 class="text-3xl md:text-4xl font-bold text-primary mb-4">{{ the_title() }}</h1>
              <div class="flex items-center space-x-4 mb-6">
                <a href="mailto:{{-- email --}}" class="text-gray-500 hover:text-accent"><i class="fas fa-envelope"></i> Email</a>
                <a href="{{-- linkedin url --}}" target="_blank" class="text-gray-500 hover:text-accent"><i class="fab fa-linkedin"></i> LinkedIn</a>
                <a href="{{-- portfolio file url --}}" download class="text-gray-500 hover:text-accent"><i class="fas fa-download"></i> Download Portofolio</a>
              </div>
              <div class="prose max-w-none text-gray-600">
                {{ the_content() }}
              </div>
            </div>
          </div>

          {{-- Accordion for details --}}
          <div class="mt-12" x-data="{ open: 'area-of-focus' }">
            @php($details = [
              'area-of-focus' => 'Area of Focus',
              'bidang-perwakilan' => 'Bidang Perwakilan',
              'edukasi' => 'Edukasi',
              'asosiasi' => 'Asosiasi dan Keanggotaan Profesional',
              'penghargaan' => 'Penghargaan',
            ])
            @foreach ($details as $slug => $title)
              <div class="border-t border-gray-200">
                <button @click="open = open === '{{ $slug }}' ? '' : '{{ $slug }}'" class="w-full text-left py-5 focus:outline-none">
                  <div class="flex justify-between items-center">
                    <span class="text-lg font-semibold text-primary">{{ $title }}</span>
                    <svg class="w-5 h-5 transform transition-transform" :class="{ 'rotate-180': open === '{{ $slug }}' }" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                  </div>
                </button>
                <div x-show="open === '{{ $slug }}'" x-transition class="pb-5 prose max-w-none">
                  @if ($slug === 'penghargaan')
                    {{-- Gallery for awards --}}
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                        {{-- Placeholder for gallery images --}}
                        <img src="https://placehold.co/300x200" alt="Award" class="rounded-lg">
                        <img src="https://placehold.co/300x200" alt="Award" class="rounded-lg">
                        <img src="https://placehold.co/300x200" alt="Award" class="rounded-lg">
                    </div>
                  @else
                    {{-- Placeholder for content --}}
                    <p>Details for {{ $title }} go here. Use get_field('{{$slug}}') or similar.</p>
                  @endif
                </div>
              </div>
            @endforeach
          </div>
        @endwhile
      </main>
    </div>

    {{-- Other News --}}
    <section class="mt-24">
        <h2 class="text-2xl font-bold text-primary mb-6 text-center">Berita Lainnya</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            {{-- Placeholder for other news/articles --}}
            @for ($i = 0; $i < 3; $i++)
            <div class="bg-surface rounded-lg shadow-md overflow-hidden group">
                <a href="#" class="block">
                    <img src="https://placehold.co/400x300" alt="Blog post" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <p class="text-sm text-gray-500 mb-2">October 28, 2025</p>
                        <h3 class="text-lg font-bold text-primary group-hover:text-accent transition-colors">Judul Artikel Berita</h3>
                        <p class="text-gray-600 mt-2">Sedikit kutipan dari artikel berita atau blog post...</p>
                    </div>
                </a>
            </div>
            @endfor
        </div>
    </section>

  </div>

  {{-- Note: You will need to create a View Composer to pass the $attorney_categories data.
       Example: app/View/Composers/SingleAttorney.php
       In the composer, you'll query WordPress to get all terms from your attorney taxonomy
       and all attorney posts grouped by those terms.
       You will also need to use a plugin like Advanced Custom Fields (ACF) to create and manage
       the fields for role, email, linkedin, portfolio, and the detail sections.
  --}}
@endsection
