<?php

namespace App\Models\Utility;

use App\Models\Activity\Activity;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $guarded = [];

    public function getByType($type)
    {
        return Category::whereType($type)->get();
    }

}
