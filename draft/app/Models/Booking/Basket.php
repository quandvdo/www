<?php

namespace App\Models\Booking;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
    protected $table = 'baskets';
    protected $guarded = [];
    protected $with = ['items', 'payment','user'];

    public function items()
    {
        return $this->hasMany(Item::class, 'basket_id', 'id');
    }

    public function payment()
    {
        return $this->hasMany(Payment::class, 'basket_id', 'id');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id','user_id');
    }
}
