@extends('layouts.app')

@section('content')
@php
$page_pengacara_kami = get_field('page_pengacara_kami', '');
@endphp



@php
$section_banner_image = $page_pengacara_kami['section_banner_image'] ?? [];
@endphp
@include('sections.banner-image', [
'title' => $section_banner_image['title'],
'tagline' => $section_banner_image['tagline'],
'desc' => $section_banner_image['desc'],
'image' => $section_banner_image['image'],
'class' => $section_banner_image['class'],
]);



@php
$section_pengacara_kami = $page_pengacara_kami['section_pengacar_kami'] ?? [];
@endphp

<section class="container mx-auto {{$section_pengacara_kami['class']}}">
  <div x-data="attorneyFilter()" x-init="init()">
    <!-- Loading Spinner -->
    <div x-show="isLoading" class="text-center">
      <p>Loading...</p>
    </div>

    <div x-show="!isLoading">
      <!-- Filter Dropdown -->
      <div class="flex justify-end mb-4">
        <div class="w-full md:w-1/2 lg:w-1/4">
          <select id="category-filter" x-model="selectedCategory"
            class="bg-transparent border-0 border-b border-accent text-primary text-sm focus:ring-0 focus:border-accent block w-full p-2.5">
            <option value="">{{$section_pengacara_kami['select_option']}}</option>
            <template x-for="category in categories" :key="category.term_id">
              <option :value="category.slug" x-text="category.name"></option>
            </template>
          </select>
        </div>
      </div>

      <!-- Attorney Grid -->
      <div :class="{ 'hidden': selectedCategory !== '' }">
        <template x-for="(categoryData, slug) in allAttorneys" :key="slug">
          <section class="mt-16">
            <h2 class="text-2xl font-bold text-primary mb-6" x-text="categoryData.name"></h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
              <template x-for="attorney in categoryData.attorneys.slice(0, visibleCounts[slug] || 3)"
                :key="attorney.id">
                <div data-aos="fade-up"
                  class="bg-surface rounded-lg shadow-md overflow-hidden group transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                  <a :href="attorney.link" class="block">
                    <div class="w-full aspect-[4/5] relative">
                      <img class="h-full w-full object-cover" :src="attorney.image" :alt="attorney.title">
                      <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                      <div class="absolute bottom-0 left-0 p-4">
                        <p class="text-sm text-surface/80 font-semibold" x-text="categoryData.name"></p>
                        <h3 class="text-lg font-bold text-surface" x-text="attorney.title"></h3>
                      </div>
                    </div>
                  </a>
                  <div class="p-4 bg-surface">
                    <a :href="attorney.link" class="font-semibold text-accent hover:underline">Baca Biodata &rarr;</a>
                  </div>
                </div>

              </template>
            </div>
            <div class="text-center mt-10" x-show="(visibleCounts[slug] || 3) < categoryData.attorneys.length">
              <button @click="loadMore(slug)"
                class="bg-accent text-surface py-2 px-6 rounded-full hover:bg-primary transition-colors">
                {{$section_pengacara_kami['load_more']}}
              </button>
            </div>
          </section>
        </template>
      </div>

      <div :class="{ 'hidden': selectedCategory === '' }">
        <template x-if="selectedCategory && allAttorneys[selectedCategory]">
          <section>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
              <template x-for="attorney in allAttorneys[selectedCategory].attorneys" :key="attorney.id">
                <div data-aos="fade-up"
                  class="bg-surface rounded-lg shadow-md overflow-hidden group transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                  <a :href="attorney.link" class="block">
                    <div class="w-full aspect-[4/5] relative">
                      <img class="h-full w-full object-cover" :src="attorney.image" :alt="attorney.title">
                      <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                      <div class="absolute bottom-0 left-0 p-4">
                        <p class="text-sm text-surface/80 font-semibold" x-text="allAttorneys[selectedCategory].name">
                        </p>
                        <h3 class="text-lg font-bold text-surface" x-text="attorney.title"></h3>
                      </div>
                    </div>
                  </a>
                  <div class="p-4 bg-surface">
                    <a :href="attorney.link" class="font-semibold text-accent hover:underline">Baca Biodata &rarr;</a>
                  </div>
                </div>
              </template>
            </div>
          </section>
        </template>
      </div>
    </div>
  </div>
</section>
  @php
  $section_berita_lainnya = $page_pengacara_kami['section_berita_lainnya'] ?? [];
  @endphp
  @include('sections.other-news',[
        'title' => $section_berita_lainnya['title'],
        'class' => $section_berita_lainnya['class'],
    ])
<script>
  function attorneyFilter() {
    return {
      isLoading: true,
      selectedCategory: '',
      categories: [],
      allAttorneys: {},
      visibleCounts: {},
      init() {
        fetch('/wp-json/ambara/v1/attorneys')
          .then(res => res.json())
          .then(data => {
            this.categories = data.categories;
            this.allAttorneys = data.attorneys;
            this.isLoading = false;
          })
          .catch(error => {
            console.error('Error fetching attorneys:', error);
            this.isLoading = false;
          });
      },
      loadMore(categorySlug) {
        if (!this.visibleCounts[categorySlug]) {
          this.visibleCounts[categorySlug] = 3;
        }
        this.visibleCounts[categorySlug] += 3;
      },
    }
  }
</script>
@endsection