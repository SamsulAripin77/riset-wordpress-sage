<section id="contact" class="bg-surface py-16 md:py-24 text-primary" data-aos="fade-up">
  <div class="container mx-auto px-4 text-center max-w-3xl">
    <h2 class="text-3xl md:text-4xl font-bold mb-4 text-primary">{{ $title }}</h2>
    <p class="text-lg mb-8 text-secondary">{{ $subtitle }}</p>
    <form class="max-w-xl mx-auto space-y-4" action="{{ $form['action'] }}" method="{{ $form['method'] }}">
      @foreach ($form['fields'] as $field)
        @if ($field['type'] === 'textarea')
          <textarea name="{{ $field['name'] }}" placeholder="{{ $field['placeholder'] }}" rows="{{ $field['rows'] }}"
            class="w-full p-3 bg-background rounded-sm border-b border-secondary focus:outline-none focus:border-accent focus:ring-0"></textarea>
        @else
          <input type="{{ $field['type'] }}" name="{{ $field['name'] }}" placeholder="{{ $field['placeholder'] }}"
            class="w-full p-3 bg-background rounded-sm border-b border-secondary focus:outline-none focus:border-accent focus:ring-0">
        @endif
      @endforeach
      <button type="submit"
        class="w-full bg-accent py-3 rounded-lg font-semibold text-surface hover:bg-primary transition-colors">{{ $form['submit_text'] }}</button>
    </form>
  </div>
</section>