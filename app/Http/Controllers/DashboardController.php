<?php

namespace App\Http\Controllers;

use App\Models\Klaster;
use Illuminate\Http\Request;

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
                'nilai_em' => round($totalNilai, 2),
                'nilai_maksimal' => round($totalMaksimal, 2),
                'progres' => round($progres, 2),
                'sub_poin' => $klaster->poin->map(function ($poin) {
                    return [
                        'id' => $poin->id,
                        'judul' => $poin->judul,
                        'nilai' => round($poin->nilai, 2),
                        'maksimal' => round($poin->nilai_maksimal, 2),
                        'terpenuhi' => "[{$poin->terpenuhi}/{$poin->total}]",
                    ];
                })->toArray()
            ];
        })->toArray();

        // Kirim ke view
        return view('pages.dashboard', compact('formatted'));
    }
}
