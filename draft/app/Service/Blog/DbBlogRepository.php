<?php
/**
 * Created by PhpStorm.
 * User: Kudi
 * Date: 2/3/2019
 * Time: 4:25 PM
 */

namespace App\Service\Blog;


use App\Models\Blog\Blog;
use App\Repository\Blog\BlogRepositoryInterface;

class DbBlogRepository implements BlogRepositoryInterface
{
    protected $blog;

    public function __construct(Blog $blog)
    {
        $this->blog = $blog;
    }

    public function all()
    {
        return $this->blog->all();
    }

    public function create(array $data)
    {
        return $this->blog->create($data);

    }

    public function update(array $data, $id)
    {
        return $this->blog->save($data);
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }

    public function show($id)
    {
        return $this->blog->find($id);
    }

    public function findBySlug($slug)
    {
        // TODO: Implement find() method.
        return $this->blog->where('slug', '=', $slug)->first();
    }

    public function getIndexPost($numberOfPost, $link = false)
    {
        if ($link = true) {
            return $this->blog->published(true)->orderBy('created_at', 'desc')->paginate($numberOfPost);
        }
        return $this->blog->published(true)->orderBy('created_at', 'desc')->take($numberOfPost)->get();
    }

    public function getPromotionPost($numberOfPost, $link = false)
    {
        if ($link = true) {
            return $this->blog->published(true)->promotion(true)->orderBy('created_at', 'desc')->paginate($numberOfPost);
        }
        return $this->blog->published(true)->promotion(true)->orderBy('created_at', 'desc')->take($numberOfPost)->get();
    }

    public function getNewsPost($numberOfPost, $link = false)
    {
        if ($link = true) {
            return $this->blog->published(true)->promotion(false)->orderBy('created_at', 'desc')->paginate($numberOfPost);
        }
        return $this->blog->published(true)->promotion(false)->orderBy('created_at', 'desc')->take($numberOfPost)->get();
    }

    public function find($id)
    {
        return $this->blog->find($id);
    }
}