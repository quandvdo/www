<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    public function category()
    {
        return $this->hasOne(Category::class,'id', 'category_id');
    }

    public function tag()
    {
        return $this->hasMany(Tag::class,'blog_id','id');
    }
}
