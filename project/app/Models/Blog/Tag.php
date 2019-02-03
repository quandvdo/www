<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
    public function Blog()
    {
        return $this->belongsTo(Blog::class,'id','blog_id');
    }
}
