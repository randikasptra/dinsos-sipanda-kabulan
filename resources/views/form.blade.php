@extends('layouts.dashboard')

@section('content')
    <div class="max-w-4xl mx-auto p-6 bg-white rounded-2xl shadow-lg space-y-6">

        <!-- Header -->
        <div class="text-blue-800 border-b pb-4">
            <h2 class="text-2xl font-bold">01. Peraturan/Kebijakan Daerah tentang Kabupaten/Kota Layak Anak</h2>
            <p class="text-sm mt-1 text-gray-500">Silakan isi pertanyaan di bawah dengan benar dan unggah dokumen pendukung
            </p>
        </div>

        <!-- Pertanyaan -->
        <div class="space-y-4">
            <p class="text-gray-700 font-semibold">Apakah tersedia peraturan daerah terkait penyelenggaraan Kabupaten/Kota
                Layak Anak?</p>

            <!-- Opsi jawaban -->
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

                @foreach ($options as $index => $option)
                    <label class="flex items-start space-x-3">
                        <input type="radio" name="jawaban" value="{{ $option }}"
                            class="text-sky-500 focus:ring-2 focus:ring-sky-500">
                        <span class="text-gray-700">{{ $option }}</span>
                    </label>
                @endforeach
            </div>
        </div>

        <!-- Catatan -->
        <div>
            <label for="catatan" class="block text-gray-700 font-semibold mb-1">Catatan Tambahan (opsional)</label>
            <textarea id="catatan" name="catatan" rows="3"
                class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-sky-500"
                placeholder="Tambahkan informasi tambahan jika ada..."></textarea>
        </div>

        <!-- Upload lampiran -->
        <div>
            <label for="file" class="block text-gray-700 font-semibold mb-1">Lampiran Dokumen Pendukung
                (PDF/Excel)</label>
            <input type="file" id="file" name="lampiran"
                class="w-full bg-white border border-gray-300 rounded-lg p-2 text-sm focus:outline-none focus:ring-2 focus:ring-sky-500">
        </div>

        <!-- Tombol submit -->
        <div class="text-right">
            <button type="submit"
                class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-2 rounded-xl transition-all shadow">
                Simpan & Kirim
            </button>
        </div>
    </div>
@endsection
