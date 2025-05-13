<div x-data="{ open: false }"
    class="bg-white border border-gray-200 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all duration-300">

    <!-- Header -->
    <button @click="open = !open"
        class="w-full flex justify-between items-center px-6 py-4 bg-gradient-to-r from-sky-500 to-blue-600 text-white hover:to-blue-700 focus:outline-none">
        <div class="text-left">
            <h3 class="text-lg font-semibold tracking-wide">Kelembagaan</h3>
            <p class="text-sm mt-1">100% | EM <span class="font-bold">146.00</span> | Maks <span>164.00</span></p>
        </div>
        <svg :class="{ 'rotate-180': open }" class="w-5 h-5 transition-transform duration-300" fill="none"
            stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg>
    </button>

    <!-- Progress bar -->
    <div class="h-2 bg-gray-200">
        <div class="h-2 bg-green-500" style="width: 100%"></div>
    </div>

    <!-- Sub poin -->
    <div x-show="open" x-transition class="p-4 space-y-4 bg-gray-50">
        <!-- Item 1 -->
        <div class="bg-white rounded-lg p-4 shadow border border-gray-100">
            <div class="font-medium text-gray-800 mb-2">Peraturan Daerah tentang SIPANDAKABULAN</div>
            <div class="flex flex-col md:flex-row justify-between items-center gap-4 text-sm">
                <div class="flex gap-2 flex-wrap">
                    <span class="bg-blue-600 text-white px-2 py-1 rounded-full font-semibold">[4/4]</span>
                    <span class="bg-green-500 text-white px-2 py-1 rounded-full font-semibold">88.00</span>
                    <span class="bg-gray-700 text-white px-2 py-1 rounded-full font-semibold">Maks 96.00</span>
                </div>
                <a href="/form/1"
                    class="inline-block bg-sky-500 hover:bg-sky-600 text-white px-4 py-1 rounded-full text-xs font-semibold transition">
                    Proses
                </a>
            </div>
        </div>

        <!-- Item 2 -->
        <div class="bg-white rounded-lg p-4 shadow border border-gray-100">
            <div class="font-medium text-gray-800 mb-2">Penguatan Kelembagaan</div>
            <div class="flex flex-col md:flex-row justify-between items-center gap-4 text-sm">
                <div class="flex gap-2 flex-wrap">
                    <span class="bg-blue-600 text-white px-2 py-1 rounded-full font-semibold">[7/7]</span>
                    <span class="bg-green-500 text-white px-2 py-1 rounded-full font-semibold">31.00</span>
                    <span class="bg-gray-700 text-white px-2 py-1 rounded-full font-semibold">Maks 36.00</span>
                </div>
                <a href="/form/2"
                    class="inline-block bg-sky-500 hover:bg-sky-600 text-white px-4 py-1 rounded-full text-xs font-semibold transition">
                    Proses
                </a>
            </div>
        </div>

        <!-- Item 3 -->
        <div class="bg-white rounded-lg p-4 shadow border border-gray-100">
            <div class="font-medium text-gray-800 mb-2">Peran Dunia Usaha dan Media</div>
            <div class="flex flex-col md:flex-row justify-between items-center gap-4 text-sm">
                <div class="flex gap-2 flex-wrap">
                    <span class="bg-blue-600 text-white px-2 py-1 rounded-full font-semibold">[8/8]</span>
                    <span class="bg-green-500 text-white px-2 py-1 rounded-full font-semibold">27.00</span>
                    <span class="bg-gray-700 text-white px-2 py-1 rounded-full font-semibold">Maks 32.00</span>
                </div>
                <a href="/form/3"
                    class="inline-block bg-sky-500 hover:bg-sky-600 text-white px-4 py-1 rounded-full text-xs font-semibold transition">
                    Proses
                </a>
            </div>
        </div>
    </div>
</div>
