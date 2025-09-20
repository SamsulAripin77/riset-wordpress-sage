@extends('layouts.app')

@section('content')
  <div class="container mx-auto py-16 md:py-20 px-4">
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
                <div x-show="openCategory === '{{ $category->slug }}'" 
                     x-transition:enter="transition ease-out duration-300"
                     x-transition:enter-start="opacity-0 transform -translate-y-2"
                     x-transition:enter-end="opacity-100 transform translate-y-0"
                     x-transition:leave="transition ease-in duration-200"
                     x-transition:leave-start="opacity-100 transform translate-y-0"
                     x-transition:leave-end="opacity-0 transform -translate-y-2"
                     class="pb-4 px-2" style="display: none;">
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
                <a href="mailto:{{-- email --}}" class="text-gray-500 hover:text-accent flex items-center space-x-2">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                  <span>Email</span>
                </a>
                <a href="{{-- linkedin url --}}" target="_blank" class="text-gray-500 hover:text-accent flex items-center space-x-2">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                  <span>LinkedIn</span>
                </a>
                <a href="{{-- portfolio file url --}}" download class="text-gray-500 hover:text-accent flex items-center space-x-2">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" /></svg>
                  <span>Download Portofolio</span>
                </a>
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
                <div x-show="open === '{{ $slug }}'"
                     x-transition:enter="transition ease-out duration-300"
                     x-transition:enter-start="opacity-0 transform -translate-y-2"
                     x-transition:enter-end="opacity-100 transform translate-y-0"
                     x-transition:leave="transition ease-in duration-200"
                     x-transition:leave-start="opacity-100 transform translate-y-0"
                     x-transition:leave-end="opacity-0 transform -translate-y-2"
                     class="pb-5 prose max-w-none" style="display: none;">
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
                    <p>Details for {{ $title }} go here. Use get_field('{{$slug}}') or similar. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero molestias sequi nemo pariatur doloremque deserunt voluptatum assumenda modi ipsam, accusantium, voluptatem tenetur quia repellat aperiam eaque aspernatur asperiores distinctio. Animi.</p>
                  @endif
                </div>
              </div>
            @endforeach
          </div>
        @endwhile
      </main>
    </div>

    @include('partials.components.other-news')

  </div>

  {{-- Note: You will need to create a View Composer to pass the $attorney_categories data.
       Example: app/View/Composers/SingleAttorney.php
       In the composer, you'll query WordPress to get all terms from your attorney taxonomy
       and all attorney posts grouped by those terms.
       You will also need to use a plugin like Advanced Custom Fields (ACF) to create and manage
       the fields for role, email, linkedin, portfolio, and the detail sections.
  --}}
@endsection
