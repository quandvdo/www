<?php
/**
 * Created by PhpStorm.
 * User: Kudi
 * Date: 3/4/2019
 * Time: 11:34 PM
 */

namespace App\Providers;


use Carbon\Laravel\ServiceProvider;

class CompassServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->loadHelpers();
    }

    public function boot()
    {

    }

    protected function loadHelpers()
    {
        foreach (glob(__DIR__.'/Helpers/*.php') as $filename) {
            require_once $filename;
        }
    }

}