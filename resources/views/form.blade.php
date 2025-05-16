@extends('layouts.dashboard')

@section('content')
    <form action="{{ route('form.store', $poin->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="max-w-4xl mx-auto p-6 bg-white rounded-2xl shadow space-y-6">

            <h2 class="text-xl font-bold text-blue-800">{{ $poin->judul }}</h2>
            <p class="text-sm text-gray-500">Silakan isi form berikut:</p>

            <div class="space-y-2">
                @php
                    $options = [
                        'Peraturan Daerah tentang KLA',
                        'Peraturan Bupati / Walikota',
                        'Instruksi Bupati / Walikota',
                        'Surat Edaran Bupati / Walikota',
                        'Peraturan lainnya',
                        'Tidak',
                    ];
                @endphp

                @foreach ($options as $option)
                    <label class="flex items-start space-x-3">
                        <input type="radio" name="jawaban" value="{{ $option }}"
                            class="text-sky-500 focus:ring-2 focus:ring-sky-500" required>
                        <span class="text-gray-700">{{ $option }}</span>
                    </label>
                @endforeach
            </div>

            <div>
                <label for="catatan" class="block text-gray-700 font-semibold">Catatan</label>
                <textarea name="catatan" id="catatan" rows="3" class="w-full border border-gray-300 rounded-lg p-3"></textarea>
            </div>

            <div>
                <label for="lampiran" class="block text-gray-700 font-semibold">Lampiran (PDF/Excel)</label>
                <input type="file" name="lampiran" id="lampiran" class="w-full border border-gray-300 rounded-lg p-2">
            </div>

            <div class="text-right">
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg shadow">
                    Simpan & Kirim
                </button>
            </div>
        </div>
    </form>
@endsection
