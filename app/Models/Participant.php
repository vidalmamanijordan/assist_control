<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    use HasFactory;

    protected $guarded=[];

    /* Relación uno a uno */
    public function assist()
    {
        return $this->hasOne(Assist::class);
    }

    /* Relación uno a uno (inversa) */
    public function career()
    {
        return $this->belongsTo(Career::class);
    }
}
