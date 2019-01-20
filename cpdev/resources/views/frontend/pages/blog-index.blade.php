@extends('frontend._layout.main')

@section('content')
    <!-- Title section 1 -->
    <div class="tour-title not-fixed ">

        <img class="w-100 h-100" src="{{asset('images/blog-single.jpg')}}" alt="">
        <h1 class="white text-center front shadow-text center-text">Recent blogs</h1>
        <img class="curve2 front" src="{{asset('svg/curve.svg')}}" alt="">

    </div>
    <!-- End section 1-->


    <section id="section3" class="tour-list-sidebar tour-list-sidebar-2-col">

        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-md-6 col-lg-3 ml-lg-5 order-lg-first order-last mt-3 mt-lg-0">

                    <div class="input-group mb-4 search-button">
                        <input class="form-control border-secondary py-2" placeholder="Search a Tour...">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>

                    <div class="more-info tags my-4">

                        <h6 class="black semibold text-center mx-4 mt-3 mb-3 info-title">Popular Tags</h6>

                        <div class="text-center px-3 px-lg-2 pb-3 ">
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

                    <div class="more-info mx-auto my-4">
                        <h6 class="black semibold text-center mx-4 mt-3 mb-3 info-title">Quick Contact</h6>
                        <div class="pb-2">

                            <a href="tel:+133331111"><h5 class="grey text-center tel-info"><i
                                            class="fas primary-color fa-phone faa-tada animated mr-2 grey my-lg-0 mb-1"></i>(+1)
                                    3333.1111</h5></a>
                            <a href="mailto:hello@ourcompany.com"><h5 class="grey text-center mail-info"><i
                                            class="fas fa-envelope faa-horizontal animated primary-color mr-2"></i>hello@ourcompany.com
                                </h5></a>
                        </div>
                    </div>


                    <div id="instasidebar" class="grid2 runsidebar">
                        <h6 class="black semibold text-center mx-4 mt-3 mb-2 info-title">Instagram Gallery</h6>
                        <div class="grid-sizer"></div>
                    </div>


                    <div class=" mt-4">
                        <a href="#"><img src="{{asset('images/promotion.jpg')}}" class="img-fluid mx-auto d-block mt-5"
                                         alt=""></a>
                    </div>
                </div>

                <div class="col-xs-12 col-md-12 col-lg-8 single-tour">
                    <div class="row">
                        @if(!$blogs->isEmpty())
                            @foreach($blogs->chunk(2) as $item)
                                <div class="col-lg-12 {{$loop->iteration  % 2 == 0 ? 'travel-right' : 'travel-left'}}">
                                    @foreach($item as $blog)
                                        <div class="single-travel media mb-5">
                                            <img class="img-fluid d-flex mr-3 "
                                                 src="https://picsum.photos/200/300?image={{rand(700,800)}}"
                                                 alt="{{$blog->title}}">
                                            <div class="dates tiny white">
                                                <span>{{$blog->created_at->format('d')}}</span>
                                                <p class="white  text-center">{{$blog->created_at->format('M')}}</p>
                                            </div>
                                            <div class="media-body mt-sm-0 mt-3  align-self-center">
                                                <a class="title-blog black" href="/blog/{{$blog->slug}}"><h6
                                                            class="mt-0 ">{{$blog->title}}</h6></a>

                                                <p class="">{{$blog->subtitle}}
                                                </p>
                                                <div class="meta-bottom d-flex justify-content-between">
                                                    <p class="primary-color"><span
                                                                class="far primary-color fa-heart"></span> 0
                                                        Likes</p>
                                                    <p class="primary-color"><span
                                                                class="far primary-color fa-comments"></span>
                                                        0
                                                        Comments</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endforeach
                            {{ $blogs->links() }}
                            @else
                            <h6>There are no recent news, please check again later. Thank you</h6>
                        @endif
                    </div>

                </div>

            </div>
        </div>
    </section>

@endsection
