<footer class="bg-[#8C011F] text-white py-10">
    <div class="max-w-6xl mx-auto px-6 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 text-center sm:text-left">
        
        {{-- Logo & Kontak --}}
        <div class="flex flex-col items-center sm:items-start">
            <div class="flex items-center mb-4">
                <img src="{{ asset('images/logo-footer.png') }}" alt="Logo Deka Legal" class="h-14 mr-3"> {{-- Ubah h-10 → h-14 --}}
                <span class="text-2xl font-semibold">Deka Legal</span> {{-- Ubah text-xl → text-2xl --}}
            </div>
            <p class="mb-1">Email</p>
            <p class="text-sm mb-4">dekalegalbusiness@gmail.com</p>
            <p class="mb-1">Whatsapp</p>
            <p class="text-sm">+62 856 9550 0094</p>
        </div>

        {{-- Navigasi Halaman --}}
        <div class="flex flex-col items-center sm:items-start">
            <h3 class="text-lg font-semibold mb-4">Halaman</h3>
            <ul class="space-y-2 text-sm">
                <li><a href="#hero" class="hover:underline">Utama</a></li>
                <li><a href="#services" class="hover:underline">Layanan</a></li>
                <li><a href="#about-us" class="hover:underline">Tentang Kami</a></li>
                <li><a href="#testimoni" class="hover:underline">Testimoni</a></li>
                <li><a href="{{ route('faq.page') }}" class="hover:underline">FAQ</a></li>
            </ul>
        </div>

        {{-- Media Sosial --}}
        <div class="flex flex-col items-center sm:items-start">
            <h4 class="text-white font-semibold mb-3">Media Sosial</h4>
            <div class="flex flex-col space-y-2">
                <a href="https://www.instagram.com/deka.legal/?hl=en" target="_blank"
                    class="flex items-center justify-center space-x-2 bg-white text-[#8C011F] font-medium px-3 py-1.5 rounded-md w-44 hover:bg-[#f9f9f9] transition">
                    <i class="fa-brands fa-instagram"></i>
                    <span>Instagram</span>
                </a>
                <a href="https://id.linkedin.com/company/pt-deka-legal-perkasa" target="_blank"
                    class="flex items-center justify-center space-x-2 bg-white text-[#8C011F] font-medium px-3 py-1.5 rounded-md w-44 hover:bg-[#f9f9f9] transition">
                    <i class="fa-brands fa-linkedin-in"></i>
                    <span>LinkedIn</span>
                </a>
            </div>
        </div>

    </div>
</footer>
