<?php

namespace Database\Seeders;
use App\Models\Poin;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PoinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Poin::insert([
            [
                'klaster_id' => 1,
                'judul' => 'Peraturan Daerah tentang SIPANDAKABULAN',
                'nilai' => 88,
                'nilai_maksimal' => 96,
                'terpenuhi' => 4,
                'total' => 4
            ],
            [
                'klaster_id' => 1,
                'judul' => 'Penguatan Kelembagaan',
                'nilai' => 31,
                'nilai_maksimal' => 36,
                'terpenuhi' => 7,
                'total' => 7
            ],
            [
                'klaster_id' => 1,
                'judul' => 'Peran Dunia Usaha dan Media',
                'nilai' => 27,
                'nilai_maksimal' => 32,
                'terpenuhi' => 8,
                'total' => 8
            ],
            // Tambahkan poin untuk klaster 2-7 juga nanti
        ]);
    }
}
