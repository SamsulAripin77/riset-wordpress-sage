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

    @include('sections.keahlian-kami')

    @include('partials.components.other-news')
@endsection
