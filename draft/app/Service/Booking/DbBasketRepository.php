<?php
/**
 * Created by PhpStorm.
 * User: Kudi
 * Date: 2/3/2019
 * Time: 4:31 PM
 */

namespace App\Service\Booking;


use App\Models\Booking\Basket;
use App\Repository\Booking\BasketRepositoryInterface;

class DbBasketRepository implements BasketRepositoryInterface
{

    protected $basket;

    public function __construct(Basket $basket)
    {
        $this->basket = $basket;
    }


    public function all()
    {
        return $this->basket->all();
    }

    public function create(array $data)
    {
        return $this->basket->firstOrCreate($data);
    }

    public function update(array $data, $id)
    {
        // TODO: Implement update() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }

    public function show($id)
    {
        return $this->basket->findOrFail($id);
    }

    public function findBySlug($slug)
    {
        // TODO: Implement find() method.
    }

    public function saveItems($data)
    {
        return $this->basket->items()->save($data);
    }

    public function save()
    {
        return $this->basket->save();
    }
}