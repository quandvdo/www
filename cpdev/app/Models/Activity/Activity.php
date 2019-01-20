<?php

namespace App\Models\Activity;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    //

    public function price()
    {
        return $this->hasMany(Price::class, 'activity_id', 'id');
    }

    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }

    public function activePrice()
    {
        return $this->price()->where('isActive',true)->orderBy('created_at', 'desc')->first();
    }

    public static function findBySlug($slug)
    {
        return Activity::with('category','price')->where('slug', $slug)->first();
    }

    public static function findByFeature()
    {
        return Activity::with('category')->where('isFeature', true)->paginate(15);
    }
}
