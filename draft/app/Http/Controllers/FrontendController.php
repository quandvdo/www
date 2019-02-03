<?php

namespace App\Http\Controllers;

use App\Repository\Activity\ActivityRepositoryInterface;
use App\Repository\Blog\BlogRepositoryInterface;
use App\Repository\Utility\TestimonialRepositoryInterface;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    protected $activity, $blog , $testimonial;

    public function __construct(ActivityRepositoryInterface $activityRepository,
                                BlogRepositoryInterface $blogRepository,
                                TestimonialRepositoryInterface $testimonialRepository)
    {
        $this->activity = $activityRepository;
        $this->blog = $blogRepository;
        $this->testimonial = $testimonialRepository;
    }

    public function landing()
    {

        $blogs = $this->blog->getLandingPost(8);
        $testimonials = $this->testimonial->getLandingTestimonial(5);
        return view('frontend.pages.landing')
            ->with([
                'blogs' => $blogs,
                'testimonials' => $testimonials
            ]);
    }
}
