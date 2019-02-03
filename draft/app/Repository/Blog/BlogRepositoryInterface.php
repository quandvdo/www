<?php
/**
 * Created by PhpStorm.
 * User: Kudi
 * Date: 2/3/2019
 * Time: 4:26 PM
 */

namespace App\Repository\Blog;


interface BlogRepositoryInterface
{
    public function all();

    public function create(array $data);

    public function update(array $data, $id);

    public function delete($id);

    public function show($id);

    public function find($slug);

    public function getLandingPost($numberOfPost);
}