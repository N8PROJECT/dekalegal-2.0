@extends('layouts.app')

@section('title', 'Layanan Perpajakan | Deka Legal')

@section('page-fullwidth')
    {{-- Hero Banner --}}
    <section class="relative h-[400px] md:h-[500px] bg-cover bg-center flex items-center justify-center"
        style="background-image: url('{{ asset('images/banner.png') }}');">
        <div class="bg-[#8C011F]/60 w-full h-full absolute inset-0 z-0"></div>
        <div class="relative z-10 text-center text-white px-6">
            <h1 class="text-4xl md:text-6xl font-extrabold mb-4 tracking-tight">Layanan Perpajakan</h1>
            <p class="max-w-2xl mx-auto text-sm md:text-base text-white/90">
                Deka Tax hadir membantu klien dalam edukasi, pengelolaan, serta pengurusan perpajakan, pembukuan, dan sengketa pajak.
            </p>
        </div>
    </section>

    {{-- Section Layanan Perpajakan --}}
    <section class="py-16 bg-white" data-aos="fade-up">
        <div class="max-w-6xl mx-auto px-4 grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <x-layanan-card 
                title="Administrasi Pajak" 
                harga="Konsultasikan"
                desc="Solusi lengkap untuk pengurusan dan dokumentasi pajak Anda."
                :fitur="[
                    'Pendaftaran NPWP',
                    'Aktivasi EFIN',
                    'Administrasi PPh Badan & Orang Pribadi',
                    'Pengukuhan PKP & Admin PPN',
                    'Penerbitan SKB & Suker PP 55 (UMKM)',
                    'Pelatihan Pajak'
                ]" />

            <x-layanan-card 
                title="Sengketa dan Litigasi Pajak" 
                harga="Konsultasikan"
                desc="Pendampingan profesional untuk penyelesaian masalah pajak dan banding."
                :fitur="[
                    'Mitigasi & Penilaian Risiko Pajak',
                    'Pendampingan Keberatan & Gugatan Pajak',
                    'Pendampingan Banding, PK, dan Bea Cukai'
                ]" />

            <x-layanan-card 
                title="Bea Cukai" 
                harga="Konsultasikan"
                desc="Layanan dokumen dan legalitas untuk proses ekspor-impor bisnis Anda."
                :fitur="[
                    'Penanganan Karantina',
                    'Transfer PEB',
                    'PPJK & Pengusaha Jasa',
                    'Penerbitan Certificate of Origin (COO)',
                    'Doc Fee'
                ]" />

            <x-layanan-card 
                title="Transfer Pricing" 
                harga="Konsultasikan"
                desc="Bantuan dokumentasi dan strategi harga transfer yang sesuai regulasi."
                :fitur="[
                    'Dokumentasi Transfer Pricing (Local & Induk)',
                    'Benchmarking & Perencanaan',
                    'Bantuan APA & MAP'
                ]" />

            <x-layanan-card 
                title="Layanan Akuntansi" 
                harga="Konsultasikan"
                desc="Manajemen laporan keuangan dan audit yang rapi dan profesional."
                :fitur="[
                    'Penyusunan Laporan Keuangan',
                    'Pencatatan & Manajemen Buku Besar',
                    'Manajemen Gaji',
                    'Audit & Assurance',
                    'Analisis & Perencanaan Keuangan'
                ]" />
        </div>
    </section>
@endsection