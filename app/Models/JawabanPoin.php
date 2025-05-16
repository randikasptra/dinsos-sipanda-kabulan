<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JawabanPoin extends Model
{
    protected $table = 'jawaban_poin';
    protected $fillable = [
        'poin_id',
        'user_id',
        'jawaban',
        'catatan',
        'lampiran'
    ];

    public function poin()
    {
        return $this->belongsTo(Poin::class);
    }
}
