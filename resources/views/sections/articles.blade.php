  <section id="blog" class="bg-background py-16 md:py-24 text-primary">
    <div class="container mx-auto px-4"
         x-data="blogController()"
         x-init="init()">

      {{-- Filters --}}
      <div data-aos="fade-up" class="flex flex-col md:flex-row lg:justify-end gap-4 mb-12">
        {{-- Category Filter --}}
        <div class="w-full md:w-1/2 lg:w-1/4">
          <select id="category-filter" x-model="selectedCategory" @change="applyFilter()" class="bg-transparent border-0 border-b border-accent text-primary text-sm focus:ring-0 focus:border-accent block w-full p-2.5">
            <option value="">All Categories</option>
            <template x-for="category in categories" :key="category.term_id">
              <option :value="category.slug" x-text="category.name"></option>
            </template>
          </select>
        </div>

        {{-- Tag Filter --}}
        <div class="w-full md:w-1/2 lg:w-1/4">
          <select id="tag-filter" x-model="selectedTag" @change="applyFilter()" class="bg-transparent border-0 border-b border-accent text-primary text-sm focus:ring-0 focus:border-accent block w-full p-2.5">
            <option value="">All Area</option>
            <template x-for="tag in tags" :key="tag.term_id">
              <option :value="tag.slug" x-text="tag.name"></option>
            </template>
          </select>
        </div>
      </div>

      {{-- Blog Grid --}}
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <template x-for="post in posts" :key="post.id">
          <div data-aos="fade-up" class="bg-surface rounded-lg shadow-md overflow-hidden hover:shadow-lg transition flex flex-col">
            <a :href="post.link">
              <div class="w-full h-48 bg-gray-300">
                <img class="w-full h-full object-cover" :src="post.image" :alt="post.title">
              </div>
            </a>
            <div class="p-6 flex flex-col flex-grow">
              <div class="flex justify-between items-center text-sm text-gray-500 mb-2">
                <div class="flex gap-2">
                    <template x-for="tag in post.tags.slice(0, 2)" :key="tag.slug">
                        <a :href="tag.link" class="hover:text-accent" x-text="tag.name"></a>
                    </template>
                </div>
                <span x-text="post.date"></span>
              </div>
              <h3 class="text-xl font-semibold mb-2 flex-grow">
                <a :href="post.link" class="hover:text-emerald-600" x-text="post.title"></a>
              </h3>
              <p class="text-gray-600 text-sm mb-4" x-text="post.desc.substring(0, 100) + '...'"></p>
              <a :href="post.link" class="text-accent font-semibold mt-auto hover:underline">Baca Selengkapnya</a>
            </div>
          </div>
        </template>
      </div>

      {{-- Loading State --}}
      <div x-show="isLoading" class="text-center py-12">
          <p>Loading posts...</p>
      </div>

      {{-- No Posts Found --}}
      <div x-show="!isLoading && posts.length === 0" class="text-center py-12">
          <p>No posts found matching your criteria.</p>
      </div>

      {{-- Load More Button --}}
      <div class="text-center mt-12" x-show="hasMore && !isLoading">
        <button @click="loadMore()" class="bg-accent text-white font-bold py-2 px-4 rounded hover:bg-emerald-700 transition">
          Load More
        </button>
      </div>

    </div>
  </section>

  <script>
    function blogController() {
      return {
        posts: [],
        categories: [],
        tags: [],
        selectedCategory: '',
        selectedTag: '',
        page: 1,
        hasMore: true,
        isLoading: true,

        init() {
          this.fetchFilters();
          this.fetchPosts();
        },

        fetchFilters(){
            fetch('/wp-json/ambara/v1/categories')
                .then(response => response.json())
                .then(data => {
                    this.categories = data;
                });

            fetch('/wp-json/ambara/v1/tags')
                .then(response => response.json())
                .then(data => {
                    this.tags = data;
                });
        },

        fetchPosts(loadMore = false) {
          this.isLoading = true;
          if (!loadMore) {
            this.page = 1;
            this.posts = [];
            this.hasMore = true;
          }

          let url = `/wp-json/ambara/v1/posts?page=${this.page}`;
          if (this.selectedCategory) {
            url += `&category=${this.selectedCategory}`;
          }
          if (this.selectedTag) {
            url += `&tag=${this.selectedTag}`;
          }

          fetch(url)
            .then(response => response.json())
            .then(data => {
              this.posts = loadMore ? [...this.posts, ...data.posts] : data.posts;
              this.hasMore = data.current_page < data.max_pages;
              this.isLoading = false;
            });
        },

        applyFilter() {
          this.fetchPosts();
        },

        loadMore() {
          this.page++;
          this.fetchPosts(true);
        }
      }
    }
  </script>