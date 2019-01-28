<?php

namespace App\Models\Utilties;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    protected $fillable = ['key', 'type', 'value', 'icon'];

    public static function getByKey($key)
    {
        return Option::where('key', '=', $key)->get();
    }
}
