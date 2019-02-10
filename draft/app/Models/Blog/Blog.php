<?php

namespace App\Models\Blog;

use App\Models\User;
use App\Models\Utility\Category;
use App\Models\Utility\Comment;
use App\Models\Utility\Image;
use App\Models\Utility\Tag;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blogs';
    protected $guarded = [];

    protected $primaryKey = 'id';

    protected $with = ['category', 'user', 'tags'];
    protected $withCount = ['allComments'];

    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function scopePublished($query, $value)
    {
        return $query->where('isPublished', $value);
    }

    public function scopePromotion($query, $value)
    {
        return $query->where('isPromotion', $value);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable')->whereNull('parent_id');
    }

    public function allComments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class)
            ->withPivot('id', 'blog_id', 'tag_id')
            ->withTimestamps();
    }

    public function images()
    {
        return $this->morphMany(Image::class,'sources');
    }

}
