{{-- Services --}}
<section class="bg-[#FCEBEC] py-24 min-h-[80vh] flex flex-col justify-center" id="services" data-aos="fade-up">
    <div class="container mx-auto px-6">
        <h2 class="text-4xl lg:text-5xl font-bold text-center mb-16">
            <span class="text-[#8C011F]">Layanan</span> Kami
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
            {{-- 1. Pendirian Usaha --}}
            <div class="relative flex flex-col justify-center items-center text-center gap-4 bg-white rounded-xl shadow p-8 
                        hover:shadow-lg hover:scale-105 transition duration-300 ease-in-out min-h-[240px] overflow-hidden group">
                <img src="{{ asset('images/icons/enterprise.png') }}" alt="Pendirian Usaha" class="w-20 h-20">
                <h3 class="text-[#8C011F] font-semibold text-xl">Pendirian Usaha</h3>
                {{-- Shine effect --}}
                <span class="absolute top-0 left-[-75%] w-[50%] h-full bg-white/40 transform rotate-12 
                             group-hover:animate-shine pointer-events-none"></span>
            </div>

            {{-- 2. Legalitas & Perizinan --}}
            <div class="relative flex flex-col justify-center items-center text-center gap-4 bg-white rounded-xl shadow p-8 
                        hover:shadow-lg hover:scale-105 transition duration-300 ease-in-out min-h-[240px] overflow-hidden group">
                <img src="{{ asset('images/icons/iso.png') }}" alt="Legalitas & Perizinan" class="w-20 h-20">
                <h3 class="text-[#8C011F] font-semibold text-xl">Legalitas & Perizinan</h3>
                {{-- Shine effect --}}
                <span class="absolute top-0 left-[-75%] w-[50%] h-full bg-white/40 transform rotate-12 
                             group-hover:animate-shine pointer-events-none"></span>
            </div>

            {{-- 3. Paket Gabungan --}}
            <div class="relative flex flex-col justify-center items-center text-center gap-4 bg-white rounded-xl shadow p-8 
                        hover:shadow-lg hover:scale-105 transition duration-300 ease-in-out min-h-[240px] overflow-hidden group">
                <img src="{{ asset('images/icons/box.png') }}" alt="Paket Gabungan" class="w-20 h-20">
                <h3 class="text-[#8C011F] font-semibold text-xl">Paket Gabungan</h3>
                {{-- Shine effect --}}
                <span class="absolute top-0 left-[-75%] w-[50%] h-full bg-white/40 transform rotate-12 
                             group-hover:animate-shine pointer-events-none"></span>
            </div>
        </div>

        <div class="mt-10 text-center">
            <a href="{{ route('layanan.page') }}"
               class="inline-block px-6 py-3 bg-[#8C011F] text-white font-semibold rounded-md border border-[#8C011F] 
                      hover:bg-white hover:text-[#8C011F] transition">
                Lihat Semua Layanan →
            </a>
        </div>
    </div>
</section>