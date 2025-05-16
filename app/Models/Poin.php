<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Poin extends Model
{
    use HasFactory;
    protected $fillable = [
        'klaster_id',
        'judul',
        'nilai',
        'nilai_maksimal',
        'terpenuhi',
        'total',
    ];

    // Relasi ke Klaster
    public function klaster()
    {
        return $this->belongsTo(Klaster::class);
    }
}
