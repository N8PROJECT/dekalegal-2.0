@php
    $active = 'text-[#8C011F]';
    $default = 'text-gray-700 hover:text-[#8C011F] transition-colors';
@endphp

<nav class="bg-white shadow-md sticky top-0 z-50">
    <div class="container mx-auto px-4 py-4 flex items-center justify-between">
        {{-- Logo --}}
        <div class="flex-shrink-0 flex items-center space-x-3">
            <img src="{{ asset('images/logo.png') }}" alt="Deka Legal Logo" class="h-14 w-auto">
            <span class="text-2xl font-bold text-gray-900 tracking-tight">Deka Legal</span>
        </div>

        {{-- Hamburger (Mobile) --}}
        <div class="md:hidden">
            <button id="navToggle" class="text-gray-700 focus:outline-none focus:text-[#8C011F]">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                     xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>

        {{-- Menu Tengah (Desktop) --}}
        <div id="navMenu"
             class="hidden md:flex flex-1 justify-center items-center md:space-x-14 text-[17px] font-medium relative">
            <a href="{{ route('home.page') }}" class="{{ Request::routeIs('home.page') ? $active : $default }}">Home</a>

            {{-- Dropdown --}}
            <div class="relative group">
                <button class="{{ Request::is('layanan*') ? $active : $default }} flex items-center gap-1">
                    Layanan
                    <svg class="w-4 h-4 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>

                <div
                    class="absolute left-0 mt-2 bg-white rounded-xl shadow-lg py-2 w-56 z-20 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200">
                    <a href="{{ route('layanan.pendirian') }}"
                    class="block px-6 py-3 text-base text-gray-700 hover:bg-gray-100">Pendirian Perusahaan</a>
                    <a href="{{ route('layanan.legalitas') }}"
                    class="block px-6 py-3 text-base text-gray-700 hover:bg-gray-100">Legalitas & Perizinan</a>
                    <a href="{{ route('layanan.paket') }}"
                    class="block px-6 py-3 text-base text-gray-700 hover:bg-gray-100">Paket Pendirian PT</a>
                    <a href="{{ route('layanan.perpajakan') }}"
                    class="block px-6 py-3 text-base text-gray-700 hover:bg-gray-100">Perpajakan</a>
                </div>
            </div>

            <a href="{{ route('about.page') }}" class="{{ Request::is('about') ? $active : $default }}">Tentang Kami</a>
            <a href="{{ route('testimoni.page') }}" class="{{ Request::is('testimoni') ? $active : $default }}">Testimoni</a>
            <a href="{{ route('faq.page') }}" class="{{ Request::is('faq') ? $active : $default }}">FAQ</a>
        </div>

        {{-- Placeholder kanan --}}
        <div class="hidden md:block w-24"></div>
    </div>

    {{-- Mobile Menu --}}
    <div id="navMenuMobile" class="md:hidden hidden px-6 pb-4 transition-all duration-300 ease-in-out">
        <ul class="space-y-3 text-sm font-medium">
            <li><a href="{{ route('home.page') }}" class="block {{ Request::routeIs('home.page') ? $active : $default }}">Home</a></li>

            {{-- Layanan Mobile Dropdown (expandable if needed) --}}
            <li class="border-t pt-2">
                <span class="text-gray-500 uppercase text-xs">Layanan</span>
                <ul class="pl-3 mt-1 space-y-2">
                    <li><a href="{{ route('layanan.pendirian') }}" class="{{ $default }}">Pendirian Perusahaan</a></li>
                    <li><a href="{{ route('layanan.legalitas') }}" class="{{ $default }}">Legalitas & Perizinan</a></li>
                    <li><a href="{{ route('layanan.paket') }}" class="{{ $default }}">Paket Pendirian PT</a></li>
                    <li><a href="{{ route('layanan.perpajakan') }}" class="{{ $default }}">Perpajakan</a></li>
                </ul>
            </li>

            <li><a href="{{ route('about.page') }}" class="block {{ Request::is('about') ? $active : $default }}">Tentang Kami</a></li>
            <li><a href="{{ route('testimoni.page') }}" class="block {{ Request::is('testimoni') ? $active : $default }}">Testimoni</a></li>
            <li><a href="{{ route('faq.page') }}" class="block {{ Request::is('faq') ? $active : $default }}">FAQ</a></li>
        </ul>
    </div>
</nav>

@push('scripts')
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const toggle = document.getElementById("navToggle");
        const menu = document.getElementById("navMenuMobile");

        toggle.addEventListener("click", () => {
            if (menu.classList.contains("hidden")) {
                menu.classList.remove("hidden");
                menu.style.maxHeight = "0px";
                setTimeout(() => {
                    menu.style.maxHeight = "500px";
                }, 10);
            } else {
                menu.style.maxHeight = "0px";
                setTimeout(() => {
                    menu.classList.add("hidden");
                }, 300);
            }
        });

        // Optional: Close dropdown when clicking outside
        document.addEventListener("click", (e) => {
            const dropdown = document.querySelector(".group");
            if (!dropdown.contains(e.target)) {
                dropdown.querySelector("div").classList.add("hidden");
            }
        });
    });
</script>
@endpush