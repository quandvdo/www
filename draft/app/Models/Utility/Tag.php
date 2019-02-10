<?php

namespace App\Models\Utility;

use App\Models\Blog\Blog;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tags';
    protected $guarded = [];

    public function blogs()
    {
        return $this->belongsToMany(Blog::class)
            ->withPivot('id','blog_id','tag_id')
            ->withTimestamps();
    }
}
