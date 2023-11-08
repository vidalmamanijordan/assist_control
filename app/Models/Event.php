<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PHPUnit\Framework\MockObject\Stub\ReturnReference;

class Event extends Model
{
    use HasFactory;

    protected $guarded = [];

    /* Relación uno a muchos */
    public function assists()
    {
        return $this->hasMany(Assist::class);
    }
}