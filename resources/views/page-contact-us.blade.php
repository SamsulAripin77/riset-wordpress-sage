@extends('layouts.app')

@section('content')
    {{-- 1. Page Header --}}
    {{-- @include('partials.page-header') --}}

    {{-- Ambil data dari grup field ACF 'page_contacts' --}}
    @php
      $contact_group = get_field('page_contacts');
      $address = $contact_group['alamat'] ?? 'Alamat tidak tersedia.';
      $phone = $contact_group['telepon'] ?? '';
      $email = $contact_group['email'] ?? '';
      $fax = $contact_group['fax'] ?? '';
      // Gunakan map dari ACF jika ada, jika tidak, gunakan fallback dari permintaan Anda
      $map_embed = $contact_group['google_map_embed'] ?? '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31721.333836466412!2d106.8946516966365!3d-6.372464293617735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69930193bf1059%3A0x45c7275d0352269d!2sKantor%20Pengacara%20AMBARA%20Advocate!5e0!3m2!1sen!2sid!4v1758973515363!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
    @endphp

    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-16 lg:py-24">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-12 lg:gap-16">
        
        {{-- Kolom Kiri: Google Map --}}
        <div class="map-container overflow-hidden rounded-lg shadow-lg">
          {!! $map_embed !!}
        </div>

        {{-- Kolom Kanan: Detail Kontak --}}
        <div class="flex flex-col justify-center">
          <h2 class="text-3xl lg:text-4xl font-bold text-primary mb-6">AMBARA ADVOCATE</h2>
          
          <div class="space-y-4 text-secondary">
            {{-- Alamat --}}
            <div>
              <h3 class="text-lg font-bold text-primary">Alamat</h3>
              <p class="mt-1 text-base leading-relaxed">{!! nl2br(e($address)) !!}</p>
            </div>

            {{-- Telepon --}}
            @if ($phone)
              <div>
                <h3 class="text-lg font-bold text-primary">Telepon</h3>
                <a href="tel:{{ $phone }}" class="mt-1 text-base hover:text-accent transition-colors duration-300">{{ $phone }}</a>
              </div>
            @endif

            {{-- Email --}}
            @if ($email)
              <div>
                <h3 class="text-lg font-bold text-primary">Email</h3>
                <a href="mailto:{{ $email }}" class="mt-1 text-base hover:text-accent transition-colors duration-300">{{ $email }}</a>
              </div>
            @endif

            {{-- Fax --}}
            @if ($fax)
              <div>
                <h3 class="text-lg font-bold text-primary">Fax</h3>
                <p class="mt-1 text-base">{{ $fax }}</p>
              </div>
            @endif
          </div>
        </div>
      </div>
    </div>

    {{-- 2. Section Form Kontak --}}
    @php $contact = get_field('section_contact'); @endphp
    @include('sections.contact', ['contact' => $contact])

  {{-- Style untuk membuat iframe responsif --}}
  <style>
    .map-container iframe {
      width: 100%;
      height: 100%;
      min-height: 450px;
    }
  </style>
@endsection