<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Aplikasi Laravel')</title>
    <!-- Google Fonts: Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Tailwind -->
    @vite('resources/css/app.css')

    {{-- CSS --}}
    @stack('styles')
</head>
<body class="font-poppins text-gray-800 bg-white">

    {{-- Navbar --}}
    @include('partials.navbar')

    @yield('page-fullwidth')

    <main class="container mx-auto px-4 py-6">
        {{-- Bagian Hero & Clients --}}
        @yield('content-top')

    </main>

    {{-- Full-width Section di tengah (Layanan Kami) --}}
    @stack('middle-section')

    <main class="container mx-auto px-4 py-6">
        {{-- Bagian About & Testimoni --}}
        @yield('content-bottom')
    </main>

    @stack('bottom-fullwidth')

    {{-- Footer --}}
    @include('partials.footer')

    {{-- Javascript --}}
    @stack('scripts')

    @vite('resources/js/app.js')

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true, // animasi hanya sekali
        });
    </script>

</body>
</html>
