<?php
/**
 * Created by PhpStorm.
 * User: Kudi
 * Date: 2/3/2019
 * Time: 4:32 PM
 */

namespace App\Service\Utilty;


use App\Models\Utility\City;
use App\Repository\Activity\ActivityRepositoryInterface;
use App\Repository\Utility\CityRepositoryInterface;

class DbCityRepository implements CityRepositoryInterface
{

    public function getAll()
    {
        // TODO: Implement getAll() method.
        return City::all();
    }

    public function getLandingItem()
    {
        // TODO: Implement getLandingItem() method.

    }
}