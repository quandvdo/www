<?php
/**
 * Created by PhpStorm.
 * User: Kudi
 * Date: 3/4/2019
 * Time: 11:06 PM
 */

namespace App\Facades;


use Illuminate\Support\Facades\Facade;

class Compass extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'compass';
    }

}