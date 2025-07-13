@php
    $active = 'text-[#8C011F]';
    $default = 'text-gray-700 hover:text-[#8C011F] transition-colors';
@endphp

<nav class="bg-white shadow-md sticky top-0 z-50">
    <div class="container mx-auto px-4 py-3 flex items-center justify-between">
        {{-- Logo --}}
        <div class="flex-shrink-0 flex items-center space-x-2">
            <img src="{{ asset('images/logo.png') }}" alt="Deka Legal Logo" class="h-12 w-auto">
            <span class="text-lg font-semibold text-gray-800">Deka Legal</span>
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

        {{-- Menu Tengah --}}
        <div id="navMenu"
             class="hidden md:flex flex-1 justify-center items-center md:space-x-14 text-md font-medium">
            <a href="{{ route('home.page') }}" class="{{ Request::routeIs('home.page') ? $active : $default }}">Home</a>
            <a href="{{ route('layanan.page') }}" class="{{ Request::is('layanan') ? $active : $default }}">Layanan</a>
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
            <li><a href="{{ route('layanan.page') }}" class="block {{ Request::is('layanan') ? $active : $default }}">Layanan</a></li>
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
    });
</script>
@endpush
