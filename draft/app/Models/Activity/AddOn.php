<?php

namespace App\Models\Activity;

use Illuminate\Database\Eloquent\Model;

class AddOn extends Model
{
    protected $table = 'activity_addons';
    protected $guarded = [];

    public function activity()
    {
        return $this->belongsTo(Activity::class);
    }



}
