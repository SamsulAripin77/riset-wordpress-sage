{{--
Template Name: Home
--}}

@extends('layouts.app')
@section('content')
<!-- AOS: fade-in -->
@include('sections.hero', [
    'desktop_image' => asset('resources/images/ambara.png'),
    'mobile_image' => asset('resources/images/ambara-mobile.png'),
    'text' => 'Kami hadir untuk menyederhanakan masalah hukum Anda dengan pendekatan yang cermat dan profesional.',
    'button_text' => 'Hubungi Kami',
    'button_link' => '#services',
])

<!-- AOS: fade-up -->
@include('sections.founder', [
    'title' => 'Founder ambaraadvocate',
    'subtitle' => 'Lebih Dari Sekadar Pengacara',
    'description' => 'Ambara Advocate adalah firma hukum yang berdedikasi untuk memberikan layanan hukum komprehensif, didukung oleh tim ahli yang berkomitmen pada integritas dan keunggulan. Kami percaya bahwa setiap kasus adalah unik dan layak mendapatkan pendekatan personal yang terperinci. Dengan pemahaman mendalam tentang lanskap hukum yang terus berubah, kami siap menjadi mitra terpercaya Anda.',
    'image' => asset('resources/images/ceo.jpg'),
    'class' => 'bg-surface py-16 md:py-24 pt-20 text-primary'
])

<!-- Layanan Kami -->
@php
$args = [
    'post_type' => 'services',
    'posts_per_page' => -1,
    'orderby' => 'menu_order',
    'order' => 'ASC'
];
$services_query = new WP_Query($args);
$services = [];
if ($services_query->have_posts()) {
    while ($services_query->have_posts()) {
        $services_query->the_post();
        $services[] = [
            'title' => html_entity_decode(get_the_title()),
            'desc' => wp_strip_all_tags(get_the_content()),
        ];
    }
}
wp_reset_postdata();
@endphp
@include('sections.services', ['title' => 'Layanan Kami', 'services' => $services, 'class' => 'bg-background py-16 md:py-24 text-primary'])


<!-- Sejarah Perusahaan -->
@php
$args = [
    'post_type' => 'histories',
    'posts_per_page' => -1,
    'orderby' => 'menu_order',
    'order' => 'ASC'
];
$histories_query = new WP_Query($args);
$histories = [];
if ($histories_query->have_posts()) {
    while ($histories_query->have_posts()) {
        $histories_query->the_post();
        $histories[] = [
            'tahun' => get_field('history_year'),
            'title' => html_entity_decode(get_the_title()),
            'desc' => wp_strip_all_tags(get_the_content()),
        ];
    }
}
wp_reset_postdata();
@endphp

@include('sections.history', ['histories' => $histories, 'class' => 'bg-surface py-16 md:py-24 text-primary', 'title' => 'Jejak Langkah Ambara Advocate'])

<!-- AOS: fade-up -->
@include('sections.team',[
    'title' => 'Tim Profesional Kami',
    'class' => 'bg-background py-16 md:py-24 text-primary'
])

<!-- Section Pengakuan, Penghargaan & Afiliasi -->
@php
$args = [
    'post_type' => 'partners',
    'posts_per_page' => -1,
    'orderby' => 'menu_order',
    'order' => 'ASC'
];
$awards_query = new WP_Query($args);
$awards = [];
if ($awards_query->have_posts()) {
    while ($awards_query->have_posts()) {
        $awards_query->the_post();
        $awards[] = [
            'image' => get_the_post_thumbnail_url(get_the_ID(), 'full'),
            'link' => get_field('link'),
            'name' => html_entity_decode(get_the_title()),
        ];
    }
}
wp_reset_postdata();
@endphp
@include('sections.awards', ['awards' => $awards, 'class' => 'bg-background py-16 md:py-24 text-primary', 'title' => 'Pengakuan, Penghargaan & Afiliasi'])

<!-- Publikasi & Blog -->
@php
$args = [
    'post_type' => 'post',
    'posts_per_page' => 3,
    'orderby' => 'date',
    'order' => 'DESC'
];
$blogs_query = new WP_Query($args);
$blogs = [];
if ($blogs_query->have_posts()) {
    while ($blogs_query->have_posts()) {
        $blogs_query->the_post();
        $blogs[] = [
            'image' => get_the_post_thumbnail_url(get_the_ID(), 'large'),
            'title' => html_entity_decode(get_the_title()),
            'desc' => wp_strip_all_tags(get_the_content()),
            'link' => get_permalink(),
        ];
    }
}
wp_reset_postdata();
@endphp
@include('sections.blog', ['blogs' => $blogs, 'title' => 'Artikel Kami', 'class' => 'bg-background py-16 md:py-24 text-primary'])


@include('sections.contact')

@endsection