<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LandingController extends Controller
{
    public function index()
    {
        return view('frontend.landing');
    }

    public function profile()
    {
        return view('frontend.profile');
    }
}
