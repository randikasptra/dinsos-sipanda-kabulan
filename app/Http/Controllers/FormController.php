<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class FormController extends Controller
{
    public function show($id)
    {
        $poin = DB::table('poins')->where('id', $id)->first();

        if (!$poin) {
            abort(404, 'Poin tidak ditemukan.');
        }

        return view('form', compact('poin'));
    }

    public function store(Request $request, $id)
    {
        $request->validate([
            'jawaban' => 'required|string',
            'catatan' => 'nullable|string',
            'lampiran' => 'nullable|file|mimes:pdf,xls,xlsx|max:2048',
        ]);

        $lampiranPath = null;
        if ($request->hasFile('lampiran')) {
            $lampiranPath = $request->file('lampiran')->store('lampiran', 'public');
        }

        DB::table('jawaban_poin')->insert([
            'poin_id'     => $id,
            'user_id'     => Auth::id(),
            'jawaban'     => $request->input('jawaban'),
            'catatan'     => $request->input('catatan'),
            'lampiran'    => $lampiranPath,
            'created_at'  => now(),
            'updated_at'  => now(),
        ]);

        return redirect()->route('dashboard')->with('success', 'Data berhasil disimpan.');
    }
}
