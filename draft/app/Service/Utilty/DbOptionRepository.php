<?php
/**
 * Created by PhpStorm.
 * User: Kudi
 * Date: 2/3/2019
 * Time: 4:32 PM
 */

namespace App\Service\Utilty;


use App\Models\Utility\Option;
use App\Repository\Utility\OptionRepositoryInterface;

class DbOptionRepository implements OptionRepositoryInterface
{

    protected $option;

    public function __construct(Option $option)
    {
        $this->option = $option;
    }


    public function all()
    {
        return $this->option->all();
    }

    public function create(array $data)
    {
        return $this->option->create($data);
    }

    public function update(array $data, $id)
    {
        // TODO: Implement update() method.
    }

    public function delete($id)
    {
        return $this->delete($id);
    }

    public function show($id)
    {
        return $this->option->findOrFail($id);
    }

    public function getByKey($key)
    {
        return $this->option->key($key)->get();
    }

    public function getSocialAndGlobalOption()
    {
        return $this->option->whereIn('type', ['global', 'social'])->get();
    }
}