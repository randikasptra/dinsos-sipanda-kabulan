// app/Http/Controllers/DashboardController.php
public function index()
{
    $klasters = [
        [
            'id' => 'kelembagaan',
            'title' => 'Kelembagaan',
            'nilai_em' => 146.00,
            'nilai_maksimal' => 164.00,
            'progres' => 100,
            'sub_poin' => [],
        ],
        // ...klaster lainnya
    ];

    return view('pages.dashboard', compact('klasters'));
}
