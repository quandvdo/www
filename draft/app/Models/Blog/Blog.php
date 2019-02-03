<?php

namespace App\Models\Blog;

use App\Models\Utility\Category;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blogs';
    protected $guarded = [];

    protected $with = ['category'];

    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }

    public function scopePublished($query, $value)
    {
        return $query->where('isPublished', $value);
    }

    public function scopePromotion($query, $value)
    {
        return $query->where('isPromotion', $value);
    }

}
