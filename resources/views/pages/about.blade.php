@extends('layouts.app')

@section('title', 'Tentang Kami')

@section('content')

    <section id="about-us" class="relative bg-white pt-16 pb-0">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-end">
            {{-- Gambar --}}
            <div data-aos="zoom-in" class="relative -mb-6 hidden md:flex justify-center items-end">
                <img src="{{ asset('images/Adobe Express - file.png') }}"
                    alt="Deka Legal Team"
                    class="w-full max-w-lg mx-auto object-contain">
            </div>

            {{-- Konten --}}
            <div data-aos="fade-left" class="text-gray-800 pb-32">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">
                    Tentang <span class="text-[#8C011F]">Deka Legal</span>
                </h2>
                <p class="text-gray-600 leading-relaxed mb-6">
                    PT Deka Group Indonesia (“Deka Legal”) merupakan perusahaan yang bergerak di bidang pelayanan jasa konsultasi, pendirian badan hukum, perpajakan, HKI, dan perizinan hukum lainnya. Sejak 2022, kami telah membantu lebih dari <strong>2500 pengusaha</strong> membangun bisnisnya secara legal dan efisien.
                </p>
                <p class="text-gray-600 leading-relaxed mb-8">
                    Kami berkomitmen untuk memberikan pelayanan yang cepat, transparan, dan terjangkau, mendukung pertumbuhan UMKM dan perusahaan skala besar di seluruh Indonesia.
                </p>
                <a href="https://wa.me/message/UFGAP35HNAXVJ1"
                    class="inline-block px-6 py-3 bg-[#8C011F] text-white font-semibold rounded-md hover:bg-white hover:text-[#8C011F] border border-[#8C011F] transition">
                    Hubungi Kami →
                </a>
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