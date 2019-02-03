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
        // TODO: Implement show() method.
    }

    public function find($slug)
    {
        // TODO: Implement find() method.
    }

    public function getLandingPost($numberOfPost)
    {
        return $this->blog->published(true)->orderBy('created_at', 'desc')->take($numberOfPost)->get();
    }
}