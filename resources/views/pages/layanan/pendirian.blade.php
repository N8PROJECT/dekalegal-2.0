@extends('layouts.app')

@section('title', 'Pendirian Usaha | Deka Legal')

@section('page-fullwidth')
    {{-- Hero Banner --}}
    <section class="relative h-[400px] md:h-[500px] bg-cover bg-center flex items-center justify-center"
        style="background-image: url('{{ asset('images/banner.png') }}');">
        {{-- Overlay merah marun transparan --}}
        <div class="bg-[#8C011F]/60 w-full h-full absolute inset-0 z-0"></div>

        <div class="relative z-10 text-center text-white px-6">
            <h1 class="text-4xl md:text-6xl font-extrabold mb-4 tracking-tight">Pendirian Perusahaan</h1>
        </div>
    </section>

    <section class="py-16 bg-white" data-aos="fade-up">
        <div class="max-w-6xl mx-auto px-4 grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <x-layanan-card title="PT Perorangan" harga="Rp 1,5 Juta" desc="Bentuk usaha perseorangan dengan perlindungan hukum." :fitur="['Reservasi Nama PT', 'Surat Pernyataan Pendirian', 'Sertifikasi Pendirian PT', 'NIB (Skala Kecil & Mikro)', 'Pembuatan NPWP', 'Pembuatan Akun OSS RBA']" />
            <x-layanan-card title="CV" harga="Rp 3,5 Juta" desc="Layanan pendirian CV yang cepat dan terjangkau." :fitur="['Pembuatan Nama CV', 'Pembuatan Akta Pendirian CV', 'Pembuatan SK Kemenkumham', 'Pembuatan NPWP', 'Pembuatan Akun OSS RBA', 'Pembuatan NIB']" />
            <x-layanan-card title="Firma" harga="Rp 5 Juta" desc="Pendirian usaha berbentuk firma secara sah dan efisien." :fitur="['Akta Pendirian Firma', 'SK Pengadilan Negeri', 'NPWP Badan', 'NIB', 'Surat Keterangan Domisili Usaha']" />
            <x-layanan-card title="Koperasi" harga="Rp 5 Juta" desc="Solusi legalitas koperasi yang lengkap dan profesional." :fitur="['Pembuatan Akta Koperasi', 'Pengurusan NIB & NPWP', 'Legalitas lengkap']" />
            <x-layanan-card title="Yayasan & Perkumpulan" harga="Rp 5 Juta" desc="Badan hukum untuk kegiatan sosial, pendidikan, atau komunitas." :fitur="['Reservasi Nama yayasan', 'Pembuatan Akta Pendirian', 'Pembuatan SK Kemenkumham', 'Pembuatan NPWP', 'Pembuatan Akun OSS RBA', 'Pembuatan NIB']" />
        </div>
    </section>
@endsection
