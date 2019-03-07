<?php
/**
 * Created by PhpStorm.
 * User: Kudi
 * Date: 2/3/2019
 * Time: 9:41 AM
 */

namespace App\Repository\Activity;

use App\Models\Activity;


interface ActivityRepositoryInterface
{
    public function all();

    public function create(array $data);

    public function update(array $data, $id);

    public function delete($id);

    public function show($id);

    public function findBySlug432($slug);

    public function getRandomLocation();

    public function getLocationIndex($numberOfPaginate);

    public function getFeatureActivityByType($type, $paginate, $link = false);

}