<?php
/**
 * Created by PhpStorm.
 * User: Kudi
 * Date: 3/15/2019
 * Time: 11:19 PM
 */

namespace App\Services;


use App\Models\Role;
use App\Models\User;
use App\Repositories\UserRepository;

class UserService implements UserRepository
{
    protected $user, $role;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function setSettingsAttribute($value)
    {
        $this->user->attributes['settings'] = $value->toJson();
    }

    public function getSettingsAttribute($value)
    {
        return collect(json_decode($value));
    }

    public function getAll()
    {
        return $this->user->select('id', 'name', 'email', 'avatar', 'created_at', 'updated_at')->get();
    }

    public function all()
    {
        return $this->user->all();
    }

    public function create(array $data)
    {
        return $this->user->create($data);
    }

    public function update(array $data, $id)
    {
        $record = $this->find($id);
        return $record->update($data);
    }

    public function delete($id)
    {
        return $this->user->destroy($id);
    }

    public function show($id)
    {
        return $this->user->findOrFail($id);
    }
}