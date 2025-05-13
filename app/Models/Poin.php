<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Poin extends Model
{
    protected $fillable = [
        'klaster_id',
        'judul',
        'pertanyaan',
        'nilai',
        'nilai_maksimal',
        'terpenuhi',
        'total'
    ];

    public function klaster(): BelongsTo
    {
        return $this->belongsTo(Klaster::class);
    }
}
