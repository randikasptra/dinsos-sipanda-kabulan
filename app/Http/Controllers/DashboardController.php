<?php

namespace App\Http\Controllers;

use App\Models\Klaster;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $klasters = Klaster::with('poin')->get();

        $formatted = $klasters->map(function ($klaster) {
            return [
                'id' => $klaster->id,
                'title' => $klaster->nama,
                'nilai_em' => $klaster->poin->sum('nilai'),
                'nilai_maksimal' => $klaster->poin->sum('nilai_maksimal'),
                'progres' => 100,
                'sub_poin' => $klaster->poin->map(function ($poin) {
                    return [
                        'id' => $poin->id,
                        'judul' => $poin->judul,
                        'nilai' => $poin->nilai,
                        'maksimal' => $poin->nilai_maksimal,
                        'terpenuhi' => "[{$poin->terpenuhi}/{$poin->total}]",
                    ];
                })->toArray()
            ];
        })->toArray();

        dd($formatted); // debug apakah isi klasternya ada

        return view('pages.dashboard', ['klasters' => $formatted]);
    }
}
