@props(['id', 'title', 'nilaiEm', 'nilaiMaksimal', 'progres'])

<a href="{{ route('form.show', $id) }}"
    class="block bg-white border border-gray-200 rounded-xl shadow-sm hover:shadow-md transition-all duration-300 hover:ring-2 hover:ring-sky-400">

    <!-- Header -->
    <div class="px-6 py-4 bg-gradient-to-r from-sky-500 to-blue-600 text-white rounded-t-xl">
        <h3 class="text-lg font-semibold tracking-wide">{{ $title }}</h3>
        <p class="text-sm mt-1">
            {{ $progres }}% | EM
            <span class="font-bold">{{ number_format($nilaiEm, 2) }}</span>
            | Maks
            <span>{{ number_format($nilaiMaksimal, 2) }}</span>
        </p>
    </div>

    <!-- Progress bar -->
    <div class="h-2 bg-gray-200">
        <div class="h-2 bg-green-500 transition-all duration-500" style="width: {{ $progres }}%"></div>
    </div>

    <!-- CTA -->
    <div class="px-6 py-4">
        <button class="w-full text-center bg-sky-500 hover:bg-sky-600 text-white py-2 rounded-full font-semibold transition duration-300">
            Proses Penilaian
        </button>
    </div>
</a>
