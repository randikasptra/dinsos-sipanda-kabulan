@props([
    'id',
    'judul',
    'persentase',
    'em',
    'maksimal',
    'warna' => 'bg-green-500',
    'detail' => []
])

<div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-2xl transition cursor-pointer">
    <div onclick="toggleDropdown('{{ $id }}')" class="flex justify-between items-center">
        <div>
            <h3 class="text-xl font-bold mb-2">{{ $judul }}</h3>
            <p class="text-gray-600 mb-1">
                {{ $persentase }}% | EM <span class="font-semibold text-green-600">{{ $em }}</span> |
                Nilai Maksimal <span class="font-semibold text-gray-600">{{ $maksimal }}</span>
            </p>
            <div class="w-full bg-gray-200 rounded-full h-3 mb-2">
                <div class="{{ $warna }} h-3 rounded-full" style="width: {{ $persentase }}%"></div>
            </div>
        </div>
        <button
            class="text-blue-700 hover:text-blue-900 font-bold text-2xl transform transition-transform duration-300"
            id="icon-{{ $id }}">+</button>
    </div>

    @if (!empty($detail))
        <div id="{{ $id }}" class="hidden mt-4 space-y-4">
            @foreach ($detail as $item)
                <div class="{{ $loop->odd ? 'bg-green-100' : 'bg-gray-100' }} p-4 rounded-lg">
                    <div class="font-semibold mb-2">{{ $item['judul'] }}</div>
                    <div class="flex flex-col md:flex-row items-center justify-between">
                        <div class="flex items-center space-x-3">
                            <span class="bg-blue-900 text-white text-xs font-bold py-1 px-2 rounded-full">
                                {{ $item['progres'] }}
                            </span>
                            <span class="bg-green-500 text-white text-xs font-bold py-1 px-2 rounded-full">
                                {{ $item['nilai'] }}
                            </span>
                            <span class="bg-blue-900 text-white text-xs font-bold py-1 px-2 rounded-full">
                                Nilai Maksimal {{ $item['maksimal'] }}
                            </span>
                        </div>
                        <a href="{{ $item['link'] }}"
                            class="mt-2 md:mt-0 bg-sky-400 hover:bg-sky-500 text-white text-xs font-semibold py-2 px-4 rounded-full">
                            Proses
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
