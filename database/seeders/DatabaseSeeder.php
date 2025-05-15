<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
    public function run(): void
    {
        $data = [
            'Kelembagaan',
            'Klaster I: Hak Sipil dan Kebebasan',
            'Klaster II: Lingkungan Keluarga',
            'Klaster III: Kesehatan Dasar dan Kesejahteraan',
            'Klaster IV: Pendidikan, Waktu Luang, Budaya',
            'Klaster V: Perlindungan Khusus',
            'Penyelenggaraan KLA di Kecamatan/Desa',
        ];

        foreach ($data as $item) {
            Klaster::create(['nama' => $item]);
        }
    }
}
