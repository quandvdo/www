<?php

namespace App\Providers;

use App\Repository\Activity\ActivityAddonRepositoryInterface;
use App\Repository\Activity\ActivityCategoryRepositoryInterface;
use App\Repository\Activity\ActivityRepositoryInterface;
use App\Repository\Activity\ActivityRouteRepositoryInterface;
use App\Repository\Blog\BlogRepositoryInterface;
use App\Repository\Utility\OptionRepositoryInterface;
use App\Repository\Utility\TestimonialRepositoryInterface;
use App\Service\Activity\DbActivityAddonRepository;
use App\Service\Activity\DbActivityCategoryRepository;
use App\Service\Activity\DbActivityRepository;
use App\Service\Activity\DbActivityRouteRepository;
use App\Service\Blog\DbBlogRepository;
use App\Service\Utilty\DbOptionRepository;
use App\Service\Utilty\DbTestimonialRepository;
use Illuminate\Support\ServiceProvider;

class BackendServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->bind(ActivityRepositoryInterface::class, DbActivityRepository::class);
        $this->app->bind(ActivityAddonRepositoryInterface::class, DbActivityAddonRepository::class);
        $this->app->bind(ActivityCategoryRepositoryInterface::class, DbActivityCategoryRepository::class);
        $this->app->bind(ActivityRouteRepositoryInterface::class, DbActivityRouteRepository::class);
        $this->app->bind(BlogRepositoryInterface::class, DbBlogRepository::class);
        $this->app->bind(TestimonialRepositoryInterface::class, DbTestimonialRepository::class);
        $this->app->bind(OptionRepositoryInterface::class, DbOptionRepository::class);

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
