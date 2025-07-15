{{-- Clients --}}
<section class="bg-white py-10" id="clients" data-aos="fade-up">
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