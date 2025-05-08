<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $klasters = [
            [
                'id' => 'kelembagaan',
                'title' => 'Kelembagaan',
                'nilai_em' => 146.00,
                'nilai_maksimal' => 164.00,
                'progres' => 100,
                'sub_poin' => [
                    [
                        'judul' => 'Peraturan Daerah tentang SIPANDAKABULAN',
                        'terpenuhi' => '[4/4]',
                        'nilai' => '88.00',
                        'maksimal' => '96.00',
                        'link' => '#',
                    ],
                    // ...poin lainnya
                ],
            ],
            // ...klaster lainnya
        ];

        return view('pages.dashboard', compact('klasters'));
    }
}
