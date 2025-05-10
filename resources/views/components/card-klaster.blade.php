@props(['id', 'title', 'nilaiEm', 'nilaiMaksimal', 'progres', 'subPoin'])

<div x-data
    class="bg-white border border-gray-200 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all duration-300">

    <!-- Header -->
    <button @click="$root.openId = ($root.openId === @js($id)) ? null : @js($id)"
        class="w-full flex justify-between items-center px-6 py-4 bg-gradient-to-r from-sky-500 to-blue-600 text-white hover:to-blue-700 focus:outline-none">
        <div class="text-left">
            <h3 class="text-lg font-semibold tracking-wide">{{ $title }}</h3>
            <p class="text-sm mt-1">{{ $progres }}% | EM
                <span class="font-bold">{{ number_format($nilaiEm, 2) }}</span>
                | Maks
                <span>{{ number_format($nilaiMaksimal, 2) }}</span>
            </p>
        </div>
        <svg :class="{ 'rotate-180': $root.openId === '{{ $id }}' }"
            class="w-5 h-5 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg>
    </button>

    <!-- Progress -->
    <div class="h-2 bg-gray-200">
        <div class="h-2 bg-green-500" style="width: {{ $progres }}%"></div>
    </div>

    <!-- Content -->
    <div x-show="$root.openId === '{{ $id }}'" x-transition class="p-4 space-y-4 bg-gray-50">
        @forelse ($subPoin as $poin)
            <div class="bg-white rounded-lg p-4 shadow border border-gray-100">
                <div class="font-medium text-gray-800 mb-2">{{ $poin['judul'] }}</div>
                <div class="flex flex-col md:flex-row items-center justify-between gap-4 text-sm">
                    <div class="flex gap-2 flex-wrap">
                        <span
                            class="bg-blue-600 text-white px-2 py-1 rounded-full font-semibold">{{ $poin['terpenuhi'] }}</span>
                        <span
                            class="bg-green-500 text-white px-2 py-1 rounded-full font-semibold">{{ $poin['nilai'] }}</span>
                        <span class="bg-gray-700 text-white px-2 py-1 rounded-full font-semibold">Maks
                            {{ $poin['maksimal'] }}</span>
                    </div>
                    <a href="{{ $poin['link'] }}"
                        class="mt-2 md:mt-0 bg-sky-500 hover:bg-sky-600 text-white px-4 py-1 rounded-full text-xs font-semibold transition">
                        Proses
                    </a>
                </div>
            </div>
        @empty
            <p class="text-sm text-gray-500 italic">Belum ada data sub poin.</p>
        @endforelse
    </div>
</div>
