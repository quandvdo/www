<?php

namespace App\Models\Booking;

use App\Models\Activity\Activity;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'basket_items';
    protected $guarded = [];
    protected $date = ['created_at', 'updated_at', 'activity_date'];
    protected $with = ['activity'];

    public function basket()
    {
        return $this->belongsTo(Basket::class, 'id','basket_id');
    }

    public function activity()
    {
        return $this->hasOne(Activity::class, 'id', 'activity_id');
    }
}
