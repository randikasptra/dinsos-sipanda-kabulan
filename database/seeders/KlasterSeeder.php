<?php
use Illuminate\Database\Seeder;
use App\Models\Klaster;
use App\Models\Poin;

class KlasterSeeder extends Seeder
{
    public function run()
    {
        $klaster = Klaster::create([
            'nama' => 'Klaster I: Hak Sipil dan Kebebasan',
            'nilai_em' => 90.0,
            'nilai_maksimal' => 115.0,
        ]);

        $klaster->poin()->createMany([
            [
                'judul' => 'Peraturan Daerah tentang SIPANDAKABULAN',
                'nilai' => 88.00,
                'nilai_maksimal' => 96.00,
                'terpenuhi' => 4,
                'total' => 4,
            ],
            [
                'judul' => 'Penguatan Kelembagaan',
                'nilai' => 31.00,
                'nilai_maksimal' => 36.00,
                'terpenuhi' => 7,
                'total' => 7,
            ],
        ]);
    }
}
