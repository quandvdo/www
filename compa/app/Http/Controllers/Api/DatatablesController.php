<?php

namespace App\Http\Controllers\Api;

use App\Repositories\UserRepository;
use App\Http\Controllers\Controller;
use Yajra\DataTables\DataTables;

class DatatablesController extends Controller
{

    public static $urlUser = '/admin/users/';
    protected $user;

    public function __construct(UserRepository $userRepository)
    {
        $this->user = $userRepository;
    }
    public function getAllUser()
    {
        $users = $this->user->getAll();
        return DataTables::of($users)
            ->addColumn('action', function ($users) {
                return '<a href="' . self::$urlUser . $users->id . '" class="btn btn-xs btn-info pull-left"><i class="glyphicon glyphicon-view"></i> View</a>
                        <a href="' . self::$urlUser . $users->id . '/edit" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                        <a href="' . self::$urlUser . $users->id . '" class="btn btn-xs btn-danger pull-right"><i class="glyphicon glyphicon-destroy"></i> Delete</a>
                        ';
            })
            ->removeColumn('password')
            ->make(true);
    }
}
