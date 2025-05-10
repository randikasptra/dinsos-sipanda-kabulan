@props(['id', 'title', 'nilaiEm', 'nilaiMaksimal', 'progres', 'subPoin'])

<div x-data="{ open: false }" class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-2xl transition">
    <div @click="open = !open" class="flex justify-between items-center cursor-pointer">
        <div>
            <h3 class="text-xl font-bold mb-2">{{ $title }}</h3>
            <p class="text-gray-600 mb-1">{{ $progres }}% | EM 
                <span class="font-semibold text-green-600">{{ number_format($nilaiEm, 2) }}</span> 
                | Nilai Maksimal 
                <span class="font-semibold text-gray-600">{{ number_format($nilaiMaksimal, 2) }}</span>
            </p>
            <div class="w-full bg-gray-200 rounded-full h-3 mb-2">
                <div class="bg-green-500 h-3 rounded-full" style="width: {{ $progres }}%"></div>
            </div>
        </div>
        <button class="text-blue-700 hover:text-blue-900 font-bold text-2xl">
            <span x-text="open ? '−' : '+'"></span>
        </button>
    </div>

    <div x-show="open" x-transition class="mt-4 space-y-4">
        @foreach ($subPoin as $poin)
            <div class="bg-gray-100 p-4 rounded-lg">
                <div class="font-semibold mb-2">{{ $poin['judul'] }}</div>
                <div class="flex flex-col md:flex-row items-center justify-between">
                    <div class="flex items-center space-x-3">
                        <span class="bg-blue-900 text-white text-xs font-bold py-1 px-2 rounded-full">{{ $poin['terpenuhi'] }}</span>
                        <span class="bg-green-500 text-white text-xs font-bold py-1 px-2 rounded-full">{{ $poin['nilai'] }}</span>
                        <span class="bg-blue-900 text-white text-xs font-bold py-1 px-2 rounded-full">Nilai Maksimal {{ $poin['maksimal'] }}</span>
                    </div>
                    <a href="{{ $poin['link'] }}"
                       class="mt-2 md:mt-0 bg-sky-400 hover:bg-sky-500 text-white text-xs font-semibold py-2 px-4 rounded-full">
                        Proses
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>
