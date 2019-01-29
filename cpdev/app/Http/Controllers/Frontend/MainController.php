<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Activity\Activity;
use App\Models\Blog\Blog;
use App\Models\Utilities\Testimonials;
use App\Models\Utilties\Option;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function landing()
    {
        $city = Activity::select('location')->inRandomOrder()->distinct()->take(8)->get();
        $tour = Activity::findByFeature('tour');
        $package = Activity::findByFeature('package');
        $blogs = Activity::findByFeature('package');
        $testimonial = Testimonials::take(5)->inRandomOrder()->get();
        return view('frontend.pages.landing')
            ->with(['cities' => $city,
                'tours' => $tour,
                'packages' => $package,
                'blogs' => $blogs,
                'testimonials' => $testimonial
            ]);
    }

    public function about()
    {
        return view('frontend.pages.about');
    }

    public function ourTeam()
    {
        return view('frontend.pages.ourteam');
    }

    public function contact()
    {
        return view('frontend.pages.contactus');
    }

    public function contactPost()
    {
        return view('frontend.pages.contactus');
    }

    public function tourIndex()
    {
        $tours = Activity::paginate(8);
        return view('frontend.pages.tour-index')->with('tours', $tours);
    }

    public function tourDetail($slug)
    {
        $detail = Activity::findBySlug($slug);
        return view('frontend.pages.tour-detail')->with('tour', $detail);
    }

    public function destinationIndex()
    {
        return view('frontend.pages.destination-index');
    }

    public function destinationDetail($slug)
    {
        return view('frontend.pages.destination-detail');
    }

    public function blogIndex()
    {
        $blogs = Blog::paginate(15);
        return view('frontend.pages.blog-index')->with('blogs', $blogs);
    }

    public function blogDetail($slug)
    {
        return view('frontend.pages.blog-detail');
    }
}
