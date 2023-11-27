<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assist extends Model
{
    use HasFactory;

    protected $guarded=[];

    /* Query Scopes */
    public function scopeFilter($query, $filters)
    {
        $query->when($filters['event_id'] ?? null, function($query, $event_id) {
            $query->where('event_id', $event_id);
        })->when($filters['career'] ??  null, function($query, $career) {
            $query->where('career', $career);
        })->when($filters['code'] ??  null, function($query, $career) {
            $query->where('code', $career);
        });;
    }

    /* Relación uno a muchos (inversa) */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    /* Relación uno a uno (inversa) */
    public function participant()
    {
        return $this->belongsTo(Participant::class);
    }
}
