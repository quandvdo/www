@extends('frontend._layout.main')

@section('content')
    @component('frontend.components.subheader',
        ['title' => $blog->title,
        'img' => 'blog-single.jpg'])
    @endcomponent



    <section id="section3" class="tour-list-sidebar">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-md-6 col-lg-3 ml-lg-5 order-lg-first order-last mt-3 mt-lg-0">
                    <div class="container mb-4 mt-lg-0 mt-4 justify-content-center">
                        <div class="row text-center justify-content-center">
                            <p class="tiny mr-3 text-center"><span class="far grey fa-heart mr-1"></span> 0 Likes</p>
                            <p class="tiny mr-3 mb-3 text-center"><span class="far grey fa-comments mr-1"></span>{{$blog->all_comments_count}}
                                Comments</p>
                        </div>

                        <div class="row text-left justify-content-center">
                            <img class="mr-2 mb-2 blog-image " src="https://picsum.photos/55/55?image={{rand(500,600)}}"
                                 alt="">
                            <div class="tiny"><h6 class="black ">{{$blog->user->name}}<br>
                                </h6>{{$blog->created_at->format('Y/m/d')}} - {{$blog->created_at->diffForHumans()}}</div>
                        </div>
                    </div>
                    <div class="mx-lg-0 my-4">

                        <div class="input-group mb-4 search-button ">
                            <input class="form-control border-secondary py-2" placeholder="Search a Tour...">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="more-info tags my-4">
                        <h6 class="black semibold text-center mx-4 mt-3 mb-3 info-title">Popular Tags</h6>
                        <div class="text-center px-3 px-lg-2 pb-3">
                            <a class="btn btn-outline-primary px-3  mr-1 mb-1 btn-sm " href="#" role="button">Europe</a>
                            <a class="btn btn-outline-primary px-3 mr-1 mb-1 btn-sm " href="#" role="button">travel
                                tips</a>
                            <a class="btn btn-outline-primary px-3  mr-1 mb-1 btn-sm " href="#" role="button">travel</a>
                            <a class="btn btn-outline-primary px-3  mr-1 mb-1 btn-sm " href="#"
                               role="button">England</a>
                            <a class="btn btn-outline-primary px-3  mr-1 mb-1 btn-sm " href="#" role="button">travel
                                blog</a>
                            <a class="btn btn-outline-primary px-3  mr-1 mb-1 btn-sm" href="#" role="button">parks</a>
                        </div>
                    </div>

                   @include('frontend.components.partials.quick-contact')

                    <div id="instasidebar" class="grid2 runsidebar mx-auto">
                        <h6 class="black semibold text-center mx-4 mt-3 mb-2 info-title">Instagram Gallery</h6>
                        <div class="grid-sizer w-100"></div>
                    </div>

                    <div class=" mt-4">
                        <a href="#"><img src="{{asset('images/promotion.jpg')}}" class="img-fluid mx-auto d-block mt-5"
                                         alt=""></a>
                    </div>
                </div>

                <div class="col-xs-12 col-md-12 col-lg-8 single-tour">
                    @include('frontend.components.alert')
                    <h4 id="read-tour"
                        class="black text-left mb-3 bold">{{ucfirst($blog->title)}}
                        @if($blog->isPromotion)
                            <a class="btn btn-sm btn-primary"
                               href="{{route('blog.promotion')}}"
                               role="button">Promotion</a>
                        @endif</h4>

                    <div class="separator-tour"></div>

                    <div>
                        <div class="tour-schedule">
                            <h6 class="black bold mt-4 mb-3">{{ucfirst($blog->subtitle)}}</h6>
                            <p>{!! $blog->content !!}</p>
                            <img src="https://picsum.photos/600/400?image={{rand(500,600)}}" alt="{{$blog->subtitle}}"
                                 class="img-fluid">

                        </div>
                        {{--TODO: COMMENTS SECTION--}}
                        @include('frontend.components.comment',['comments' => $blog->comments , 'id' => $blog->id, 'type' => 'blog'])
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
