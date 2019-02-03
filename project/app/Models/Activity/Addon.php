<?php

namespace App\Models\Activity;

use Illuminate\Database\Eloquent\Model;

class Addon extends Model
{
    public function activity()
    {
        return $this->belongsTo(Activity::class,'id','activity_id');
    }
}
