@extends('layouts.app')

@section('title', 'Testimoni')

@section('content')
    <section class="bg-white py-16">
        <div class="max-w-6xl mx-auto px-4 text-center">
            {{-- Heading --}}
            <h2 class="text-3xl md:text-4xl font-semibold mb-4 text-[#8C011F]">Testimoni Klien Kami</h2>
            <p class="text-gray-600 max-w-2xl mx-auto mb-10">
                Lihat bagaimana kami telah menjadi bagian dari keberhasilan legalitas berbagai bisnis di Indonesia.
            </p>

            {{-- Grid Testimoni --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @for ($i = 1; $i <= 12; $i++)
                    <div class="relative overflow-hidden rounded-xl border border-[#8C011F] shadow-sm hover:shadow-lg transition duration-300">
                        {{-- Gambar Testimoni --}}
                        <img src="{{ asset("images/testimoni/testi-$i.jpg") }}" alt="Testimoni $i"
                            class="w-full h-full object-cover">
                        
                        {{-- Frame overlay transparan (opsional) --}}
                        <img src="{{ asset('images/template/frame-testimoni.png') }}"
                            alt="Frame"
                            class="absolute inset-0 w-full h-full object-cover pointer-events-none">
                    </div>
                @endfor
            </div>

            {{-- Button ke Halaman Kontak / Konsultasi --}}
            <div class="mt-10">
                <a href="https://wa.me/message/UFGAP35HNAXVJ1" class="inline-block px-6 py-3 rounded-md bg-[#8C011F] text-white font-medium hover:bg-white hover:text-[#8C011F] border border-[#8C011F] transition">
                    Hubungi Kami
                </a>
            </div>
        </div>
    </section>
@endsection