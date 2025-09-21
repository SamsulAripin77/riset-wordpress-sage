@extends('layouts.app')

@section('content')

    @php
        $page_keahlian_kami = get_field('page_keahlian_kami', '');
    @endphp



    @php
        $section_banner_image = $page_keahlian_kami['section_banner_image'] ?? [];
    @endphp
    @include('sections.banner-image', [
        'title' => $section_banner_image['title'],
        'tagline' => $section_banner_image['tagline'],
        'desc' => $section_banner_image['desc'],
        'image' => $section_banner_image['image'],
        'class' => $section_banner_image['class'],
    ])


    @php
        $section_2_column = $page_keahlian_kami['section_simple_2_column'] ?? [];
    @endphp
    @include('sections.simple-2-column', [
        'title' => $section_2_column['title'] ?? '',
        'subtitle' => $section_2_column['tagline'],
        'desc' => $section_2_column['desc'],
        'class' => $section_2_column['class'],
    ])


    @php
        $expertice_title = $page_keahlian_kami['section_keahlian_kami'] ?? [];
    @endphp

    @include('sections.keahlian-kami', [
        'title' => $expertice_title['title'] ?? '',
        'class' => $expertice_title['class'],
    ])

    @php
        $section_berita_lainnya = $page_keahlian_kami['section_berita_lainnya'] ?? [];
    @endphp


    @include('sections.other-news',[
        'title' => $section_berita_lainnya['title'],
        'class' => $section_berita_lainnya['class'],
    ])
@endsection
