@php
$args = [
    'post_type' => 'post',
    'posts_per_page' => 3,
    'orderby' => 'date',
    'order' => 'DESC',
];
$latest_posts = new WP_Query($args);
@endphp

<section class="mt-24">
    <div class="container mx-auto">
        <h2 class="text-2xl font-bold text-primary mb-6 text-left">Berita Lainnya</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @if ($latest_posts->have_posts())
                @while ($latest_posts->have_posts()) @php $latest_posts->the_post() @endphp
                    <div class="bg-surface rounded-lg shadow-md overflow-hidden group">
                        <a href="{{ get_permalink() }}" class="block">
                            @if (has_post_thumbnail())
                                <img src="{{ get_the_post_thumbnail_url(get_the_ID(), 'large') }}" alt="{{ the_title_attribute('echo=0') }}" class="w-full h-48 object-cover">
                            @else
                                <img src="https://placehold.co/400x300" alt="Blog post" class="w-full h-48 object-cover">
                            @endif
                            <div class="p-6">
                                <p class="text-sm text-gray-500 mb-2">{{ get_the_date() }}</p>
                                <h3 class="line-clamp-1 text-lg font-bold text-primary group-hover:text-accent transition-colors">{{ the_title() }}</h3>
                                <div class="text-gray-600 mt-2 line-clamp-2">
                                    {{ get_the_excerpt() }}
                                </div>
                            </div>
                        </a>
                    </div>
                @endwhile
                @php wp_reset_postdata() @endphp
            @else
                <p class="text-center col-span-3">No recent news found.</p>
            @endif
        </div>
    </div>
</section>
