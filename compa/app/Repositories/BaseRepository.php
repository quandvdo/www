<?php
/**
 * Created by PhpStorm.
 * User: Kudi
 * Date: 3/17/2019
 * Time: 10:26 PM
 */

namespace App\Repositories;


interface BaseRepository
{
    public function all();

    public function create(array $data);

    public function update(array $data, $id);

    public function delete($id);

    public function show($id);
}