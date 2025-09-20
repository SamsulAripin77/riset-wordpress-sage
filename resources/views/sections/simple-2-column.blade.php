@props(['title' => 'Keahlian Kami','subtitle' => 'Solusi Hukum Inovatif untuk Tantangan
                    Kompleks', 'desc' => 'Di Ambara Advocate, kami menggabungkan keahlian mendalam dengan
                    pendekatan strategis untuk memberikan solusi hukum yang efektif. Tim kami memiliki rekam jejak yang
                    terbukti dalam menangani berbagai kasus rumit di berbagai sektor industri, memastikan klien kami
                    selalu selangkah lebih maju.'])

<section class="bg-surface py-8 md:pt-24 md:pb-16 text-primary" data-aos="fade-up" data-aos-duration="1000">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-16 items-center">
            {{-- Kolom Kiri --}}
            <div>
                <h4 class="text-accent font-semibold uppercase tracking-wider">{{ $title }}</h4>
                <h2 class="text-3xl md:text-4xl font-bold text-primary mt-2">{{$subtitle}}</h2>
            </div>
            {{-- Kolom Kanan --}}
            <div>
                <p class="text-primary leading-relaxed">{{$desc}}</p>
            </div>
        </div>
    </div>
</section>