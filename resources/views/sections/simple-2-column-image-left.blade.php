@props(['image' => asset('resources/images/team1.jpg'), 'title' => 'FIRMA KAMI', 'subtitle' => 'Salah satu firma hukum independen terkemuka di Indonesia', 'desc' => 'Kami menggabungkan pengalaman dan keahlian dengan standar layanan yang tinggi, didukung oleh inovasi untuk memberikan solusi yang tepat bagi klien. Kami menggabungkan pengalaman dan keahlian dengan standar layanan yang tinggi, didukung oleh inovasi untuk memberikan solusi yang tepat bagi klien. ' ])

<section id="founder" class="bg-white py-8 md:py-32 max-md:px-4" data-aos="fade-right" data-aos-duration="1000">
    <div class="container mx-auto flex flex-col md:flex-row items-center gap-12">
        <div class="md:w-1/2">
            <img src="{{$image}}" alt="Foto Founder" class="w-full h-auto rounded-xl shadow-lg">
        </div>
        <div class="md:w-1/2">
             <h4 class="text-sm font-semibold uppercase text-accent mb-2 tracking-widest">{{$title}}</h4>
            <h2 class="text-3xl md:text-4xl font-bold text-primary mb-6">{{$subtitle}}</h2>
            <p class="text-lg text-secondary leading-relaxed mb-4">{{$desc}}</h2>
        </div>
    </div>
</section>