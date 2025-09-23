@extends('layouts.app')

@section('content')
    @php
        $page_tentang_kami = get_field('page_tentang_kami', '');
    @endphp
    @php
        $section_banner_image = $page_tentang_kami['section_banner_image'] ?? [];

    @endphp
    @include('sections.banner-image', [
        'title' => $section_banner_image['title'] ?? '',
        'tagline' => $section_banner_image['tagline'] ?? '',
        'desc' => $section_banner_image['desc'] ?? '',
        'image' => $section_banner_image['image'] ?? asset('resources/images/court2.jpg'),
        'class' => $section_banner_image['class'] ?? 'min-h-[80vh] md:min-h-[50vh] xl:min-h-[80vh]',
    ])



    @php
        $section_2_column = $page_tentang_kami['section_simple_2_column'] ?? [];
    @endphp
    @include('sections.simple-2-column', [
        'title' => $section_2_column['title'] ?? '',
        'subtitle' => $section_2_column['tagline'] ?? '',
        'desc' => $section_2_column['desc'] ?? '',
        'class' => $section_2_column['class'] ?? 'bg-backgroud py-8 md:pb-16 md:pt-16 max-md:px-4',
    ])



    @php
        $section_simple_2_column_image_left = $page_tentang_kami['section_simple_2_column_image_left'] ?? [];
    @endphp
    @include('sections.simple-2-column-image-left', [
        'image' => $section_simple_2_column_image_left['image'] ?? '',
        'title' => $section_simple_2_column_image_left['title'] ?? '',
        'subtitle' => $section_simple_2_column_image_left['tagline'] ?? '',
        'desc' => $section_simple_2_column_image_left['desc'] ?? '',
        'class' => $section_simple_2_column_image_left['class'] ?? '',
    ])



   @php
        $simple_2_column_grid_image = $page_tentang_kami['simple_2_column_grid_image'] ?? [];
    @endphp
    @include('sections.simple-2-column-grid-image', [
        'title' => $simple_2_column_grid_image['title'] ?? '',
        'subtitle' => $simple_2_column_grid_image['tagline'] ?? '',
        'desc' => $simple_2_column_grid_image['desc'] ?? '',
        'class' => $section_2_column['class'] ?? 'bg-backgroud py-8 md:pb-16 md:pt-16 max-md:px-4',
    ])
    
    
    @php
        $section_simple_2_column_image_right = $page_tentang_kami['section_simple_2_column_image_right'] ?? [];
    @endphp
    @include('sections.simple-2-column-image-right', [
        'image' => $section_simple_2_column_image_right['image'] ?? '',
        'title' => $section_simple_2_column_image_right['title'] ?? '',
        'subtitle' => $section_simple_2_column_image_right['tagline'] ?? '',
        'desc' => $section_simple_2_column_image_right['desc'] ?? '',
        'class' => $section_simple_2_column_image_right['class'] ?? '',
    ])



    @php
        $section_berita_lainnya = $page_tentang_kami['section_berita_lainnya'] ?? [];
    @endphp


    @include('sections.other-news',[
        'title' => $section_berita_lainnya['title'] ?? '',
        'class' => $section_berita_lainnya['class'] ?? '',
    ])
@endsection
