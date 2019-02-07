<?php

namespace App\Http\Controllers;

use App\Models\Blog\Blog;
use App\Repository\Activity\ActivityRepositoryInterface;
use App\Repository\Blog\BlogRepositoryInterface;
use App\Repository\Utility\CityRepositoryInterface;
use App\Repository\Utility\TestimonialRepositoryInterface;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    protected $activity, $blog, $testimonial, $city;

    public function __construct(ActivityRepositoryInterface $activityRepository,
                                BlogRepositoryInterface $blogRepository,
                                TestimonialRepositoryInterface $testimonialRepository,
                                CityRepositoryInterface $cityRepository)
    {
        $this->activity = $activityRepository;
        $this->blog = $blogRepository;
        $this->testimonial = $testimonialRepository;
        $this->city = $cityRepository;
    }

    public function landing()
    {

        $blogs = $this->blog->getIndexPost(8, false);
        $testimonials = $this->testimonial->getLandingTestimonial(5);
        return view('frontend.pages.landing')
            ->with([
                'blogs' => $blogs,
                'testimonials' => $testimonials
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
        $tours = $this->activity->getFeatureActivityByType('tour', 8, true);
        return view('frontend.pages.tour-index')
            ->with('tours', $tours);
    }

    public function tourDetail($slug)
    {
        $detail = $this->activity->find($slug);
        return view('frontend.pages.tour-detail')->with('tour', $detail);
    }

    public function blogIndex()
    {
        $blogs = $this->blog->getIndexPost(8, true);
        return view('frontend.pages.blog-index')
            ->with('blogs', $blogs);
    }

    public function promotionIndex()
    {
        $promotion = $this->blog->getPromotionPost(8, true);
        return view('frontend.pages.blog-index')
            ->with('blogs', $promotion);
    }

    public function newsIndex()
    {
        $news = $this->blog->getNewsPost(8, true);
        return view('frontend.pages.blog-index')
            ->with('blogs', $news);
    }

    public function blogDetail($slug)
    {
        $detail = $this->blog->findBySlug($slug);
        return view('frontend.pages.blog-detail')
            ->with('blog', $detail);
    }

    public function destinationIndex()
    {
        $location = $this->city->getLandingItem(9,true);
        return view('frontend.pages.destination-index')
            ->with('destinations', $location);
    }

    public function destinationDetail($slug)
    {
        $location = $this->city->findBySlug($slug);
        $tours = $this->city->findAllTourBySlug($slug);
        return view('frontend.pages.destination-detail')
            ->with(['dest' => $location,
            'tours' => $tours]);
    }
}
