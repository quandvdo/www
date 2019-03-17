<?php
/**
 * Created by PhpStorm.
 * User: Kudi
 * Date: 3/15/2019
 * Time: 11:19 PM
 */

namespace App\Services;


use App\Models\Role;
use App\Repositories\RoleRepository;

class RoleService implements RoleRepository
{
    protected $user, $role;

    public function __construct(Role $role)
    {
        $this->role = $role;
    }

    public function setSettingsAttribute($value)
    {
        $this->role->attributes['settings'] = $value->toJson();
    }

    public function getSettingsAttribute($value)
    {
        return collect(json_decode($value));
    }

    public function getAll()
    {
        return $this->role->select('id', 'name', 'display_name')->get();
    }

    public function all()
    {
        return $this->role->all();
    }

    public function create(array $data)
    {
        return $this->role->create($data);
    }

    public function update(array $data, $id)
    {
        $record = $this->find($id);
        return $record->update($data);
    }

    public function delete($id)
    {
        return $this->role->destroy($id);
    }

    public function show($id)
    {
        return $this->role->findOrFail($id);
    }
}