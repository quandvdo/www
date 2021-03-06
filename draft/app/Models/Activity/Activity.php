<?php

namespace App\Models\Activity;

use App\Models\User;
use App\Models\Utility\Category;
use App\Models\Utility\City;
use App\Models\Utility\Comment;
use App\Models\Utility\Image;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $with = ['category', 'location','price','addons'];
    protected $withCount = ['allComments'];

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

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable')->whereNull('parent_id');
    }

    public function allComments()
    {
        return  $this->morphMany(Comment::class, 'commentable');
    }

    public function images()
    {
        return $this->morphMany(Image::class,'sources');
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

    public function scopeSlug($query, $value)
    {
        return $query->where('slug', '=', $value);
    }



}
