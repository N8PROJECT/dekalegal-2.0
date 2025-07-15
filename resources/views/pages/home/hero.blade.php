{{-- Hero --}}
<section class="relative bg-white h-screen overflow-hidden" id="hero">
    <div id="connect-bg" class="absolute inset-0 z-0">
        <canvas id="connect-canvas" class="w-full h-full"></canvas>
    </div>

    <div class="relative z-10 h-full flex flex-col justify-center items-center text-center px-4">
        <h1 class="text-4xl md:text-6xl font-bold text-gray-800 mb-6 leading-tight">
            Solusi <span class="font-light text-[#8C011F]">Legalitas</span>
        </h1>

        <p class="text-2xl md:text-5xl font-light text-[#8C011F] mb-10 md:mb-12 leading-snug tracking-tight">
            Usaha & Perpajakan <span class="font-semibold text-gray-800">Terintegrasi.</span>
        </p>

        <div class="flex flex-wrap gap-4 justify-center">
            <a href="https://wa.me/message/UFGAP35HNAXVJ1"
                class="px-8 py-4 text-lg rounded-lg border border-[#8C011F] bg-[#8C011F] text-white 
                       hover:bg-white hover:text-[#8C011F] transition font-semibold">
                Konsultasi Sekarang
            </a>
            <a href="{{ url('/layanan') }}"
                class="px-8 py-4 text-lg rounded-lg border border-gray-500 text-gray-700
                       hover:bg-[#F0AC01] hover:border-[#F0AC01] hover:text-white transition font-semibold">
                Lihat Layanan
            </a>
        </div>
    </div>
</section>

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