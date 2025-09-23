@props(['title' => 'Tim Profesional Kami', 'class' => 'bg-background py-16 md:py-24 text-primary'])

<section id="team" class="{{$class}}" data-aos="fade-up">
  <div class="container mx-auto px-4">
    <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 text-primary">{{ $title }}</h2>
    @php
    $args = [
    'post_type' => 'attorneys',
    'posts_per_page' => 3
    ];
    $attorneys = new WP_Query($args);
    @endphp

    @if ($attorneys->have_posts())
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      @while ($attorneys->have_posts()) @php $attorneys->the_post() @endphp
      @php
      $image = get_the_post_thumbnail_url(get_the_ID(), 'full') ?: 'https://via.placeholder.com/400';
      $name = get_the_title();
      $terms = get_the_terms(get_the_ID(), 'attorney_category');
      $position = !empty($terms) ? $terms[0]->name : '';
      $link = get_permalink(get_the_ID())
      @endphp
      <div data-aos="fade-up">
        <x-attorney-card :image="$image" :name="$name" :position="$position" />
      </div>
      @endwhile
    </div>
    @php wp_reset_postdata() @endphp
    @endif
  </div>
</section>