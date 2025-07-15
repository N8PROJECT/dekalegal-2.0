@extends('layouts.app')

@section('title', 'Legalitas & Perizinan | Deka Legal')

@section('page-fullwidth')
    {{-- Hero Banner --}}
    <section class="relative h-[400px] md:h-[500px] bg-cover bg-center flex items-center justify-center"
        style="background-image: url('{{ asset('images/banner.png') }}');">
        <div class="bg-[#8C011F]/60 w-full h-full absolute inset-0 z-0"></div>
        <div class="relative z-10 text-center text-white px-6">
            <h1 class="text-4xl md:text-6xl font-extrabold mb-4 tracking-tight">Legalitas & Perizinan</h1>
        </div>
    </section>

    <section class="py-16 bg-white" data-aos="fade-up">
        <div class="max-w-6xl mx-auto px-4 grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <x-layanan-card 
                title="Pendaftaran Merek" 
                harga="Mulai dari Rp 3,5 Juta" 
                desc="Daftarkan merek bisnis Anda dengan perlindungan hukum." 
                :fitur="[
                    'Konsultasi Merek Bisnis',
                    'Analisis Merek Bisnis',
                    'Permohonan Pendaftaran',
                    'Monitoring Pendaftaran',
                    'Layanan Pasca Pendaftaran',
                    'Sertifikat HKI'
                ]" />

            <x-layanan-card 
                title="Sertifikasi ISO" 
                harga="Mulai dari Mulai dari Rp 3 Juta" 
                desc="Tingkatkan standar bisnis Anda dengan sertifikasi ISO yang diakui secara internasional." 
                :fitur="[
                    'ISO 9001',
                    'ISO 14001',
                    'ISO 45001',
                    'ISO 37001'
                ]" />

            <x-layanan-card 
                title="Pengurusan IDAK/IPAK" 
                harga="Mulai dari Rp 16,5 Juta" 
                desc="Proses perizinan alat kesehatan dengan mudah dan cepat." 
                :fitur="[
                    'Proses Cepat & Mudah',
                    'Garansi Uang Kembali',
                    'Pengurusan Berpengalaman',
                    'Gratis Konsultasi'
                ]" />

            <x-layanan-card 
                title="Tanda Daftar PSE" 
                harga="Mulai dari Rp 2 Juta" 
                desc="Daftarkan sistem elektronik Anda secara resmi dan aman." 
                :fitur="[
                    'Pengurusan Tanda Daftar Penyelenggara Sistem Elektronik (TD-PSE)',
                    'Layanan cepat dan efisien'
                ]" />

            <x-layanan-card 
                title="Izin Usaha Transportasi" 
                harga="Mulai dari Rp 23,5 Juta" 
                desc="Izin usaha jasa pengurusan transportasi & angkutan bus pariwisata." 
                :fitur="[
                    'Pengurusan IUJPT',
                    'Pengurusan Izin Angkutan Bus Pariwisata'
                ]" />

            <x-layanan-card 
                title="Perubahan Akta Perusahaan" 
                harga="Mulai dari Rp 4,5 Juta" 
                desc="Layanan perubahan data perusahaan dengan akta resmi." 
                :fitur="[
                    'Perubahan Anggaran Dasar',
                    'Perubahan Modal Perseroan',
                    'Perubahan Bidang Usaha',
                    'Perubahan Data Perseroan',
                    'Perubahan Susunan Pemegang Saham & Direksi',
                    'Perubahan Alamat Perseroan'
                ]" />

            <x-layanan-card 
                title="Pengurusan SBUJK" 
                harga="Mulai dari Rp 21,5 Juta" 
                desc="Layanan pengurusan Sertifikat Badan Usaha Jasa Konstruksi (SBUJK)." 
                :fitur="[
                    'Kartu Tanda Anggota (KTA) Asosiasi',
                    'Sertifikasi Keahlian & Kemampuan (SKK) Tenaga Ahli',
                    'Penerbitan SBUJK'
                ]" />

            <x-layanan-card 
                title="Perjanjian Bahasa Indonesia" 
                harga="Mulai dari Rp 1,5 Juta" 
                desc="Perancangan perjanjian bisnis dalam Bahasa Indonesia yang sah dan profesional." 
                :fitur="[
                    'Perjanjian sesuai kebutuhan bisnis',
                    'Bahasa Indonesia',
                    'Melindungi hak dan kewajiban para pihak'
                ]" />

            <x-layanan-card 
                title="Perjanjian Bilingual (ID/EN)" 
                harga="Mulai dari Rp 2,5 Juta" 
                desc="Perjanjian bisnis dua bahasa (Indonesia & Inggris) untuk kerja sama internasional." 
                :fitur="[
                    'Perjanjian sesuai kebutuhan bisnis',
                    'Dalam Bahasa Indonesia & Inggris',
                    'Melindungi kepentingan bisnis global'
                ]" />
        </div>
    </section>
@endsection