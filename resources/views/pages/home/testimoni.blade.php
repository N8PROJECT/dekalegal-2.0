{{-- Testimoni --}}
<section
    id="testimoni"
    class="relative py-20 overflow-hidden"
    data-aos="fade-up"
>
    <!-- FULL BACKGROUND PATTERN -->
    <img
        src="{{ asset('images/testi-bg.png') }}"
        alt="Pattern"
        class="absolute inset-0 w-full h-full object-cover object-left-bottom rotate-180 pointer-events-none select-none z-0"
    />
    
    {{-- Konten Utama --}}
    <div class="relative z-10 container mx-auto px-6 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-2 leading-tight">
            <span class="text-[#8C011F]">Kepercayaan</span> Mereka
        </h2>
        <h3 class="text-2xl md:text-3xl font-bold mb-6 leading-tight">
            Bukti Nyata <span class="text-[#8C011F]">Komitmen</span> Kami
        </h3>
        <p class="text-gray-600 text-lg mb-10 max-w-2xl mx-auto">
            Temukan bagaimana kami menjadi bagian dari perjalanan legalitas berbagai bisnis di Indonesia secara tepat, efisien, dan terpercaya.
        </p>

        {{-- Testimoni Card Grid --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @for ($i = 1; $i <= 4; $i++)
                <div class="relative w-full aspect-[3/4] overflow-hidden rounded-lg border border-[#8C011F] shadow hover:shadow-lg transition duration-300">
                    {{-- Foto testimoni --}}
                    <img src="{{ asset("images/testimoni/testi-$i.jpg") }}"
                        alt="Testimoni {{ $i }}"
                        class="absolute inset-0 w-full h-full object-cover">

                    {{-- Frame overlay PNG --}}
                    <img src="{{ asset('images/template/frame-testimoni.png') }}"
                        alt="Frame"
                        class="absolute inset-0 w-full h-full object-cover pointer-events-none">
                </div>
            @endfor
        </div>

        {{-- Tombol --}}
        <div class="mt-10">
            <a href="{{ route('testimoni.page') }}"
               class="inline-block px-6 py-3 bg-[#8C011F] text-white font-semibold rounded-md hover:bg-white hover:text-[#8C011F] border border-[#8C011F] transition">
                Lihat Semua Testimoni
            </a>
        </div>
    </div>
</section>