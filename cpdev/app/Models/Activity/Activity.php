<?php

namespace App\Models\Activity;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    //

    public static function findBySlug($slug)
    {
        return Activity::where('slug', $slug)->first() ? : null ;
    }
}
