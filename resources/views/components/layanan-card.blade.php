@props(['title', 'harga', 'desc' => null, 'fitur' => []])

@php
    $isMulaiDari = Str::startsWith(Str::lower($harga), ['mulai', 'start', 'starts from']);
@endphp

<div class="bg-white rounded-xl shadow-md overflow-hidden flex flex-col justify-between min-h-[460px] hover:shadow-xl transition-all duration-300">
    <div class="p-6 flex-1 flex flex-col">
        {{-- Title & Harga --}}
        <div class="mb-4">
            <h3 class="text-lg font-semibold text-[#8C011F] mb-1">{{ $title }}</h3>
            <p class="text-2xl font-bold text-gray-900">
                @if($isMulaiDari)
                    <span class="text-sm font-medium text-gray-500 block">Mulai dari</span>
                    {{ Str::replaceFirst('Mulai dari ', '', $harga) }}
                @else
                    {{ $harga }}
                @endif
            </p>
        </div>

        {{-- Deskripsi singkat --}}
        @if($desc)
            <p class="text-gray-600 text-sm leading-relaxed mb-4">{{ $desc }}</p>
        @endif

        {{-- Fitur scrollable --}}
        @if(count($fitur))
            <div class="text-sm text-gray-800 flex-1 overflow-y-auto pr-1 max-h-40 mb-4">
                <ul class="space-y-2">
                    @foreach($fitur as $item)
                        <li class="flex items-start gap-2">
                            <svg class="w-4 h-4 text-[#8C0120] mt-[2px]" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414L8.414 15l-4.121-4.121a1 1 0 111.414-1.414L8.414 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span>{{ $item }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

    {{-- Tombol CTA --}}
    <div class="bg-gray-50 px-6 py-4">
        <a href="https://wa.me/message/UFGAP35HNAXVJ1"
            class="w-full block text-center bg-[#8C0120] hover:bg-[#A11D34] text-white font-semibold py-2 rounded-lg transition-all duration-300">
            <svg class="w-5 h-5 inline-block mr-1 -mt-1" fill="currentColor" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                <path d="M16.004 2.991c-7.355 0-13.333 5.979-13.333 13.333 0 2.354.614 4.646 1.782 6.666L2.67 29.333l6.496-1.689c1.956 1.043 4.157 1.592 6.338 1.592h.001c7.355 0 13.334-5.978 13.334-13.333.001-7.355-5.978-13.334-13.333-13.334zm0 24.889h-.001a11.48 11.48 0 01-5.58-1.441l-.4-.228-3.86 1.002 1.03-3.755-.26-.387a11.398 11.398 0 01-1.777-6.177c0-6.312 5.138-11.449 11.449-11.449 6.312 0 11.45 5.137 11.45 11.449 0 6.311-5.138 11.439-11.451 11.439zm6.292-8.499c-.343-.172-2.03-1.004-2.344-1.118-.313-.115-.542-.172-.77.172s-.885 1.117-1.086 1.345c-.2.229-.4.258-.742.086-.343-.172-1.448-.532-2.755-1.697-1.018-.908-1.707-2.029-1.91-2.373-.199-.343-.021-.529.15-.7.155-.154.344-.4.515-.601.172-.2.229-.344.343-.573.115-.229.057-.43-.029-.602-.086-.171-.77-1.856-1.055-2.547-.277-.665-.562-.574-.77-.584l-.656-.012c-.228 0-.6.086-.914.43-.313.343-1.2 1.172-1.2 2.855s1.229 3.309 1.4 3.537c.172.229 2.418 3.693 5.857 5.177.819.354 1.459.566 1.957.726.822.262 1.571.225 2.161.137.659-.099 2.03-.83 2.316-1.633.285-.802.285-1.488.199-1.633-.086-.144-.314-.229-.656-.4z" />
            </svg>
            Hubungi Kami
        </a>
    </div>
</div>