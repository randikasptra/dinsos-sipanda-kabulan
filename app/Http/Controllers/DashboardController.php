<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Klaster;
use App\Models\Poin;

class DashboardController extends Controller
{
    public function index()
    {
        // Ambil semua klaster beserta relasi poin-nya
        $klasters = Klaster::with('poin')->get();

        // Format data untuk ditampilkan di dashboard
        $formatted = $klasters->map(function ($klaster) {
            $totalMaksimal = $klaster->poin->sum('nilai_maksimal') ?: 1;
            $totalNilai = $klaster->poin->sum('nilai');
            $progres = ($totalNilai / $totalMaksimal) * 100;

            return [
                'id' => $klaster->id,
                'title' => $klaster->nama,
                'nilai_em' => $totalNilai,
                'nilai_maksimal' => $totalMaksimal,
                'progres' => round($progres, 2),
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

        // Kirim ke view
        return view('pages.dashboard', ['klasters' => $formatted]);
    }
}
