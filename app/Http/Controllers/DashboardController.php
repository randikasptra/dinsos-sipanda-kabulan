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
            $totalMaksimal = $klaster->poin->sum('nilai_maksimal') ?: 1;
            $totalNilai = $klaster->poin->sum('nilai');
            $progres = ($totalNilai / $totalMaksimal) * 100;

            return [
                'id' => $klaster->id,
                'title' => $klaster->nama,
                'nilai_em' => round($totalNilai, 2),
                'nilai_maksimal' => round($totalMaksimal, 2),
                'progres' => round($progres, 2),
                'sub_poin' => $klaster->poin->map(function ($poin) {
                    return [
                        'id' => $poin->id,
                        'judul' => $poin->judul,
                        'nilai' => $poin->nilai,
                        'maksimal' => $poin->nilai_maksimal,
                        'terpenuhi' => "[{$poin->terpenuhi}/{$poin->total}]",
                    ];
                })->toArray(),
            ];
        });
        


        return view('pages.dashboard', ['klasters' => $formatted]);
    }
    
}
