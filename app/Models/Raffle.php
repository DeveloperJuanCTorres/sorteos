<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Raffle extends Model
{
    public function tickets()
    {
        return $this->hasMany(Ticket::class, 'sorteo_id');
    }
}
