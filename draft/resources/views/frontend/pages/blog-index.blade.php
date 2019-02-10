@extends('frontend._layout.main')

@section('content')
    @component('frontend.components.subheader',
        ['title' => Route::currentRouteName() == 'blog.index' ? 'All Travel Blogs' : Route::currentRouteName() == 'blog.index' ? 'Recent Travel News' : 'Latest CompassTravel Promotion',
        'img' => 'blog-single.jpg'])S
    @endcomponent

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

                    @include('frontend.components.partials.sidebar.tag')

                    @include('frontend.components.partials.sidebar.quick-contact')


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
                                                <a class="title-blog black" href="/blogs/{{$blog->slug}}"><h6
                                                            class="mt-0 ">{{$blog->title}}</h6></a>
                                                <p>{{\App\Models\Utility\Helper::excerpt($blog->content, 150)}}</p>
                                                <div class="meta-bottom d-flex justify-content-between">
                                                    <p class="primary-color">
                                                        @if($blog->isPromotion)
                                                            <a href="{{route('blog.promotion')}}"
                                                               class="btn btn-primary btn-sm">promotion</a>
                                                        @else
                                                            <a href="{{route('blog.news')}}"
                                                               class="btn btn-info btn-sm">News</a>
                                                        @endif
                                                    </p>
                                                    <p class="primary-color">
                                                        <span class="far primary-color fa-comments"></span> {{$blog->all_comments_count}}
                                                        Comments
                                                    </p>
                                                </div>
                                                <p>
                                                    @foreach($blog->tags as $tag)
                                                        <a href="#"
                                                           class="btn btn-outline-primary px-3 mr-1 mb-1 btn-sm ">{{$tag->name}}</a>
                                                    @endforeach
                                                </p>
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
