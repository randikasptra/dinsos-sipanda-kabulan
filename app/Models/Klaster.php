<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Klaster extends Model
{
    protected $fillable = ['nama'];

    public function poin(): HasMany
    {
        return $this->hasMany(Poin::class);
    }
    
}
