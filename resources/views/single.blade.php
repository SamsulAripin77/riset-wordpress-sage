@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    <article @php(post_class('h-entry'))>
      <div class="container mx-auto max-w-5xl px-4 py-8">
        {{-- Feature Image --}}
        @if (has_post_thumbnail())
          <figure class="mb-8">
            <img src="{{ get_the_post_thumbnail_url(get_the_ID(), 'full') }}" alt="{{ get_the_title() }}" class="w-full h-auto object-cover rounded-lg max-h-[80vh]">
          </figure>
        @endif

        <section class="">
          <div class="flex justify-between items-baseline gap-y-2">
            <div class="flex items-center justify-start mb-4 gap-x-2">
             @foreach(get_the_category() as $category)
               <a href="{{ get_category_link($category->term_id) }}" class="text-sm font-semibold text-accent bg-accent/10 px-3 py-1 rounded-full flex items-center">
                 <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 005.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 009.568 3z" />
                     <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6z" />
                 </svg>
                 <span>{{ $category->name }}</span>
               </a>
             @endforeach
           </div>
            <p>{{ get_the_date() }}</p>
          </div>
          <h1 class="text-4xl lg:text-5xl w-full  md:max-w-3xl font-bold text-secondary border-b mb-4 border-gray-300 pb-4 md:pb-8">
          {!! get_the_title() !!}
          </h1>
         

          {{-- Content --}}
          <div class="text-primary text-base leading-relaxed">
            @php(the_content())
          </div>
        </section>
      </div>
    </article>
  @endwhile
@endsection