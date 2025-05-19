@extends('layouts.dashboard')

@section('content')
<form action="{{ route('form.store', $poin->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="max-w-3xl mx-auto p-6 bg-white rounded-xl shadow space-y-6">

        <h2 class="text-xl font-bold text-blue-800 mb-2">{{ $poin->judul }}</h2>
        <p class="text-sm text-gray-500 mb-4">Silakan jawab pertanyaan berikut:</p>

        {{-- Pertanyaan --}}
        <div>
            <p class="font-semibold text-gray-700 mb-2">{{ $pertanyaan }}</p>
            @foreach ($opsi as $key => $option)
                <label class="flex items-start space-x-3 mb-2">
                    <input type="radio" name="jawaban" value="{{ $option }}" required
                        class="text-sky-500 focus:ring-2 focus:ring-sky-500">
                    <span class="text-gray-800">{{ $option }}</span>
                </label>
            @endforeach
        </div>

        {{-- Download Matriks --}}
        @if ($fileMatriks)
        <div>
            <p class="text-gray-700 font-medium mb-2">Download Matriks Evaluasi</p>
            <a href="{{ asset($fileMatriks) }}" download
                class="inline-block bg-green-600 text-white px-4 py-2 rounded-full hover:bg-green-700 transition">
                📥 Download Matriks
            </a>
        </div>
        @endif

        {{-- Upload Lampiran --}}
        <div>
            <label for="lampiran" class="block text-gray-700 font-semibold mb-2">Sisipkan Dokumen Pendukung</label>
            <input type="file" name="lampiran" id="lampiran"
                class="w-full border border-gray-300 rounded-lg p-2" accept=".pdf,.xls,.xlsx">
        </div>

        {{-- Catatan --}}
        <div>
            <label for="catatan" class="block text-gray-700 font-semibold mb-2">Catatan Tambahan (opsional)</label>
            <textarea name="catatan" id="catatan" rows="3"
                class="w-full border border-gray-300 rounded-lg p-3"></textarea>
        </div>

        <div class="text-right">
            <button type="submit"
                class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg shadow">
                Simpan & Kirim
            </button>
        </div>
    </div>
</form>
@endsection
