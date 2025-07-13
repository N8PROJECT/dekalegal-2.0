@extends('layouts.app')

@section('title', 'Layanan Kami')

@section('fullwidth')
    <section class="bg-[#8C011F] py-16 text-white text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Layanan Legalitas</h2>
        <p class="text-lg max-w-2xl mx-auto">Kami bantu Anda mendirikan dan mengurus legalitas usaha secara profesional dan efisien.</p>
    </section>
    @endsection

@section('content')

<section class="bg-white py-16">
    <div class="max-w-6xl mx-auto px-4 space-y-16">

        {{-- Pendirian Badan Usaha --}}
        <div>
            <h3 class="text-2xl font-bold mb-8 text-[#8C011F]">Pendirian Badan Usaha</h3>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                {{-- PT Perorangan --}}
                <x-layanan-card title="PT Perorangan" harga="Rp 1,5 Juta" desc="Bentuk usaha perseorangan dengan perlindungan hukum." />

                {{-- CV --}}
                <x-layanan-card title="CV" harga="Rp 3,5 Juta" desc="Layanan pendirian CV yang cepat dan terjangkau." />

                {{-- Firma --}}
                <x-layanan-card title="Firma" harga="Rp 5 Juta" desc="Pendirian usaha berbentuk firma secara sah dan efisien." :fitur="[
                    'Akta Pendirian Firma', 'SK Pengadilan Negeri', 'NPWP Badan',
                    'NIB', 'Surat Keterangan Domisili Usaha'
                ]" />

                {{-- Koperasi --}}
                <x-layanan-card title="Koperasi" harga="Rp 5 Juta" desc="Solusi legalitas koperasi yang lengkap dan profesional." :fitur="[
                    'Pembuatan Akta Koperasi', 'Pengurusan NIB & NPWP', 'Legalitas lengkap'
                ]" />

                {{-- Yayasan & Perkumpulan --}}
                <x-layanan-card title="Yayasan & Perkumpulan" harga="Rp 5 Juta" desc="Badan hukum untuk kegiatan sosial, pendidikan, atau komunitas." />

                {{-- PT PMA --}}
                <x-layanan-card title="PT PMA" harga="Rp 8,5 Juta" desc="Pendirian Perseroan Modal Asing untuk investor luar negeri." />
            </div>
        </div>

        {{-- Legalitas & Perizinan --}}
        <div>
            <h3 class="text-2xl font-bold mb-8 text-[#8C011F]">Legalitas & Perizinan</h3>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <x-layanan-card title="Perubahan Akta" harga="Rp 4,5 Juta" desc="Perubahan data perusahaan secara resmi dan cepat." />
                <x-layanan-card title="Pendaftaran Merek" harga="Rp 3,5 Juta" desc="Lindungi identitas brand Anda secara hukum." :fitur="[
                    'Konsultasi & Analisis Merek', 'Permohonan & Monitoring', 'Layanan Pasca Pendaftaran', 'Sertifikat HKI'
                ]" />
                <x-layanan-card title="Contract Drafting" harga="Rp 1,5 – 2,5 Juta" desc="Pembuatan dan review kontrak bisnis oleh tim hukum ahli." :fitur="[
                    'Perjanjian Bahasa Indonesia – Rp 1,5 Juta',
                    'Perjanjian Bilingual (ENG-ID) – Rp 2,5 Juta'
                ]" />
                <x-layanan-card title="Sertifikasi ISO" harga="Mulai dari Rp 3 Juta" desc="Dapatkan sertifikasi ISO sesuai standar internasional." />
                <x-layanan-card title="SIUJPT" harga="Rp 23,5 Juta" desc="Izin usaha jasa pengurusan transportasi darat, laut, udara." />
                <x-layanan-card title="TDPSE" harga="Rp 2 Juta" desc="Daftarkan usaha elektronik Anda sesuai regulasi Kominfo." />
                <x-layanan-card title="IDAK/IPAK" harga="Rp 16,5 Juta" desc="Izin untuk usaha alat kesehatan, resmi dan lengkap." />
                <x-layanan-card title="SBUJK" harga="Mulai dari Rp 21,5 Juta" desc="Pengurusan SBUJK lengkap dengan SKK dan KTA." :fitur="[
                    'KTA Asosiasi', 'Sertifikasi SKK Tenaga Ahli', 'Penerbitan SBUJK'
                ]" />
            </div>
        </div>

        {{-- Layanan Paket Gabungan --}}
        <div>
            <h3 class="text-2xl font-bold mb-8 text-[#8C011F]">Paket Gabungan</h3>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <x-layanan-card title="Paket PT Start-Up" harga="Rp 5 Juta" desc="Paket hemat untuk memulai bisnis Anda dengan cepat dan legal." />
                <x-layanan-card title="Paket PT Scale Up" harga="Rp 5,5 Juta" desc="Dukungan lengkap untuk perusahaan yang siap berkembang." />
                <x-layanan-card title="Paket PT All-in" harga="Rp 7,5 Juta" desc="Layanan menyeluruh mulai dari pendirian hingga operasional." />
                <x-layanan-card title="PT + Merek" harga="Rp 6,5 Juta" desc="Paket pendirian perusahaan sekaligus pendaftaran merek dagang." />
                <x-layanan-card title="PT + Branding" harga="Rp 6,5 Juta" desc="Legalitas usaha sekaligus identitas brand profesional." :fitur="[
                    'Pendirian PT & CV', 'Pengurusan Berkas & Administrasi',
                    'Branding & Rebranding', 'Social Media Management'
                ]" />
            </div>
        </div>
    </div>
</section>
@endsection
