<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $table = 'activities';

    public function addons()
    {
        return $this->hasMany(AddOn::class);
    }
}
