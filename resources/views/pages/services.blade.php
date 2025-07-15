@extends('layouts.app')

@section('title', 'Services | Deka Legal')

@section('page-fullwidth')
    {{-- Hero Banner --}}
    <section class="relative h-[400px] md:h-[500px] bg-cover bg-center flex items-center justify-center"
        style="background-image: url('{{ asset('images/banner.png') }}');">
        {{-- Overlay merah marun transparan --}}
        <div class="bg-[#8C011F]/60 w-full h-full absolute inset-0 z-0"></div>

        <div class="relative z-10 text-center text-white px-6">
            <h1 class="text-4xl md:text-6xl font-extrabold mb-4 tracking-tight">Services</h1>
        </div>
    </section>

    <section class="bg-white py-24 flex items-center justify-center" data-aos="fade-up">
        <div class="max-w-6xl w-full px-6">
            <div class="grid md:grid-cols-4 gap-8">
                {{-- Pendirian Usaha --}}
                <a href="{{ route('layanan.pendirian') }}"
                class="group relative rounded-xl p-8 h-[280px] md:h-[300px] lg:h-[320px] bg-[#F9F9F9] shadow-md transition-all duration-300 overflow-hidden 
                        hover:shadow-[0_0_20px_rgba(140,1,31,0.4)] hover:-translate-y-1 
                        hover:bg-white border border-transparent hover:border-[#8C011F] hover:ring-1 hover:ring-[#8C011F]/50">

                    {{-- Border glowing overlay --}}
                    <div class="absolute inset-0 z-0 opacity-0 group-hover:opacity-100 transition duration-500 blur-xl"></div>

                    {{-- Konten utama --}}
                    <div class="relative z-10 text-center flex flex-col justify-center h-full">
                        <img src="{{ asset('images/icons/enterprise.png') }}" alt="Pendirian Usaha" class="mx-auto h-16 mb-4">
                        <h3 class="text-xl font-bold text-[#8C011F]">Pendirian Perusahaan</h3>
                    </div>
                </a>

                {{-- Legalitas & Perizinan --}}
                <a href="{{ route('layanan.legalitas') }}"
                class="group relative rounded-xl p-8 h-[280px] md:h-[300px] lg:h-[320px] bg-[#F9F9F9] shadow-md transition-all duration-300 overflow-hidden 
                        hover:shadow-[0_0_20px_rgba(140,1,31,0.4)] hover:-translate-y-1 
                        hover:bg-white border border-transparent hover:border-[#8C011F] hover:ring-1 hover:ring-[#8C011F]/50">

                    {{-- Border glowing overlay --}}
                    <div class="absolute inset-0 z-0 opacity-0 group-hover:opacity-100 transition duration-500 blur-xl"></div>

                    {{-- Konten utama --}}
                    <div class="relative z-10 text-center flex flex-col justify-center h-full">
                        <img src="{{ asset('images/icons/iso.png') }}" alt="Pendirian Usaha" class="mx-auto h-16 mb-4">
                        <h3 class="text-xl font-bold text-[#8C011F]">Legalitas & Perizinan</h3>
                    </div>
                </a>

                {{-- Paket Gabungan --}}
                <a href="{{ route('layanan.paket') }}"
                class="group relative rounded-xl p-8 h-[280px] md:h-[300px] lg:h-[320px] bg-[#F9F9F9] shadow-md transition-all duration-300 overflow-hidden 
                        hover:shadow-[0_0_20px_rgba(140,1,31,0.4)] hover:-translate-y-1 
                        hover:bg-white border border-transparent hover:border-[#8C011F] hover:ring-1 hover:ring-[#8C011F]/50">

                    {{-- Border glowing overlay --}}
                    <div class="absolute inset-0 z-0 opacity-0 group-hover:opacity-100 transition duration-500 blur-xl"></div>

                    {{-- Konten utama --}}
                    <div class="relative z-10 text-center flex flex-col justify-center h-full">
                        <img src="{{ asset('images/icons/box.png') }}" alt="Pendirian Usaha" class="mx-auto h-16 mb-4">
                        <h3 class="text-xl font-bold text-[#8C011F]">Paket Pendirian PT</h3>
                    </div>
                </a>

                {{-- Perpajakan --}}
                <a href="{{ route('layanan.perpajakan') }}"
                class="group relative rounded-xl p-8 h-[280px] md:h-[300px] lg:h-[320px] bg-[#F9F9F9] shadow-md transition-all duration-300 overflow-hidden 
                        hover:shadow-[0_0_20px_rgba(140,1,31,0.4)] hover:-translate-y-1 
                        hover:bg-white border border-transparent hover:border-[#8C011F] hover:ring-1 hover:ring-[#8C011F]/50">

                    {{-- Border glowing overlay --}}
                    <div class="absolute inset-0 z-0 opacity-0 group-hover:opacity-100 transition duration-500 blur-xl"></div>

                    {{-- Konten utama --}}
                    <div class="relative z-10 text-center flex flex-col justify-center h-full">
                        <img src="{{ asset('images/icons/box.png') }}" alt="Pendirian Usaha" class="mx-auto h-16 mb-4">
                        <h3 class="text-xl font-bold text-[#8C011F]">Perpajakan</h3>
                    </div>
                </a>
            </div>
        </div>
    </section>

@endsection