@props([
    'title',
    'desc',
    'harga' => null,
    'fitur' => []
])

<div class="bg-white border-2 border-[#8C011F] rounded-xl p-6 shadow-sm flex flex-col justify-between h-full text-center">
    <div>
        <h4 class="text-lg font-bold text-[#8C011F] mb-2">{{ $title }}</h4>
        <p class="text-sm text-gray-600 mb-4">{{ $desc }}</p>

        @if (!empty($fitur))
            <ul class="text-sm text-gray-700 list-disc pl-5 text-left mb-4">
                @foreach ($fitur as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ul>
        @endif
    </div>

    <div class="mt-auto pt-4">
        @if (!empty($harga))
            <p class="text-[#EFAB01] font-bold text-base mb-3">{{ $harga }}</p>
        @endif
        <a href="https://wa.me/message/UFGAP35HNAXVJ1"
           class="inline-block w-full text-white bg-[#8C011F] border border-[#8C011F] px-4 py-2 rounded-md hover:bg-white hover:text-[#8C011F] transition font-medium">
            Konsultasi Sekarang
        </a>
    </div>
</div>
