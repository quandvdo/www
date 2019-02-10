<?php
/**
 * Created by PhpStorm.
 * User: Kudi
 * Date: 2/3/2019
 * Time: 4:27 PM
 */

namespace App\Repository\Booking;


use App\Models\Booking\Basket;

interface BasketRepositoryInterface
{
    public function all();

    public function create(array $data);

    public function update(array $data, $id);

    public function delete($id);

    public function show($id);

    public function findBySlug($slug);

    public function save();

    public function saveItems($data);
}