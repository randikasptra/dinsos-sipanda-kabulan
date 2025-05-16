<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class FormController extends Controller
{
    // Tampilkan form berdasarkan ID poin
    public function show($id)
    {
        // Ambil data poin dari database (misal tabel 'poin')
        $poin = DB::table('poins')->where('id', $id)->first();


        // Jika tidak ditemukan
        if (!$poin) {
            abort(404, 'Poin tidak ditemukan.');
        }

        return view('form', compact('poin'));
    }

    // Simpan data form
    public function store(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'jawaban' => 'required|string',
            'catatan' => 'nullable|string',
            'lampiran' => 'nullable|file|mimes:pdf,xls,xlsx|max:2048',
        ]);

        // Simpan file jika ada
        $lampiranPath = null;
        if ($request->hasFile('lampiran')) {
            $lampiranPath = $request->file('lampiran')->store('lampiran', 'public');
        }

        // Simpan data ke tabel (misal 'jawaban_poin')
        DB::table('jawaban_poin')->insert([
            'poin_id'     => $id,
            'user_id'     => auth()->id(), // pastikan user sudah login
            'jawaban'     => $request->input('jawaban'),
            'catatan'     => $request->input('catatan'),
            'lampiran'    => $lampiranPath,
            'created_at'  => now(),
            'updated_at'  => now(),
        ]);

        return redirect()->route('dashboard')->with('success', 'Data berhasil disimpan.');
    }
}
