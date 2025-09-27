@php
$contact = get_field('page_home')['section_contact'];
@endphp
<section id="contact" class="bg-surface py-16 md:py-24 text-primary" data-aos="fade-up"
    x-data="{
        formData: {
            name: '',
            email: '',
            message: ''
        },
        errors: {},
        loading: false,
        validate() {
            this.errors = {};
            if (!this.formData.name) this.errors.name = 'Nama lengkap wajib diisi.';
            if (!this.formData.email) {
                this.errors.email = 'Email wajib diisi.';
            } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(this.formData.email)) {
                this.errors.email = 'Format email tidak valid.';
            }
            if (!this.formData.message) this.errors.message = 'Pesan wajib diisi.';
            return Object.keys(this.errors).length === 0;
        },
        async submitForm() {
            if (!this.validate()) return;
            this.loading = true;
            try {
                const response = await fetch('/wp-json/ambara/v1/contact', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json'
                    },
                    body: JSON.stringify(this.formData)
                });
                const result = await response.json();
                if (!response.ok) {
                    throw new Error(result.message || 'Terjadi kesalahan.');
                }
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil!',
                    text: result.message,
                    timer: 2000,
                    showConfirmButton: false
                });
                this.formData = { name: '', email: '', message: '' };
                this.errors = {};
            } catch (error) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: error.message
                });
            } finally {
                this.loading = false;
            }
        }
    }">
  <div class="container mx-auto px-4 text-center max-w-3xl">
    <h2 class="text-3xl md:text-4xl font-bold mb-4 text-primary">{{ $contact['title'] }}</h2>
    <p class="text-lg mb-8 text-secondary">{{ $contact['desc'] }}</p>
    <form @submit.prevent="submitForm" class="max-w-xl mx-auto space-y-4">
      <div>
        <input type="text" placeholder="Nama Lengkap" x-model="formData.name"
            class="w-full p-3 bg-background rounded-sm border-b border-secondary focus:outline-none focus:border-accent focus:ring-0">
        <template x-if="errors.name"><p x-text="errors.name" class="text-red-500 text-sm text-left mt-1"></p></template>
      </div>
      <div>
        <input type="email" placeholder="Email" x-model="formData.email"
            class="w-full p-3 bg-background rounded-sm border-b border-secondary focus:outline-none focus:border-accent focus:ring-0">
        <template x-if="errors.email"><p x-text="errors.email" class="text-red-500 text-sm text-left mt-1"></p></template>
      </div>
      <div>
        <textarea placeholder="Pesan Anda" rows="4" x-model="formData.message"
            class="w-full p-3 bg-background rounded-sm border-b border-secondary focus:outline-none focus:border-accent focus:ring-0"></textarea>
        <template x-if="errors.message"><p x-text="errors.message" class="text-red-500 text-sm text-left mt-1"></p></template>
      </div>
      <button type="submit" :disabled="loading"
        class="w-full bg-accent py-3 rounded-lg font-semibold text-surface hover:bg-primary transition-colors disabled:opacity-50">
        <span x-show="!loading">Kirim Pesan</span>
        <span x-show="loading">Mengirim...</span>
      </button>
    </form>
  </div>
</section>