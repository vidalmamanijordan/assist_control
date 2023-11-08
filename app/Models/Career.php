<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    use HasFactory;

    protected $guarded=[];

    /* Relación uno a uno */
    public function participant()
    {
        return $this->hasOne(Participant::class);
    }

    /* Relación uno a muchos (inversa) */
    public function faculty()
    {
        return $this->belongsTo(Faculty::class);
    }
}
