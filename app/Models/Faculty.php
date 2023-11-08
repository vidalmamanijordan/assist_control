<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use HasFactory;

    protected $guarded = [];

    /* Relación uno a muchos */
    public function careers()
    {
        return $this->hasMany(Career::class);
    }

    /* Relación uno a muchos (inversa) */
    public function sede()
    {
        return $this->belongsTo(Sede::class);
    }
}
