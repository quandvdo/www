<?php
/**
 * Created by PhpStorm.
 * User: Kudi
 * Date: 2/3/2019
 * Time: 4:24 PM
 */

namespace App\Service\Activity;


use App\Models\Activity\AddOn;
use App\Repository\Activity\ActivityAddonRepositoryInterface;

class DbActivityAddonRepository implements ActivityAddonRepositoryInterface
{

    protected $addon;
    public function __construct(AddOn $addon)
    {
        $this->addon = $addon;
    }


    public function freeItem()
    {

    }
}