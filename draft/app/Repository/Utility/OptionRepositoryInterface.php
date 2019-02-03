<?php
/**
 * Created by PhpStorm.
 * User: Kudi
 * Date: 2/3/2019
 * Time: 4:28 PM
 */

namespace App\Repository\Utility;


interface OptionRepositoryInterface
{
    public function all();

    public function create(array $data);

    public function update(array $data, $id);

    public function delete($id);

    public function show($id);

    public function getByKey($key);

    public function getSocialAndGlobalOption();
}