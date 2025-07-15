@extends('layouts.app')

@section('title', 'Tentang Kami | Deka Legal')

@section('page-fullwidth')

    {{-- Hero Banner --}}
    <section class="relative h-[400px] md:h-[500px] bg-cover bg-center flex items-center justify-center"
        style="background-image: url('{{ asset('images/banner.png') }}');">
        {{-- Overlay merah marun transparan --}}
        <div class="bg-[#8C011F]/60 w-full h-full absolute inset-0 z-0"></div>

        <div class="relative z-10 text-center text-white px-6">
            <h1 class="text-4xl md:text-6xl font-extrabold mb-4 tracking-tight">Tentang Kami</h1>
        </div>
    </section>

    <section id="about-us" class="relative bg-white pt-20 md:pt-28 pb-0 md:pb-0 -mb-32 z-10" data-aos="fade-up">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-end">
            {{-- Gambar --}}
            <div data-aos="zoom-in" class="flex justify-center z-10 relative">
                <div class="relative">
                    <img src="{{ asset('images/Adobe Express - file.png') }}"
                        alt="Deka Legal Team"
                        class="w-full max-w-md md:max-w-lg object-contain drop-shadow-xl relative z-10">
                    <div class="absolute bottom-0 left-1/2 -translate-x-1/2 w-32 h-6 bg-black/10 blur-md rounded-full z-0"></div>
                </div>
            </div>

            {{-- Konten --}}
            <div data-aos="fade-left" class="text-gray-800 flex flex-col justify-center h-full">
                <h2 class="text-4xl md:text-5xl font-extrabold mb-6 leading-tight">
                    <span class="text-gray-900">Deka</span><span class="text-[#8C011F]">Legal</span>
                </h2>

                <p class="text-lg md:text-xl text-gray-600 leading-relaxed mb-5">
                    PT Deka Group Indonesia (“Deka Legal”) merupakan perusahaan yang bergerak di bidang pelayanan jasa
                    konsultasi, pendirian badan hukum, perpajakan, HKI, dan perizinan hukum lainnya. Sejak 2022,
                    kami telah membantu lebih dari <strong class="text-gray-800">2.500 pengusaha</strong> membangun
                    bisnisnya secara legal dan efisien.
                </p>

                <p class="text-lg md:text-xl text-gray-600 leading-relaxed mb-6">
                    Kami berkomitmen untuk memberikan pelayanan yang cepat, transparan, dan terjangkau, mendukung
                    pertumbuhan UMKM dan perusahaan skala besar di seluruh Indonesia.
                </p>

            </div>
        </div>
    </section>

@endsection

@push('scripts')
    {{-- AOS Library --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            AOS.init({
                once: true,
                duration: 800,
                easing: 'ease-out-cubic'
            });
        });
    </script>
@endpush