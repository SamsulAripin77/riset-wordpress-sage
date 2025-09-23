 @props([
'title' => 'Penghargaan',
'subtitle' => 'Pengakuan dari Industri',
'desc' => 'Kami menggabungkan pengalaman dan keahlian dengan standar layanan yang tinggi, didukung oleh inovasi untuk memberikan solusi yang tepat bagi klien. Kami menggabungkan pengalaman dan keahlian dengan standar layanan yang tinggi, didukung oleh inovasi untuk memberikan solusi yang tepat bagi klien.',
'class' => 'bg-surface py-20 md:py-32'
 ])
 @php
    $args = [
    'post_type' => 'awards',
    'posts_per_page' => 4
    ];
    $awards = new WP_Query($args);
    @endphp
 <!-- Section Penghargaan (Awards) - FIXED -->
    <section id="awards" class="{{$class}}" data-aos="fade-up" data-aos-duration="1000">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
                <!-- Kolom Kiri: Teks -->
                <div>
                    <h4 class="text-accent font-semibold uppercase tracking-wider">{{$title}}</h4>
                    <h2 class="text-3xl md:text-4xl font-bold text-primary mt-2">{{$subtitle}}</h2>
                    <p class="text-lg text-gray-700 leading-relaxed mt-4">{{$desc}}</p>
                </div>
                <!-- Kolom Kanan: Grid Gambar -->
                <div>
                    <div id="awards-grid" class="grid grid-cols-2 gap-6">
                        @if ($awards->have_posts())
                        @while ($awards->have_posts()) @php $awards->the_post() @endphp
                         @php
                            $image = get_the_post_thumbnail_url(get_the_ID(), 'full') ?: 'https://via.placeholder.com/400';
                            $name = get_the_title();
                            @endphp
                        <div class="text-center award-item bg-white p-4 rounded-lg shadow-sm">
                            <div>
                                <div class="max-w-32 max-h-32 h-full w-full mx-auto rounded-lg flex items-center justify-center p-2 mb-3">
                                <img src="{{ $image }}" alt="{{$name}}" class="w-full h-full object-contain">
                            </div>
                            <p class="text-xs font-semibold">{{$name}}</p>
                            </div>
                        </div>
                        @endwhile
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>