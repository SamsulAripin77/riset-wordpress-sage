@extends('layouts.app')

@section('content')
  <section class="py-20 md:py-32 bg-surface">
    <div class="container mx-auto text-center">
        <div class="max-w-md mx-auto">
            <h1 class="text-8xl font-bold text-accent">404</h1>
            <h2 class="mt-2 text-3xl font-bold text-primary tracking-tight sm:text-4xl">Halaman Tidak Ditemukan</h2>
            <p class="mt-4 text-base text-gray-600">Maaf, halaman yang Anda cari tidak ada atau telah dipindahkan.</p>
            <div class="mt-10">
                <a href="{{ home_url('/') }}" class="inline-block bg-primary text-white font-semibold px-6 py-3 rounded-md hover:bg-secondary transition-colors duration-300">
                    Kembali ke Beranda
                </a>
            </div>
        </div>
    </div>
</section>
@endsection