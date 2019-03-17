<?php

namespace App\Http\Controllers\Api;

use App\Repositories\RoleRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiController extends Controller
{
    protected $role;

    public function __construct(RoleRepository $roleRepository)
    {
        $this->role = $roleRepository;
    }

    public function getAllRoles()
    {
        return response()->json($this->role->getAll());
    }
}
