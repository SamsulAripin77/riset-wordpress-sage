<footer class="relative bg-[#2B2B2B] text-white pt-16 pb-10 overflow-hidden">
  <div class="max-w-7xl mx-auto px-6 lg:px-8">
    <!-- Grid Utama: 2 kolom -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
      <!-- Kolom 1: Logo + Deskripsi -->
      <div>
        <div class="flex items-center space-x-3 mb-4">
          <img src="{{ get_theme_file_uri('public/images/logoname.svg') }}" alt="Rasa Nusa Logo" class="h-8 w-auto">
        </div>
        <p class="text-gray-300 text-sm leading-relaxed max-w-md">
          Di setiap hidangan, ada cerita dari tanah kelahiran.<br>
          Dari rempah yang harum hingga sambal yang membangkitkan selera,<br>
          kami ingin membawa Anda berkeliling nusantara tanpa harus meninggalkan meja makan.<br>
          Mari, duduk bersama dan rasakan hangatnya Indonesia di setiap suapan.
        </p>
      </div>

      <!-- Kolom 2: Menu Navigasi -->
      <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
        <!-- Menu -->
        <div>
          <h3 class="text-lg font-semibold mb-4">Menu</h3>
          <ul class="space-y-2 text-gray-300 text-sm">
            <li><a href="#">Beranda</a></li>
            <li><a href="#">Menu & Paket</a></li>
            <li><a href="#">Promo & Event</a></li>
            <li><a href="#" class="underline">Pesan Online</a></li>
          </ul>
        </div>

        <!-- Informasi -->
        <div>
          <h3 class="text-lg font-semibold mb-4">Informasi</h3>
          <ul class="space-y-2 text-gray-300 text-sm">
            <li><a href="#">Tentang Kami</a></li>
            <li><a href="#">Cerita di Balik RasaNusa</a></li>
            <li><a href="#">API Docs</a></li>
            <li><a href="#">Community Forum</a></li>
            <li><a href="#">Webinars</a></li>
            <li><a href="#">Status Page</a></li>
          </ul>
        </div>

        <!-- Bantuan -->
        <div>
          <h3 class="text-lg font-semibold mb-4">Bantuan</h3>
          <ul class="space-y-2 text-gray-300 text-sm">
            <li><a href="#">Hubungi Kami</a></li>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Kebijakan Privasi</a></li>
            <li><a href="#">Syarat dan Ketentuan</a></li>
          </ul>
        </div>

        <!-- Jelajahi -->
        <div>
          <h3 class="text-lg font-semibold mb-4">Jelajahi</h3>
          <ul class="space-y-2 text-gray-300 text-sm">
            <li><a href="#">Blog RasaNusa</a></li>
            <li><a href="#">Resep Nusantara</a></li>
            <li><a href="#">Galeri Foto</a></li>
            <li><a href="#">Cerita Pelanggan</a></li>
            <li><a href="#">Event Mendatang</a></li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Sosial Media -->
    <div class="flex items-center space-x-4 mt-10">
      <a href="#"><img src="{{ get_theme_file_uri('public/images/tktk.svg') }}" alt="TikTok" class="h-5 w-5"></a>
      <a href="#"><img src="{{ get_theme_file_uri('public/images/wa.svg') }}" alt="WhatsApp" class="h-5 w-5"></a>
      <a href="#"><img src="{{ get_theme_file_uri('public/images/fb.svg') }}" alt="Facebook" class="h-5 w-5"></a>
      <a href="#"><img src="{{ get_theme_file_uri('public/images/ig.svg') }}" alt="Instagram" class="h-5 w-5"></a>
    </div>

    <!-- Bagian bawah sejajar -->
    <div class="grid grid-cols-1 md:grid-cols-3 items-center mt-10 text-sm text-white gap-6">
      <!-- Kosong kiri -->
      <div></div>

      <!-- Alamat tengah -->
      <div class="text-center">
        Jl. In aja dulu No. 45<br>Jakarta, Indonesia
      </div>

      <!-- Kontak kanan -->
      <div class="flex flex-col gap-2 text-center md:text-right">
        <span>info@rasanusa.com</span>
        <div class="flex items-center justify-center md:justify-end gap-2">
          <img src="{{ get_theme_file_uri('public/images/telp.svg') }}" alt="Telepon" class="w-4 h-4">
          <span>0233-3332077</span>
        </div>
        <div class="flex items-center justify-center md:justify-end gap-2">
          <img src="{{ get_theme_file_uri('public/images/waa.svg') }}" alt="WhatsApp" class="w-4 h-4">
          <span>+62 123-4455-6677</span>
        </div>
      </div>
    </div>
  </div>

  <!-- Overlay ornamen -->
  <img src="{{ get_theme_file_uri('public/images/footer.png') }}"
       alt="Overlay Ornamen"
       class="absolute bottom-0 left-0 w-40 opacity-80 brightness-50 pointer-events-none select-none z-0">
</footer>
