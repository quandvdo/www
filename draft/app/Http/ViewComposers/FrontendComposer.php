<?php
/**
 * Created by PhpStorm.
 * User: Kudi
 * Date: 2/3/2019
 * Time: 10:26 PM
 */

namespace App\Http\ViewComposers;


use App\Repository\Activity\ActivityRepositoryInterface;
use App\Repository\Utility\CityRepositoryInterface;
use App\Repository\Utility\OptionRepositoryInterface;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;

class FrontendComposer
{
    protected $activity, $option, $city;
    public $cities, $options;

    public function __construct(ActivityRepositoryInterface $activityRepository,
                                OptionRepositoryInterface $optionRepository,
                                CityRepositoryInterface $cityRepository)
    {
        $this->activity = $activityRepository;
        $this->option = $optionRepository;
        $this->city = $cityRepository;

    }

    public function compose(View $view)
    {
        $cities = $this->city->getLandingItem(8, false);
        $options = $this->option->getSocialAndGlobalOption();
        $tours = $this->activity->getFeatureActivityByType('tour', 6);
        $packages = $this->activity->getFeatureActivityByType('package', 6);
        $view->with('menucities', end($cities));
        $view->with('options', end($options));
        $view->with('menutours', end($tours));
        $view->with('menupackages', end($packages));
    }

}