<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Klaster extends Model
{
    protected $table = 'klasters'; // opsional, jika nama tabel kamu bukan jamak dari 'Klaster'

    protected $fillable = [
        'nama',
        // tambahkan kolom lain jika ada
    ];

    /**
     * Relasi Klaster memiliki banyak Poin
     */
    public function poin(): HasMany
    {
        return $this->hasMany(Poin::class);
    }
}
