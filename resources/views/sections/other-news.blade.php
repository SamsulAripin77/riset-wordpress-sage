@php
$args = [
    'post_type' => 'post',
    'posts_per_page' => 4,
    'orderby' => 'date',
    'order' => 'DESC',
];
$latest_posts = new WP_Query($args);
@endphp

@props(['bg' =>  'bg-background'])

<section class="py-8 md:pt-16 md:pb-20 max-md:px-4 {{$bg}}"  data-aos="fade-up">
    <div class="container mx-auto">
        <h2 class="text-2xl font-bold text-primary mb-6 text-left">Berita Lainnya</h2>
        @if ($latest_posts->have_posts())
            <div class="swiper otherNewsSwiper">
                <div class="swiper-wrapper">
                    @while ($latest_posts->have_posts()) @php $latest_posts->the_post() @endphp
                        <div class="swiper-slide h-full">
                            <div class="bg-surface/10 rounded-lg shadow-md overflow-hidden group h-full">
                                <a href="{{ get_permalink() }}" class="block h-full">
                                    @if (has_post_thumbnail())
                                        <img src="{{ get_the_post_thumbnail_url(get_the_ID(), 'large') }}" alt="{{ the_title_attribute('echo=0') }}" class="w-full h-48 object-cover">
                                    @else
                                        <img src="https://placehold.co/400x300" alt="Blog post" class="w-full h-48 object-cover">
                                    @endif
                                    <div class="p-6">
                                        <p class="text-sm text-gray-500 mb-2">{{ get_the_date() }}</p>
                                        <h3 class="line-clamp-1 text-lg font-bold text-primary group-hover:text-accent transition-colors">{{ the_title() }}</h3>
                                        <div class="text-gray-600 mt-2 line-clamp-2">
                                            {!! get_the_content() !!}
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endwhile

                    <!-- See All Card -->
                    <div class="swiper-slide h-full self-center">
                        <div class="bg-surface/80 rounded-lg shadow-md overflow-hidden group h-full flex items-center justify-center">
                            <a href="/artikel" class="block h-full w-full text-center flex items-center justify-center">
                                <div class="p-6">
                                    <h3 class="text-lg font-bold text-accent/50 group-hover:text-accent transition-colors">Lihat Semua Artikel</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination !relative mt-8"></div>
            </div>
            @php wp_reset_postdata() @endphp
        @else
            <p class="text-center">No recent news found.</p>
        @endif
    </div>
</section>

@push('scripts')
<script>
  document.addEventListener('DOMContentLoaded', function () {
    var swiper = new Swiper('.otherNewsSwiper', {
      slidesPerView: 1.5,
      spaceBetween: 30,
      breakpoints: {
        768: {
          slidesPerView: 3.5,
          spaceBetween: 40
        }
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    });
  });
</script>
@endpush
