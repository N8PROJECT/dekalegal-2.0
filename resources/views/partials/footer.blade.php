<footer class="bg-[#8C011F] text-white min-h-[50vh] flex items-center text-lg">
  <div class="max-w-6xl mx-auto px-6 w-full grid grid-cols-1 sm:grid-cols-[1.5fr_1fr_1fr] gap-12 text-center sm:text-left">
    
    {{-- Kolom Logo + Kontak --}}
    <div class="flex flex-col items-center sm:items-start text-[1.1rem]">
        <div class="flex items-center mb-4">
            <img src="{{ asset('images/logo-footer.png') }}" alt="Logo Deka Legal" class="h-16 mr-3">
            <span class="text-3xl font-semibold">Deka Legal</span>
        </div>
        <hr class="border-t border-white opacity-40 w-40 sm:w-48 mb-4">

        <div class="flex items-center space-x-3 mb-3">
            <i class="fa-solid fa-envelope text-xl"></i>
            <span class="text-base sm:text-lg">dekalegalbusiness@gmail.com</span>
        </div>
        <div class="flex items-center space-x-3">
            <i class="fa-brands fa-whatsapp text-xl"></i>
            <span class="text-base sm:text-lg">+62 856 9550 0094</span>
        </div>
    </div>

    {{-- Kolom Halaman --}}
    <div class="flex flex-col items-center sm:items-start text-base sm:text-lg">
        <h3 class="font-semibold mb-4 text-xl">Halaman</h3>
        <ul class="space-y-3">
            <li><a href="#hero" class="hover:underline">Home</a></li>
            <li><a href="#services" class="hover:underline">Layanan</a></li>
            <li><a href="#about-us" class="hover:underline">Tentang Kami</a></li>
            <li><a href="#testimoni" class="hover:underline">Testimoni</a></li>
            <li><a href="{{ route('faq.page') }}" class="hover:underline">FAQ</a></li>
        </ul>
    </div>

    {{-- Kolom Media Sosial --}}
    <div class="flex flex-col items-center sm:items-start text-base sm:text-lg">
        <h4 class="font-semibold mb-4 text-xl">Media Sosial</h4>
        <a href="https://www.instagram.com/deka.legal/?hl=en" target="_blank"
            class="flex items-center justify-center space-x-2 bg-white text-[#8C011F] font-semibold px-5 py-3 rounded-lg w-48 hover:bg-[#f9f9f9] transition mb-3">
            <i class="fa-brands fa-instagram text-lg"></i>
            <span>Instagram</span>
        </a>
        <a href="https://id.linkedin.com/company/pt-deka-legal-perkasa" target="_blank"
            class="flex items-center justify-center space-x-2 bg-white text-[#8C011F] font-semibold px-5 py-3 rounded-lg w-48 hover:bg-[#f9f9f9] transition">
            <i class="fa-brands fa-linkedin-in text-lg"></i>
            <span>LinkedIn</span>
        </a>
    </div>
  </div>
</footer>
