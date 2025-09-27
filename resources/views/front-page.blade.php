{{--
Template Name: Home
--}}

@extends('layouts.app')
@section('content')
@php
$page_home = get_field('page_home');
@endphp

<!-- AOS: fade-in -->
@include('sections.hero', [
    'desktop_image' => $page_home['sections_hero']['desktop_image'],
    'mobile_image' => $page_home['sections_hero']['mobile_image'],
    'text' => $page_home['sections_hero']['text'],
    'button_text' => $page_home['sections_hero']['hubungi_kami']['title'],
    'button_link' => $page_home['sections_hero']['hubungi_kami']['url'],
])

<!-- AOS: fade-up -->
@include('sections.founder', [
    'title' => $page_home['sections_founder']['title'],
    'subtitle' => $page_home['sections_founder']['subtitle'],
    'description' => $page_home['sections_founder']['description'],
    'image' => $page_home['sections_founder']['image'],
    'class' => $page_home['sections_founder']['class'],
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
@include('sections.services', ['title' => $page_home['sections_services']['title'], 'services' => $services, 'class' => $page_home['sections_services']['class']])


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

@include('sections.history', ['histories' => $histories, 'class' => $page_home['sections_history']['class'], 'title' => $page_home['sections_history']['title']])

<!-- AOS: fade-up -->
@include('sections.team',[
    'title' => $page_home['sections_team']['title'],
    'class' => $page_home['sections_team']['class'],
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
@include('sections.awards', ['awards' => $awards, 'class' => $page_home['sections_awards']['class'], 'title' => $page_home['sections_awards']['title']])

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
@include('sections.blog', ['blogs' => $blogs, 'title' => $page_home['sections_blog']['title'], 'class' => $page_home['sections_blog']['class']])

@php
$contact = get_field('page_home')['section_contact'];
@endphp
@include('sections.contact', ['contact' => $contact])

@endsection