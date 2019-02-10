<?php

namespace App\Models\Booking;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    protected $table = 'agents';
    protected $guarded = [];

    public function items()
    {
        return $this->belongsTo(Basket::class);
    }
}
