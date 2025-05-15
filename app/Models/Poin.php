<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Poin extends Model
{
    protected $fillable = [
        'klaster_id',
        'judul',
        'nilai',
        'nilai_maksimal',
        'terpenuhi',
        'total'
    ];

    public function klaster()
    {
        return $this->belongsTo(Klaster::class);
    }
}
