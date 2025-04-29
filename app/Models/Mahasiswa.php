<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';

    public function nilai(): HasMany
    {
        return $this->hasMany(Nilai::class);
    }
    
}
