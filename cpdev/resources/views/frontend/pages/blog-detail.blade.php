@extends('layouts.frontend.app')

@section('content')
    <!-- Title section 1 -->
    <div class="tour-title ">
        <img class="blog-background w-100 h-100" src="{{asset('images/blog-single.jpg')}}" alt="">
        <h1 class="white text-center shadow-text front center-text">{{$blog->title}}</h1>
        <div>
            <a class="smooth-scroll" href="#read-tour">
                <img class="curvechevron" src="{{asset('svg/curvesingle.svg')}}" alt="">
                <div class="chevroncurve">
                    <i class="fas hoverchevron white fa-chevron-down"> </i>
                </div>
            </a>
        </div>
    </div>
    <!-- End section Title-->

    <section id="section3" class="tour-list-sidebar">

        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-md-6 col-lg-3 ml-lg-5 order-lg-first order-last mt-3 mt-lg-0">
                    <div class="container mb-4 mt-lg-0 mt-4 justify-content-center">
                        <div class="row text-center justify-content-center">
                            <p class="tiny mr-3 text-center"><span class="far grey fa-heart mr-1"></span> 0 Likes</p>
                            <p class="tiny mr-3 mb-3 text-center"><span class="far grey fa-comments mr-1"></span>0 Comments</p>
                        </div>

                        <div class="row text-left justify-content-center">
                            <img class="mr-2 mb-2 blog-image " src="https://picsum.photos/55/55?image={{rand(500,600)}}" alt="">
                            <div class="tiny"><h6 class="black ">{{$blog->user->name}}<br></h6> {{$blog->created_at->format('d-M-Y h:m A')}}</div>
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
                            <a class="btn btn-outline-primary px-3 mr-1 mb-1 btn-sm " href="#" role="button">travel tips</a>
                            <a class="btn btn-outline-primary px-3  mr-1 mb-1 btn-sm " href="#" role="button">travel</a>
                            <a class="btn btn-outline-primary px-3  mr-1 mb-1 btn-sm " href="#" role="button">England</a>
                            <a class="btn btn-outline-primary px-3  mr-1 mb-1 btn-sm " href="#" role="button">travel blog</a>
                            <a class="btn btn-outline-primary px-3  mr-1 mb-1 btn-sm" href="#" role="button">parks</a>
                        </div>
                    </div>

                    <div class="more-info mx-auto my-4">
                        <h6 class="black semibold text-center mx-4 mt-3 mb-3 info-title">Quick Contact</h6>
                        <div class="pb-2">
                            <a href="tel:+133331111"><h5 class="grey text-center tel-info"><i class="fas primary-color fa-phone faa-tada animated mr-2 grey my-lg-0 mb-1"></i>(+1) 3333.1111</h5></a>
                            <a href="mailto:hello@ourcompany.com"><h5 class="grey text-center mail-info"><i class="fas fa-envelope faa-horizontal animated primary-color mr-2"></i>hello@ourcompany.com</h5></a>
                        </div>
                    </div>

                    <div  id="instasidebar" class="grid2 runsidebar mx-auto">
                        <h6 class="black semibold text-center mx-4 mt-3 mb-2 info-title">Instagram Gallery</h6>
                        <div class="grid-sizer w-100"></div>
                    </div>

                    <div class=" mt-4">
                        <a href="#"><img src="{{asset('images/promotion.jpg')}}" class="img-fluid mx-auto d-block mt-5" alt=""></a>
                    </div>
                </div>

                <div class="col-xs-12 col-md-12 col-lg-8 single-tour">
                    <h4 id="read-tour" class="black text-left mb-3 bold">{{$blog->title}}</h4>


                    <div class="separator-tour"></div>

                    <div class="">
                        <div class="tour-schedule">
                            <h6 class="black bold mt-4 mb-3">{{$blog->subtitle}}</h6>

                            <p>{{$blog->body}}</p>
                            <img src="https://picsum.photos/600/400?image={{rand(500,600)}}" alt="{{$blog->subtitle}}" class="img-fluid">

                        </div>
                        <h6 class="bold mt-5 black">Comment Section </h6>

                        <div class="comments-container">

                            <ul id="comments-list" class="comments-list">
                                <li>
                                    <div class="comment-main-level ">

                                        <div class="comment-avatar d-none d-md-block"><img src="https://picsum.photos/55/55?image={{rand(500,600)}}" alt=""></div>
                                        <div class="comment-box mb-3">
                                            <div class="comment-head">
                                                <h6 class="comment-name by-author"><a href="#">{{$blog->user->name}}</a></h6>
                                                <span class="time-blog">{{$blog->created_at->diffForHumans()}}</span>
                                            </div>
                                            <div class="comment-content">
                                                {{$blog->title}}
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="comments-list reply-list">
                                        <li>
                                            <div class="comment-avatar  d-none d-md-block"><img src="assets/images/chadblog.jpg" alt=""></div>
                                            <div class="comment-box mb-3">
                                                <div class="comment-head">
                                                    <h6 class="comment-name"><a href="#">Chad Guideaur</a></h6>
                                                    <span class="time-blog">1 hour ago</span>

                                                </div>
                                                <div class="comment-content">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?

                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="comment-avatar   d-none d-md-block"><img src="assets/images/chadblog.jpg" alt=""></div>
                                            <div class="comment-box mb-3">
                                                <div class="comment-head">
                                                    <h6 class="comment-name by-author"><a href="#">Chad Guideaur</a></h6>
                                                    <span class="time-blog">1 hour ago</span>
                                                </div>
                                                <div class="comment-content">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <div class="comment-main-level ">
                                        <div class="comment-avatar  d-none d-md-block"><img src="assets/images/chadblog.jpg" alt=""></div>
                                        <div class="comment-box">
                                            <div class="comment-head">
                                                <h6 class="comment-name"><a href="#">Chad Guideaur</a></h6>
                                                <span class="time-blog">3 hours ago</span>

                                            </div>
                                            <div class="comment-content">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="mt-5  mx-auto my-auto">
                            <h6 class="black bold mt-5 ml-md-0 ml-4 text-center">Leave a comment</h6>
                            <form class="form-comment ">
                                <div class="row ">

                                    <div class="col-md-6 col-12 text-center">
                                        <label  for="inputname">Your Name</label>
                                        <input type="text" class="form-control mb-3" id="inputname" placeholder="John Doe">
                                    </div>

                                    <div class="col-md-6 col-12  text-center">
                                        <label for="inputmail">Email Adress</label>
                                        <input type="text" class="form-control" id="inputmail" placeholder="Johndoe@gmail.com">
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-12 ">
                                        <div class="form-group text-center">
                                            <label for="exampleFormControlTextarea1">Your thoughts about this blog...</label>
                                            <textarea class="form-control" placeholder="Was it helpful?" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 offset-lg-3 col-12">
                                        <button type="submit" class="btn col-sm-12 mt-2 btn-primary">Send Thoughts</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
