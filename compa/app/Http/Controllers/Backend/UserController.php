<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\UsersDatatable;
use App\Repositories\RoleRepository;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use function public_path;
use Validator;
use Yajra\DataTables\DataTables;

class UserController extends Controller
{
    public static $url = '/admin/users/';
    public static $avatar = 'user/default.png';

    protected $user, $userDt, $role;

    public function __construct(UserRepository $userRepository, UsersDatatable $usersDatatable, RoleRepository $roleRepository)
    {
        $this->user = $userRepository;
        $this->userDt = $usersDatatable;
        $this->role = $roleRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->userDt->render('backend.pages.users.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = $this->role->getAll();
        return view('backend.pages.users.create')->with('roles', $roles);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required|unique:users',
            'password' => 'required|min:6',
            'file' => 'max:10000|mines:jpg,png,bmp,gif'
        ]);

        if ($validator->fails()) {
            return redirect()->route('users.create')
                ->withErrors($validator)
                ->withInput();
        }

        if ($request->hasFile('avatar')) {
            $avatarRaw = $request->file('avatar');
            $filename = uniqid() . '.' . $avatarRaw->getClientOriginalExtension();
            $avatarResize = Image::make($avatarRaw->getRealPath())->resize(128, 128);
            $avatar = 'avatars/' . $filename;
            $avatarResize->save(public_path('uploads/') . $avatar);
        } else {
            $avatar = 'users/default.png';
        }
        $user = $this->user->create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role_id' => $request->role_id,
            'avatar' => $avatar
        ]);
        $role = $this->role->show($request->role_id);
        $user->roles()->attach($role);

        Log::info('USER: ' . $user->email . '-' . $role->name . ' has been added as New User!');
        notify()->success($user->email . ' has been added successfully as new ' . $role->name . '!');
        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('backend.pages.users.show')->with('user', $this->user->show($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
