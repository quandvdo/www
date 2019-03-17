<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        return view('backend.pages.dashboard');
    }

    public function profile()
    {
        return view('backend.pages.profile');
    }
}
