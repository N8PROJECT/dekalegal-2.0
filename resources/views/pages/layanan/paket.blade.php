@extends('layouts.app')

@section('title', 'Paket Gabungan | Deka Legal')

@section('page-fullwidth')
    {{-- Hero Banner --}}
    <section class="relative h-[400px] md:h-[500px] bg-cover bg-center flex items-center justify-center"
        style="background-image: url('{{ asset('images/banner.png') }}');">
        <div class="bg-[#8C011F]/60 w-full h-full absolute inset-0 z-0"></div>
        <div class="relative z-10 text-center text-white px-6">
            <h1 class="text-4xl md:text-6xl font-extrabold mb-4 tracking-tight">Paket Pendirian PT</h1>
        </div>
    </section>

    {{-- Section Layanan --}}
    <section class="py-16 bg-white" data-aos="fade-up">
        <div class="max-w-6xl mx-auto px-4 grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <x-layanan-card 
                title="All-in-One PT PMA Setup" 
                harga="Rp 8,5 Juta" 
                desc="Pendirian PT PMA lengkap dengan akses legalitas dan izin ekspor-impor." 
                :fitur="[
                    'PT Deed by Notary',
                    'SK Kemenkumham',
                    'NPWP',
                    'API Activation',
                    'Customs Access Rights',
                    'Standard Certificate',
                    'OSS RBA Access Rights',
                    'SPPL, UMK, K3L, PKKPR',
                    '1 Tahun Bantuan Hukum',
                    'Rekening Bank (BCA, Mandiri, UOB)',
                ]" />

            <x-layanan-card 
                title="Paket All-in" 
                harga="Rp 7,5 Juta" 
                desc="Solusi lengkap untuk pendirian PT dengan branding, virtual office & legal support." 
                :fitur="[
                    'Akta Pendirian PT',
                    'SK Kemenkumham',
                    'NIB + OSS RBA',
                    'NPWP PT',
                    'Sertifikat Standar',
                    'Aktivasi API',
                    'SPPL, UMK',
                    'Logo & Stationery Design',
                    'Template SOP',
                    'Virtual Office (1 Tahun)',
                    'Legal Assistance (1 Tahun)',
                    'Rekening Bank (UOB, BCA, Mandiri)',
                ]" />

            <x-layanan-card 
                title="PT + Social Media Management" 
                harga="Rp 6,5 Juta" 
                desc="Paket pendirian usaha lengkap dengan branding dan pengelolaan media sosial." 
                :fitur="[
                    'Pendirian PT & CV',
                    'Pengurusan Berkas & Administrasi',
                    'Branding & Rebranding',
                    'Social Media Management'
                ]" />

            <x-layanan-card 
                title="PT + Pendaftaran Merek" 
                harga="Rp 6,5 Juta" 
                desc="Layanan legalitas usaha plus perlindungan merek bisnis secara menyeluruh." 
                :fitur="[
                    'Akta Pendirian PT',
                    'SK Kemenkumham',
                    'NIB, OSS RBA, NPWP, API',
                    'SPPL, UMK',
                    'Konsultasi & Analisa Merek',
                    'Monitoring Merek',
                    'Permohonan Pendaftaran',
                    'Layanan Pasca Pendaftaran',
                    'Sertifikat HKI'
                ]" />

            <x-layanan-card 
                title="Paket Scale Up" 
                harga="Rp 5,5 Juta" 
                desc="Paket legalitas & branding untuk startup yang ingin naik kelas." 
                :fitur="[
                    'Akta Pendirian PT',
                    'SK Kemenkumham',
                    'NIB, OSS RBA, NPWP, API',
                    'Sertifikat Standar, SPPL, UMK',
                    'Logo & Stationery Design',
                    'Template SOP',
                    'Rekening Bank (UOB, BCA, Mandiri)'
                ]" />

            <x-layanan-card 
                title="Paket Start Up" 
                harga="Rp 5 Juta" 
                desc="Solusi efisien untuk memulai usaha dengan dokumen legalitas lengkap." 
                :fitur="[
                    'Akta Pendirian PT',
                    'SK Kemenkumham',
                    'NIB, OSS RBA, NPWP',
                    'Sertifikat Standar',
                    'Aktivasi API',
                    'SPPL, UMK'
                ]" />
        </div>
    </section>
@endsection