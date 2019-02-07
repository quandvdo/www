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
use Illuminate\Support\Facades\DB;

class DbActivityRepository implements ActivityRepositoryInterface
{
    protected $activity;

    public function __construct(Activity $activity)
    {
        $this->activity = $activity;
    }


    public function find($slug)
    {
        return $this->activity::Slug($slug)->first();
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
        return $this->activity->findOrFail($id);
    }

    public function getFeatureActivityByType($type, $paginate, $link = false)
    {
        $data = new Activity();
        switch ($type) {
            case 'package':
                if (!$link) {
                    $data = $this->activity::active(true)
                        ->package(true)
                        ->feature(true)
                        ->orderBy('created_at', 'desc')
                        ->take($paginate)
                        ->get();
                    break;
                }
                $data = $this->activity::active(true)
                    ->package(true)
                    ->feature(true)
                    ->orderBy('created_at', 'desc')
                    ->paginate($paginate);
                break;
            case 'tour':
                if (!$link) {
                    $data = $this->activity::active(true)
                        ->package(false)
                        ->feature(true)
                        ->orderBy('created_at', 'desc')
                        ->take($paginate)
                        ->get();
                    break;
                }
                $data = $this->activity::active(true)
                    ->package(false)
                    ->feature(true)
                    ->orderBy('created_at', 'desc')
                    ->paginate($paginate);
                break;
            default:
        }
        return $data;
    }

    public function getRandomLocation()
    {
        // TODO: Implement getRandomLocation() method.
        return $this->activity::active(true)
            ->join('cities', 'activities.location_id', '=', 'cities.id')
            ->select('cities.city')
            ->inRandomOrder()
            ->distinct()
            ->take(8)
            ->get();
    }

    public function getLocationIndex($numberOfPaginate)
    {
        return $this->activity::active(true)
            ->join('cities', 'activities.location_id', '=', 'cities.id')
            ->select('cities.city',
                DB::raw('count(activities.id) as count'))
            ->groupBy('cities.city')
            ->orderBy('count', 'desc')
            ->paginate($numberOfPaginate);
    }


}