@extends('layouts.app')

@section('title', 'Home')

@section('content')

    {{-- Hero --}}
    <section class="relative bg-white h-screen overflow-hidden" id="hero">
        <div id="connect-bg" class="absolute inset-0 z-0">
            <canvas id="connect-canvas" class="w-full h-full"></canvas>
        </div>

        <div class="relative z-10 h-full flex flex-col justify-center items-center text-center px-4">
            <h1 class="text-4xl md:text-6xl font-bold text-gray-800 mb-4">
                Solusi <span class="font-light text-[#8C011F]">Legalitas</span>
            </h1>
            <p class="text-lg text-gray-700 max-w-xl mb-6">
                Usaha & Perpajakan Terintegrasi.
            </p>
            <div class="flex flex-wrap gap-4 justify-center">
                <a href="https://wa.me/message/UFGAP35HNAXVJ1"
                    class="px-6 py-3 rounded-md border border-[#8C011F] bg-[#8C011F] text-white 
                        hover:bg-white hover:text-[#8C011F] transition font-semibold">
                    Konsultasi Sekarang
                </a>
                <a href="{{ url('/layanan') }}"
                    class="px-6 py-3 rounded-md border border-gray-500 text-gray-700
                        hover:bg-[#383838] hover:text-white transition font-semibold">
                    Lihat Layanan
                </a>
            </div>
        </div>
    </section>

    {{-- Clients --}}
    <section class="bg-white py-10" id="clients">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <p class="text-gray-700 mb-6 text-lg">
                Lebih dari
                <span class="relative inline-block font-semibold text-[#8C011F]">
                    1000+
                </span>
                perusahaan telah kami legalkan
            </p>

            <div class="overflow-hidden relative">
                <div id="logoCarouselWrapper" class="w-full">
                    <div id="logoCarousel"
                        class="flex gap-10 w-max animate-scroll whitespace-nowrap">
                        
                        @for ($i = 1; $i <= 10; $i++)
                            <img src="{{ asset("images/clients/logo-$i.png") }}"
                                alt="Logo Client {{ $i }}"
                                class="h-12 w-auto object-contain inline-block">
                        @endfor

                        {{-- Loop Duplicate --}}
                        @for ($i = 1; $i <= 10; $i++)
                            <img src="{{ asset("images/clients/logo-$i.png") }}"
                                alt="Logo Client {{ $i }} (Clone)"
                                class="h-12 w-auto object-contain inline-block">
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Services --}}
    <section class="bg-white py-16" id="services">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl lg:text-4xl font-semibold text-center mb-12">
                <span class="text-[#8C011F]">Layanan</span> Kami
            </h2>

            @php
                $layananCarousel = [
                    [
                        'title' => 'Paket PT Start-Up',
                        'harga' => 'Rp 5 Juta',
                        'desc' => 'Paket hemat untuk pendirian PT dengan modal di bawah 1 Miliar.',
                        'fitur' => [
                            'Akta Pendirian PT',
                            'SK Kemenkumham',
                            'NPWP PT',
                            'Nomor Induk Berusaha (NIB)',
                            'Akun OSS RBA',
                            'Sertifikat Standar',
                            'Aktivasi API',
                            'SPPL',
                            'UMK'
                        ],
                    ],
                    [
                        'title' => 'CV',
                        'harga' => 'Rp 3,5 Juta',
                        'desc' => 'Layanan pendirian CV yang cepat dan terjangkau.',
                        'fitur' => [
                            'Pembuatan Akta CV',
                            'SK Pengesahan Pengadilan',
                            'NPWP Badan',
                            'NIB (Nomor Induk Berusaha)',
                            'Surat Keterangan Domisili Usaha'
                        ],
                    ],
                    [
                        'title' => 'PT + Branding',
                        'harga' => 'Rp 6,5 Juta',
                        'desc' => 'Legalitas usaha sekaligus identitas brand profesional.',
                        'fitur' => [
                            'Pendirian PT & CV',
                            'Pengurusan Berkas & Administrasi',
                            'Branding & Rebranding',
                            'Social Media Management'
                        ],
                    ],
                    [
                        'title' => 'Pendaftaran Merek',
                        'harga' => 'Rp 3,5 Juta',
                        'desc' => 'Lindungi identitas brand Anda secara hukum.',
                        'fitur' => [
                            'Konsultasi & Analisis Merek',
                            'Permohonan & Monitoring',
                            'Layanan Pasca Pendaftaran',
                            'Sertifikat HKI'
                        ],
                    ],
                    [
                        'title' => 'Contract Drafting',
                        'harga' => 'Rp 1,5 – 2,5 Juta',
                        'desc' => 'Pembuatan dan review kontrak bisnis oleh tim hukum ahli.',
                        'fitur' => [
                            'Perjanjian Bahasa Indonesia – Rp 1,5 Juta',
                            'Perjanjian Bilingual (ENG-ID) – Rp 2,5 Juta'
                        ],
                    ],
                    [
                        'title' => 'SBUJK',
                        'harga' => 'Rp 21,5 Juta',
                        'desc' => 'Pengurusan SBUJK lengkap dengan SKK dan KTA.',
                        'fitur' => [
                            'KTA Asosiasi',
                            'Sertifikasi SKK Tenaga Ahli',
                            'Penerbitan SBUJK'
                        ],
                    ],
                ];
            @endphp

            <div class="relative">
                {{-- Prev --}}
                <button id="prevLayanan" class="absolute left-0 top-1/2 transform -translate-y-1/2 z-10 bg-[#EFAB01] hover:bg-[#d89a00] text-black p-2 rounded-full shadow-md">
                    ‹
                </button>

                {{-- Carousel Wrapper --}}
                <div id="layananViewport" class="overflow-hidden">
                    <div id="layananTrack" class="flex gap-8 transition-transform duration-500 ease-in-out">
                        @foreach ($layananCarousel as $layanan)
                            <div class="layanan-card min-w-[300px] max-w-[320px] bg-white border-2 border-[#8C011F] rounded-xl p-5 flex flex-col text-center shadow-sm shrink-0">
                                <h3 class="text-lg font-bold text-[#8C011F] mb-1">{{ $layanan['title'] }}</h3>
                                <p class="text-gray-600 text-sm mb-4">{{ $layanan['desc'] }}</p>

                                @if (!empty($layanan['fitur']))
                                    <ul class="text-sm text-left rounded-md p-4 mb-4 list-disc list-inside text-gray-700">
                                        @foreach ($layanan['fitur'] as $fitur)
                                            <li>{{ $fitur }}</li>
                                        @endforeach
                                    </ul>
                                @endif

                                <div class="mt-auto pt-4">
                                    <p class="text-lg font-semibold text-[#EFAB01] mb-3">{{ $layanan['harga'] }}</p>
                                    <a href="https://wa.me/message/UFGAP35HNAXVJ1" class="px-4 py-2 bg-[#8C011F] text-white rounded-md hover:bg-white hover:text-[#8C011F] border border-[#8C011F] transition">
                                        Konsultasi Sekarang →
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                {{-- Next --}}
                <button id="nextLayanan" class="absolute right-0 top-1/2 transform -translate-y-1/2 z-10 bg-[#EFAB01] hover:bg-[#d89a00] text-black p-2 rounded-full shadow-md">
                    ›
                </button>
            </div>
        </div>
    </section>

    <div class="mt-10 text-center">
        <a href="{{ route('layanan.page') }}"
            class="inline-block px-6 py-3 bg-[#8C011F] text-white font-semibold rounded-md border border-[#8C011F] 
                hover:bg-white hover:text-[#8C011F] transition">
            Lihat Semua Layanan →
        </a>
    </div>

    {{-- About Us --}}
    <section class="min-h-screen flex items-center justify-center py-16 px-6 bg-white" id="about-us">
        <div class="max-w-4xl w-full">
            <div class="text-center mb-10">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-3">Why Choose <span class="text-[#8C011F]">Us</span></h2>
                <p class="text-gray-600 text-base md:text-lg">
                    Kami memahami pentingnya legalitas yang cepat, jelas, dan terpercaya untuk keberlangsungan bisnis Anda.
                </p>
            </div>

            {{-- Items --}}
            <div class="space-y-8">
                {{-- Item 1 --}}
                <div class="flex items-start">
                    <div class="flex-shrink-0 mr-4">
                        <img src="{{ asset('images/item-1.png') }}" alt="Check Icon" class="w-12 h-12 object-contain">
                    </div>
                    <div>
                        <h4 class="text-lg font-semibold text-gray-800 mb-1">Berpengalaman Menyelesaikan berbagai Permasalahan Legalitas</h4>
                        <p class="text-gray-600 text-sm md:text-base">
                            Sejak 2022, kami telah membantu lebih dari 2500 klien dari berbagai sektor usaha untuk menyelesaikan legalitas secara tuntas dan tepat waktu.
                        </p>
                    </div>
                </div>

                {{-- Item 2 --}}
                <div class="flex items-start">
                    <div class="flex-shrink-0 mr-4">
                        <img src="{{ asset('images/item-2.png') }}" alt="Check Icon" class="w-10 h-10 object-contain">
                    </div>
                    <div>
                        <h4 class="text-lg font-semibold text-gray-800 mb-1">Proses Cepat dan Transparan</h4>
                        <p class="text-gray-600 text-sm md:text-base">
                            Deka Legal menjamin proses yang efisien, tanpa biaya tersembunyi, dengan pembaruan status layanan secara real-time.
                        </p>
                    </div>
                </div>

                {{-- Item 3 --}}
                <div class="flex items-start">
                    <div class="flex-shrink-0 mr-4">
                        <img src="{{ asset('images/item-3.png') }}" alt="Check Icon" class="w-12 h-12 object-contain">
                    </div>
                    <div>
                        <h4 class="text-lg font-semibold text-gray-800 mb-1">100% Pasti Online</h4>
                        <p class="text-gray-600 text-sm md:text-base">
                            Tanpa perlu datang ke kantor — seluruh proses konsultasi dan pengurusan dokumen bisa dilakukan secara digital, cepat, dan aman.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Testimoni --}}
    <section class="bg-white py-16" id="testimoni">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-2xl md:text-3xl font-semibold mb-2">
                <span class="text-[#8C011F]">Kepercayaan</span> Mereka
            </h2>
            <h3 class="text-2xl md:text-3xl font-semibold mb-4">
                Bukti Nyata <span class="text-[#8C011F]">Komitmen</span> Kami
            </h3>
            <p class="text-gray-600 mb-10 max-w-xl mx-auto">
                Temukan bagaimana kami menjadi bagian dari perjalanan legalitas berbagai bisnis di Indonesia secara tepat, efisien, dan terpercaya.
            </p>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @for ($i = 1; $i <= 4; $i++)
                    <div class="relative w-full aspect-[3/4] overflow-hidden rounded-lg border border-[#8C011F] shadow hover:shadow-lg transition duration-300">
                        {{-- Foto user --}}
                        <img src="{{ asset("images/testimoni/testi-$i.jpg") }}"
                            alt="Testimoni {{ $i }}"
                            class="absolute inset-0 w-full h-full object-cover">

                        {{-- Overlay template frame PNG transparan --}}
                        <img src="{{ asset('images/template/frame-testimoni.png') }}"
                            alt="Frame"
                            class="absolute inset-0 w-full h-full object-cover pointer-events-none">
                    </div>
                @endfor
            </div>

            <div class="mt-10">
                <a href="{{ url('/testimoni') }}"
                class="inline-block px-6 py-3 bg-[#8C011F] text-white font-semibold rounded-md hover:bg-white hover:text-[#8C011F] border border-[#8C011F] transition">
                    Lihat Semua Testimoni
                </a>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const carousel = document.getElementById("logoCarousel");
            const logos = carousel.children;
            const logoWidth = logos[0].offsetWidth + 40; // 40px from gap-10
            let currentOffset = 0;

            // Clone Logo
            for (let i = 0; i < 5; i++) {
                carousel.appendChild(logos[i].cloneNode(true));
            }

            setInterval(() => {
                currentOffset += logoWidth;

                if (currentOffset >= logoWidth * (logos.length)) {
                    currentOffset = 0;
                    carousel.style.transition = "none";
                    carousel.style.transform = `translateX(0px)`;
                    setTimeout(() => {
                        carousel.style.transition = "transform 0.7s ease-in-out";
                    }, 50);
                } else {
                    carousel.style.transform = `translateX(-${currentOffset}px)`;
                }
            }, 2000);
        });
    </script>
@endpush

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const track = document.getElementById('layananTrack');
        const viewport = document.getElementById('layananViewport');
        const cards = track.querySelectorAll('.layanan-card');
        const prevBtn = document.getElementById('prevLayanan');
        const nextBtn = document.getElementById('nextLayanan');

        let cardWidth = cards[0].offsetWidth + 32; // 32px dari gap-8
        let visibleCount = Math.floor(viewport.offsetWidth / cardWidth);
        let maxPosition = Math.max(0, cards.length - visibleCount);
        let currentPosition = 0;

        const updateTransform = () => {
            track.style.transform = `translateX(-${currentPosition * cardWidth}px)`;

            // Disable button if at edges
            prevBtn.disabled = currentPosition === 0;
            nextBtn.disabled = currentPosition >= maxPosition;

            // Optional styling for disabled buttons
            prevBtn.classList.toggle('opacity-50', prevBtn.disabled);
            nextBtn.classList.toggle('opacity-50', nextBtn.disabled);
        };

        updateTransform();

        nextBtn.addEventListener('click', () => {
            if (currentPosition < maxPosition) {
                currentPosition++;
                updateTransform();
            }
        });

        prevBtn.addEventListener('click', () => {
            if (currentPosition > 0) {
                currentPosition--;
                updateTransform();
            }
        });

        // Recalculate on window resize
        window.addEventListener('resize', () => {
            cardWidth = cards[0].offsetWidth + 32;
            visibleCount = Math.floor(viewport.offsetWidth / cardWidth);
            maxPosition = Math.max(0, cards.length - visibleCount);
            if (currentPosition > maxPosition) currentPosition = maxPosition;
            updateTransform();
        });
    });
</script>
@endpush

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>

<script>
(function () {
    let width, height, canvas, ctx, points, target = { x: 0, y: 0 }, animate = true;

    init();
    animateCanvas();
    addListeners();

    function init() {
        width = window.innerWidth;
        height = window.innerHeight;

        canvas = document.getElementById('connect-canvas');
        canvas.width = width;
        canvas.height = height;
        ctx = canvas.getContext('2d');

        points = [];
        for (let x = 0; x < width; x += width / 20) {
            for (let y = 0; y < height; y += height / 20) {
                let px = x + Math.random() * width / 20;
                let py = y + Math.random() * height / 20;
                let p = { x: px, originX: px, y: py, originY: py };
                points.push(p);
            }
        }

        for (let i = 0; i < points.length; i++) {
            let closest = [];
            let p1 = points[i];
            for (let j = 0; j < points.length; j++) {
                let p2 = points[j];
                if (p1 !== p2) {
                    if (closest.length < 5) {
                        closest.push(p2);
                    } else {
                        for (let k = 0; k < 5; k++) {
                            if (getDistance(p1, p2) < getDistance(p1, closest[k])) {
                                closest[k] = p2;
                                break;
                            }
                        }
                    }
                }
            }
            p1.closest = closest;
            p1.circle = new Circle(p1, 2 + Math.random() * 2, 'rgba(140, 1, 31, 0.3)');
        }

        points.forEach(p => shiftPoint(p));
    }

    function addListeners() {
        if (!('ontouchstart' in window)) {
            window.addEventListener('mousemove', e => {
                target.x = e.pageX;
                target.y = e.pageY;
            });
        }
        window.addEventListener('resize', resize);
    }

    function resize() {
        width = window.innerWidth;
        height = window.innerHeight;
        canvas.width = width;
        canvas.height = height;
    }

    function animateCanvas() {
        if (animate) {
            ctx.clearRect(0, 0, width, height);
            points.forEach(p => {
                let dist = getDistance(target, p);
                if (dist < 4000) {
                    p.active = 0.3;
                    p.circle.active = 0.6;
                } else if (dist < 20000) {
                    p.active = 0.1;
                    p.circle.active = 0.3;
                } else if (dist < 40000) {
                    p.active = 0.02;
                    p.circle.active = 0.1;
                } else {
                    p.active = 0;
                    p.circle.active = 0;
                }

                drawLines(p);
                p.circle.draw();
            });
        }
        requestAnimationFrame(animateCanvas);
    }

    function shiftPoint(p) {
        gsap.to(p, {
            duration: 1 + 1 * Math.random(),
            x: p.originX - 50 + Math.random() * 100,
            y: p.originY - 50 + Math.random() * 100,
            ease: "sine.inOut",
            onComplete: () => shiftPoint(p)
        });
    }

    function drawLines(p) {
        if (!p.active) return;
        p.closest.forEach(cp => {
            ctx.beginPath();
            ctx.moveTo(p.x, p.y);
            ctx.lineTo(cp.x, cp.y);
            ctx.strokeStyle = `rgba(140,1,31,${p.active})`;
            ctx.stroke();
        });
    }

    function Circle(pos, rad, color) {
        this.pos = pos;
        this.radius = rad;
        this.color = color;

        this.draw = function () {
            if (!this.active) return;
            ctx.beginPath();
            ctx.arc(this.pos.x, this.pos.y, this.radius, 0, 2 * Math.PI, false);
            ctx.fillStyle = `rgba(140,1,31,${this.active})`;
            ctx.fill();
        };
    }

    function getDistance(p1, p2) {
        return Math.pow(p1.x - p2.x, 2) + Math.pow(p1.y - p2.y, 2);
    }
})();
</script>
@endpush