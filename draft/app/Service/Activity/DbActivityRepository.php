<?php
/**
 * Created by PhpStorm.
 * User: Kudi
 * Date: 2/3/2019
 * Time: 9:41 AM
 */

namespace App\Service\Activity;


use App\Models\Activity\Activity;
use App\Repository\Activity\ActivityRepositoryInterface;

class DbActivityRepository implements ActivityRepositoryInterface
{
    protected $activity;

    public function __construct(Activity $activity)
    {
        $this->activity = $activity;
    }


    public function find($slug)
    {
        // TODO: Implement find() method.
        return $this->activity::where('slug', '=', $slug)->first();
    }


    public function all()
    {
        // TODO: Implement all() method.
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

    public function getFeatureActivityByType($type)
    {
        $data = new Activity();
        switch ($type) {
            case 'package':
                $data = $this->activity::active(true)
                    ->package(true)
                    ->feature(true)
                    ->orderBy('created_at', 'desc')
                    ->take(6)
                    ->get();
                break;
            case 'tour':
                $data = $this->activity::active(true)
                    ->package(false)
                    ->feature(true)
                    ->orderBy('created_at', 'desc')
                    ->take(6)
                    ->get();
                break;
            default:
        }
        return $data;
    }

    public function getRandomLocation()
    {
        // TODO: Implement getRandomLocation() method.
        return $this->activity::active(true)
            ->join('cities', 'activities.location_id', '=' , 'cities.id')
            ->select('cities.city')
            ->inRandomOrder()
            ->distinct()
            ->take(8)
            ->get();
    }
}