@props(['image' => asset('resources/images/team1.jpg'), 'title' => 'FIRMA KAMI', 'subtitle' => 'Salah satu firma hukum independen terkemuka di Indonesia', 'desc' => 'Kami menggabungkan pengalaman dan keahlian dengan standar layanan yang tinggi, didukung oleh inovasi untuk memberikan solusi yang tepat bagi klien. Kami menggabungkan pengalaman dan keahlian dengan standar layanan yang tinggi, didukung oleh inovasi untuk memberikan solusi yang tepat bagi klien. ' ])

<section id="about" class="bg-background py-8 md:pt-16 md:pb-24" data-aos="fade-left" data-aos-duration="1000">
    <div class="container mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="lg:order-2">
                <img src="{{$image}}" alt="Tentang Kami" class="w-full h-auto rounded-xl shadow-2xl">
            </div>
            <div class="lg:order-1">
                <h4 class="text-sm font-semibold uppercase text-accent mb-2 tracking-widest">{{$title}}</h4>
                <h2 class="text-3xl md:text-4xl font-bold text-primary mb-6">{{$subtitle}}</h2>
                <p class="text-lg text-secondary leading-relaxed mb-4">{{$desc}}</h2>
            </div>
        </div>
    </div>
</section>