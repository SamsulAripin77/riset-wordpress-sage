<!-- Section Subscribe -->
@php
    $title = $args['title'] ?? 'Article';
    $tagline = $args['tagline'] ?? 'Dapatkan Informasi dan Wawasan Terbaru';
    $desc = $args['desc'] ?? 'Artikel kami untuk mendapatkan analisis hukum
            terkini, wawasan dari para ahli, dan undangan acara eksklusif.';

@endphp
<section id="subscribe" class="relative py-20 md:py-32">
    <div class="absolute inset-0 bg-cover bg-center"
        style="background-image: url(@asset('resources/images/court2.jpg'));"></div>
    <div class="absolute inset-0 bg-black bg-opacity-80"></div>
    <div
        class="relative z-10 container mx-auto px-6 md:px-12 flex flex-col items-center justify-center text-center">
        <h1 class="caption-text mb-2 text-surface text-base">{{$title}}</h1>
        <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-4 text-surface">{{$tagline}}</h2>
        <p class="text-lg max-w-2xl mb-8 text-surface">{{$desc}}</p>
    </div>
</section>