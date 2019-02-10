<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*',
            'App\Http\ViewComposers\FrontendComposer@compose'
        );
        view()->composer(['frontend.pages.blog-detail', 'frontend.pages.blog-index'],
            'App\Http\ViewComposers\FrontendComposer@tags');
    }
}
