@extends('layouts.app')

@section('content')
    @include('sections.banner-image',[
        'title' => 'Tentang Kami',
    ])

    @include('partials.components.other-news')
@endsection
