@extends('layouts.app')

@section('content')
    @include('sections.banner-image', [
        'title' => 'Keahlian Kami',
    ])

    @include('sections.simple-2-column')


    @php
    $expertise_list = [
        [
            'title' => 'Hukum Korporat & Komersial',
            'content' => 'Kami memberikan nasihat hukum yang komprehensif mengenai semua aspek hukum korporat dan komersial, termasuk pembentukan perusahaan, restrukturisasi, merger dan akuisisi, serta penyusunan kontrak komersial. Kami memastikan bisnis Anda berjalan sesuai dengan peraturan yang berlaku.'
        ],
        [
            'title' => 'Penyelesaian Sengketa & Litigasi',
            'content' => 'Tim litigasi kami memiliki pengalaman luas dalam mewakili klien di berbagai forum penyelesaian sengketa, termasuk pengadilan, arbitrase, dan mediasi. Kami mengembangkan strategi yang efektif untuk melindungi kepentingan Anda dalam sengketa perdata, pidana, maupun komersial.'
        ],
        [
            'title' => 'Kekayaan Intelektual (IP)',
            'content' => 'Kami membantu melindungi aset paling berharga Anda: kekayaan intelektual. Layanan kami mencakup pendaftaran merek dagang, hak cipta, paten, serta penegakan hukum terhadap pelanggaran hak kekayaan intelektual.'
        ],
        [
            'title' => 'Hukum Ketenagakerjaan',
            'content' => 'Kami memberikan panduan hukum terkait hubungan industrial, mulai dari penyusunan perjanjian kerja, peraturan perusahaan, hingga penyelesaian perselisihan hubungan industrial. Kami membantu perusahaan mematuhi undang-undang ketenagakerjaan yang kompleks.'
        ],
        [
            'title' => 'Properti & Real Estat',
            'content' => 'Layanan kami mencakup semua aspek hukum properti dan real estat, termasuk transaksi jual beli, sewa-menyewa, pembiayaan proyek, dan penyelesaian sengketa tanah. Kami memastikan transaksi properti Anda aman dan terjamin secara hukum.'
        ],
    ];
    @endphp

    <section class="bg-surface py-16 md:py-24">
        <div class="container mx-auto px-4">
            <div class="max-w-5xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 text-primary">
                    Area Praktik Kami
                </h2>
    
                <div x-data="{ selected: 1 }">
                    @foreach ($expertise_list as $item)
                        <div class="border-b border-secondary">
                            <h2 id="accordion-heading-{{ $loop->iteration }}">
                                <button type="button" @click="selected = (selected === {{ $loop->iteration }} ? null : {{ $loop->iteration }})" class="rounded-t-md flex items-center justify-between w-full p-5 font-semibold text-left text-primary  transition duration-200 hover:bg-accent/10 hover:text-accent"
                                    :class="{ 'bg-surface dark:bg-secondary/10': selected === {{ $loop->iteration }} }">
                                    <span class="text-lg">{{ $item['title'] }}</span>
                                    <svg class="w-3 h-3 shrink-0 transition-transform duration-200" :class="{ 'rotate-180': selected === {{ $loop->iteration }} }" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                    </svg>
                                </button>
                            </h2>
                            <div x-show="selected === {{ $loop->iteration }}" x-collapse id="accordion-body-{{ $loop->iteration }}">
                                <div class="p-5" :class="{ 'bg-surface dark:bg-secondary/': selected === {{ $loop->iteration }} }">
                                    <p class="mb-2 text-primary leading-relaxed">
                                        {{ $item['content'] }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
    
            </div>
        </div>
    </section>

    @include('partials.components.other-news')
@endsection
