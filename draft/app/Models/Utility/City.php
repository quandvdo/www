<?php

namespace App\Models\Utility;

use App\Models\Activity\Activity;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'cities';
    protected $guarded = [];
    protected $primaryKey = 'id';

    public function activities()
    {
        return $this->hasMany(Activity::class,'location_id', 'id');
    }
}
