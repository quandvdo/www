<?php

namespace App\Models\Activity;

use App\Models\User;
use App\Models\Utility\Category;
use App\Models\Utility\City;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $with = ['category', 'location','price'];

    /*
     * Relationship
     */

    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }

    public function addons()
    {
        return $this->hasMany(AddOn::class);
    }

    public function price()
    {
        return $this->hasOne(Price::class);
    }

    public function routes()
    {
        return $this->hasMany(Route::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function location()
    {
        return $this->hasOne(City::class,'id','location_id');
    }

    /*
     * Scope query
     */
    public function scopeActive($query, $value)
    {
        return $query->where('isActive', $value);
    }

    public function scopeInquiry($query, $value)
    {
        return $query->where('isInquiry', $value);
    }

    public function scopeDiscount($query, $value)
    {
        return $query->where('isDiscount', $value);
    }

    public function scopePackage($query, $value)
    {
        return $query->where('isPackage', $value);
    }

    public function scopeFeature($query, $value)
    {
        return $query->where('isFeature', $value);
    }

}
