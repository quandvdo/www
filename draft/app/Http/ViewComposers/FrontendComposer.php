<?php
/**
 * Created by PhpStorm.
 * User: Kudi
 * Date: 2/3/2019
 * Time: 10:26 PM
 */

namespace App\Http\ViewComposers;


use App\Repository\Activity\ActivityRepositoryInterface;
use App\Repository\Utility\OptionRepositoryInterface;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;

class FrontendComposer
{
    protected $activity, $option;
    public $cities , $options;

    public function __construct(ActivityRepositoryInterface $activityRepository, OptionRepositoryInterface $optionRepository)
    {
        $this->activity = $activityRepository;
        $this->option = $optionRepository;

    }

    public function compose(View $view)
    {
        $cities = $this->activity->getRandomLocation();
        $options = $this->option->getSocialAndGlobalOption();
        $tours = $this->activity->getFeatureActivityByType('tour');
        $packages = $this->activity->getFeatureActivityByType('package');
        $view->with('cities', end($cities));
        $view->with('options', end( $options));
        $view->with('tours', end( $tours));
        $view->with('packages', end( $packages));
    }

}