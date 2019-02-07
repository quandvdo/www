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
    protected $city;

    public function __construct(City $city)
    {
        $this->city = $city;
    }

    public function all()
    {
        return $this->city->withCount('activities')->all();
    }

    public function create(array $data)
    {
        // TODO: Implement create() method.
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
        // TODO: Implement show() method.
    }

    public function findBySlug($slug)
    {
        return $this->city->whereSlug($slug)->first();
    }

    public function findAllTourBySlug($slug)
    {
        return $this->city->with('activities')->whereSlug($slug)->first();
    }

    public function getLandingItem($numberOfPaginate, $paginate = true)
    {
        if ($paginate) {
            return $this->city->withCount('activities')
                ->orderBy('activities_count', 'desc')
                ->paginate($numberOfPaginate);
        }
        // TODO: Implement getLandingItem() method.
        return $this->city->withCount('activities')
            ->orderBy('activities_count', 'desc')
            ->limit($numberOfPaginate)
            ->get();
    }
}