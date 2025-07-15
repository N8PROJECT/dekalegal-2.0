@extends('layouts.app')

@section('title', 'Testimoni | Deka Legal')

@section('page-fullwidth')

    {{-- Hero Banner --}}
    <section class="relative h-[400px] md:h-[500px] bg-cover bg-center flex items-center justify-center"
        style="background-image: url('{{ asset('images/banner.png') }}');">
        {{-- Overlay merah marun transparan --}}
        <div class="bg-[#8C011F]/60 w-full h-full absolute inset-0 z-0"></div>

        <div class="relative z-10 text-center text-white px-6">
            <h1 class="ttext-4xl md:text-6xl font-extrabold mb-4 tracking-tight">Testimoni</h1>
        </div>
    </section>

    <section class="bg-white py-16" data-aos="fade-up">
        <div class="max-w-6xl mx-auto px-4 text-center">
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
        </div>
    </section>

@endsection