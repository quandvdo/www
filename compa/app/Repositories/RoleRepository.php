<?php
/**
 * Created by PhpStorm.
 * User: Kudi
 * Date: 3/15/2019
 * Time: 11:18 PM
 */

namespace App\Repositories;


interface RoleRepository extends BaseRepository
{
    public function setSettingsAttribute($value);

    public function getSettingsAttribute($value);

    public function getAll();

}