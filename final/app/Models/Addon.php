<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Addon extends Model
{
    protected $table = 'addons';
    protected $guarded = [];

    public function activity()
    {
        return $this->belongsTo(Activity::class);
    }
}
