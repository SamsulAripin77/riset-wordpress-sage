 @props([
'title' => 'Penghargaan',
'subtitle' => 'Pengakuan dari Industri',
'desc' => 'Kami menggabungkan pengalaman dan keahlian dengan standar layanan yang tinggi, didukung oleh inovasi untuk memberikan solusi yang tepat bagi klien. Kami menggabungkan pengalaman dan keahlian dengan standar layanan yang tinggi, didukung oleh inovasi untuk memberikan solusi yang tepat bagi klien.',
'class' => 'bg-surface py-20 md:py-32'
 ])
 @php
    $args = [
    'post_type' => 'awards',
    'posts_per_page' => -1
    ];
    $awards_query = new WP_Query($args);
    $awards = $awards_query->posts;
    $awards_chunks = array_chunk($awards, 4);
    @endphp
 <!-- Section Penghargaan (Awards) - FIXED -->
    <section id="awards" class="{{$class}} max-md:overflow-hidden" data-aos="fade-up" data-aos-duration="1000">
        <div class="container mx-auto md:px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
                <!-- Kolom Kiri: Teks -->
                <div class="relative z-10 bg-surface h-full flex flex-col items-start justify-center md:p-8">
                    <h4 class="text-accent font-semibold uppercase tracking-wider">{{$title}}</h4>
                    <h2 class="text-3xl md:text-4xl font-bold text-primary mt-2">{{$subtitle}}</h2>
                    <p class="text-lg text-gray-700 leading-relaxed mt-4">{{$desc}}</p>
                </div>
                <!-- Kolom Kanan: Grid Gambar -->
                <div>
                    <div class="swiper-container awards-slider">
                        <div class="swiper-wrapper">
                            @foreach ($awards_chunks as $chunk)
                            <div class="swiper-slide">
                                <div class="grid grid-cols-2 gap-6">
                                    @foreach ($chunk as $award)
                                        @php
                                            $image = get_the_post_thumbnail_url($award->ID, 'full') ?: 'https://via.placeholder.com/400';
                                            $name = $award->post_title;
                                        @endphp
                                        <div class="text-center award-item bg-white p-4 rounded-lg shadow-sm">
                                            <div>
                                                <div class="max-w-32 max-h-32 h-full w-full mx-auto rounded-lg flex items-center justify-center p-2 mb-3">
                                                    <img src="{{ $image }}" alt="{{$name}}" class="w-full h-full object-contain">
                                                </div>
                                                <p class="text-xs font-semibold">{{$name}}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination mt-4 text-center"></div>
                </div>
            </div>
        </div>
    </section>

   @push('scripts')
        <script>
        document.addEventListener('DOMContentLoaded', function () {
            var swiper = new Swiper('.awards-slider', {
                loop: true,
                spaceBetween: 30,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
            });
        });
    </script>
   @endpush

<style>
    .swiper-pagination-bullet {
        background-color: #d1d5db; /* gray-300 */
    }
    .swiper-pagination-bullet-active {
        background-color: #bf9b30; /* accent color */
    }
</style>