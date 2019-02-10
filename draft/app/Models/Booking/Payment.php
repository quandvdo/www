<?php

namespace App\Models\Booking;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'basket_payments';
    protected $guarded = [];

    public function basket()
    {
        return $this->belongsTo(Basket::class,'id','basket_id');
    }
}
