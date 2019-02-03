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

    public function addon()
    {
        return $this->hasMany(Addon::class, 'activity_id', 'id');
    }

    public function activePrice()
    {
        return $this->price()->where('isActive', true)->orderBy('created_at', 'desc')->first();
    }

    public function freeAddon()
    {
        return $this->addon()
            ->where('type', '=', '2')
            ->orderBy('created_at', 'desc')->get();
    }

    public function upgradeAddon()
    {
        return $this->addon()
            ->where('type', '=', '1')
            ->orderBy('created_at', 'desc')->get();
    }

    public static function findBySlug($slug)
    {
        return Activity::with('category', 'price', 'addon')
            ->where('slug', $slug)->first();
    }

    public static function findByFeature($type)
    {
        switch($type) {
            case 'package':
                $data = Activity::with('category')
                    ->where('isFeature', true)
                    ->where('isPackage', false)
                    ->paginate(6);
                break;
            case 'tour':
                $data = Activity::with('category')
                    ->where('isPackage', true)
                    ->where('isFeature', true)
                    ->paginate(6);
                break;
        }
        return $data;
    }
}
