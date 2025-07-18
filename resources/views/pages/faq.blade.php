@extends('layouts.app')

@section('title', 'FAQ | Deka Legal')

@section('page-fullwidth')

{{-- Hero Banner --}}
<section class="relative h-[400px] md:h-[500px] bg-cover bg-center flex items-center justify-center"
    style="background-image: url('{{ asset('images/banner.png') }}');">
    {{-- Overlay merah marun transparan --}}
    <div class="bg-[#8C011F]/60 w-full h-full absolute inset-0 z-0"></div>

    <div class="relative z-10 text-center text-white px-6">
        <h1 class="text-4xl md:text-6xl font-extrabold mb-4 tracking-tight">FAQ</h1>
    </div>
</section>

<section class="bg-white py-16" data-aos="fade-up">

    <div class="max-w-4xl mx-auto px-4">

        {{-- Accordion FAQ --}}
        <div class="space-y-4">
            @php
                $faqs = [
                    [
                        'q' => 'Berapa lama pendirian PT atau CV secara umum ?',
                        'a' => 'Secara umum pendirian badan hukum membutuhkan waktu selama 5-7 hari kerja. Yang menyebabkan durasi waktu yang berbeda-beda adalah kecepatan pada pengerjaan berkas-berkas yang sudah diberikan para calon pengusaha muda dan ketergantungan pada sistem website pemerintah. Namun, di Deka Legal berkas calon pengusaha muda bisa selesai 1 hari kerja apabila mengambil paket Deka Fast Track (EMOT).'
                    ],
                    [
                        'q' => 'Apa saja persyaratan yang dibutuhkan untuk mendirikan suatu badan hukum ?',
                        'a' => 'Syarat pendirian badan hukum sangatlah simple dan tidak ribet! cukup memberikan KTP dan NPWP calon pengurus badan hukum anda serta mengisi Form yang diberikan oleh Admin Deka Legal!. Setelah mengisi form tersebut dalam beberapa waktu pendirian badan hukum calon pengusaha muda akan di prosess.'
                    ],
                    [
                        'q' => 'Apa kelebihan memiliki kegiatan usaha atau kegiatan lainnya yang berbadan hukum ?',
                        'a' => [
                            [
                                'title' => 'Benefits pendirian PT',
                                'desc' => 'Secara bisnis lebih bonafide dalam arti sudah terdaftar sebagai badan hukum yang bisa mengikuti aktivitas tender baik dari pemerintah atau swasta. Kebanyakan client kami menggunakan PT dibanding CV karena permintaan pihak ketiga yang mengharuskan PT dalam bermitra.
                                            Dalam hal ingin mendapatkan pendanaan, PT lebih dilirik karena PT bisa menjualkan saham nya kepada investor. Hal ini sejalan dengan kewajiban PT yang dapat mengalihkan sahamnya kepada orang lain.
                                            Pemisahan harta kekayaan PT tidak menyertakan harta kekayaan sekutunya kak sesuai Pasal 3 ayat 1 Undang- Undang Perseroan Terbatas. Dalam kata lain, apabila perusahaan mengalami kerugian yang menanggung kerugian tersebut adalah PT bukan pribadi.',
                            ],
                            [
                                'title' => 'Benefits CV',
                                'desc' => 'Usaha tetap dapat berjalan seperti PT tetapi pemisahaan kekayaan badan dengan pribadii (sekutu aktif) tidak ada pemisahan yang berarti utang-piutang badan sekutu aktif akan bertanggung jawab sampai ke harta pribadinya.
                                            Banyak sih kaa client kami yang sebelumnya berbadan CV lalu mengganti ke PT karena hal diatas dan tidak<br>bisa mengikuti persyaratan tender.',
                            ],
                            [
                                'title' => 'Benefits Yayasan',
                                'desc' => 'Secara bidangnya terdapat 3 kak yaitu bergerak di bidang sosial, kemanusiaan, dan keagamaan. Tentunya harus di lihat kak tujuan didirikannya apakah mencangkup 3 bidang ini atau tidak karena tujuannya tidak mencari keuntungan.',
                            ],
                            [
                                'title' => 'Benefits Perkumpulan',
                                'desc' => 'Tidak mencari keuntungan sama hal nya dengan yayasan dan oleh karena itu tidak ada izin usaha yang terbit atas badan hukum perkumpulan',
                            ],
                        ],
                    ],
                ];
            @endphp

            @foreach ($faqs as $index => $faq)
                <div x-data="{ open: false }" class="border border-gray-300 rounded-lg p-4 mb-4">
                    <button @click="open = !open" class="w-full text-left flex items-center justify-between">
                        <span class="font-medium text-gray-800">{{ $faq['q'] }}</span>
                        <svg x-show="!open" class="w-5 h-5 text-[#8C011F]" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 4v16m8-8H4"></path></svg>
                        <svg x-show="open" class="w-5 h-5 text-[#8C011F]" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" style="display: none;"><path stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" d="M20 12H4"></path></svg>
                    </button>

                    <div x-show="open" x-transition class="mt-3 text-sm text-gray-600 space-y-3">
                        @if (is_array($faq['a']))
                            @foreach ($faq['a'] as $point)
                                <div>
                                    <p class="font-semibold text-gray-800">{{ $loop->iteration }}. {{ $point['title'] }}</p>
                                    <p>{{ $point['desc'] }}</p>
                                </div>
                            @endforeach
                        @else
                            <p>{{ $faq['a'] }}</p>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</section>
@endsection