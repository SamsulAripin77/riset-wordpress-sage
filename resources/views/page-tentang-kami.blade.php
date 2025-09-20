@extends('layouts.app')

@section('content')
    @include('sections.banner-image',[
        'title' => 'Tentang Kami',
    ])

    @include('sections.simple-2-column')
    @include('sections.simple-2-column-image-right')
    @include('sections.simple-2-column-grid-image')
    @include('sections.simple-2-column-image-left')



    @include('partials.components.other-news')
@endsection
