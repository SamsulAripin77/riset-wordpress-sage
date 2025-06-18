@extends('layouts.app')

@section('content')
<h1 class="text-3xl">Judul dengan Crimson Text</h1>
<p>Body default (font tidak Crimson)</p>
<h1 class="text-3xl font-poppins">Ini Judul Poppins</h1>
<h1 class="text-3xl font-roboto">Ini paragraf Roboto (body)</h1>
<p class="font-sans"></p>
  @include('partials.page-header')

  @if (! have_posts())
    <x-alert type="warning">
      {!! __('Sorry, no results were found.', 'sage') !!}
    </x-alert>

    {!! get_search_form(false) !!}
  @endif

  @while(have_posts()) @php(the_post())
    @includeFirst(['partials.content-' . get_post_type(), 'partials.content'])
  @endwhile

  {!! get_the_posts_navigation() !!}
@endsection

@section('sidebar')
  @include('sections.sidebar')
@endsection
