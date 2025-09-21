 @php
  $args = [
      'post_type' => 'services',
      'posts_per_page' => -1,
      'post_status' => 'publish',
  ];
  $expertise_list = get_posts($args);
@endphp
@props(['title' => 'Area Praktik Kami', 'class' => 'bg-surface py-8 md:pt-24 md:pb-16'])

 <section class="{{$class}}">
        <div class="container mx-auto px-4">
            <div class="max-w-5xl mx-auto">
                <h2 data-aos="fade-up" class="text-3xl md:text-4xl font-bold text-center mb-12 text-primary">
                    Area Praktik Kami
                </h2>
    
                <div x-data="{ selected: 1 }">                     
                    @foreach ($expertise_list as $item)
                        <div class="border-b border-secondary" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}">
                            <h2 id="accordion-heading-{{ $loop->iteration }}">
                                <button type="button" @click="selected = (selected === {{ $loop->iteration }} ? null : {{ $loop->iteration }})" class="rounded-t-md flex items-center justify-between w-full p-5 font-semibold text-left text-primary  transition duration-200 hover:bg-accent/10 hover:text-accent"
                                    :class="{ 'bg-surface dark:bg-secondary/10': selected === {{ $loop->iteration }} }">
                                    <span class="text-lg">{!! $item->post_title !!}</span>
                                    <svg class="w-3 h-3 shrink-0 transition-transform duration-200" :class="{ 'rotate-180': selected === {{ $loop->iteration }} }" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                    </svg>
                                </button>
                            </h2>
                            <div x-show="selected === {{ $loop->iteration }}" x-collapse id="accordion-body-{{ $loop->iteration }}">
                                <div class="p-5" :class="{ 'bg-surface dark:bg-secondary/': selected === {{ $loop->iteration }} }">
                                    <p class="mb-2 text-primary leading-relaxed">
                                        {{ wp_strip_all_tags($item->post_content) }}
                                    </p>
                                </div>
                            </div>
                        </div>             
                    @endforeach
                </div>
    
            </div>
        </div>
    </section>