@extends('frontend._layout.main')

@section('content')
    {{--Section 1 JumboTron--}}
    <section id="chapter1" class="chapter">
        <div class="container text-center justify-content-center align-items-center searchform">
            <h3 class="white mx-2 my-3 text-center shadow-text d-block">Find the place it suits you best</h3>
            <form class="form-inline text-center justify-content-center align-items-center ">
                <input type="text" class="form-control-inline2 form-control mb-2 mr-lg-2 mx-md-0 mx-4 py-2"
                       id="inlineFormInputName1" placeholder="Search Tours">
                <span class="fas fa-search iconform"></span>

                <select class="mb-2 mr-lg-2 mx-4 mx-md-0 form-control form-control-inline2" id="inlineFormInputName2">
                    <option selected>Any month</option>
                    <option value="1">January</option>
                    <option value="2">February</option>
                    <option value="3">March</option>
                    <option value="1">April</option>
                    <option value="2">May</option>
                    <option value="3">June</option>
                    <option value="1">July</option>
                    <option value="2">August</option>
                    <option value="3">September</option>
                    <option value="3">Octuber</option>
                    <option value="3">November</option>
                    <option value="3">December</option>
                </select>
                <span class="fas fa-calendar iconform"></span>

                <select class=" mb-2 mr-lg-2 mx-4 mx-md-0 form-control form-control-inline2" id="inlineFormInputName3">
                    <option selected>Tour Type</option>
                    <option value="1">Adventure</option>
                    <option value="2">Romantic</option>
                    <option value="3">Vacation</option>
                    <option value="3">Explore</option>
                </select>
                <span class="fas fa-chevron-down iconform"></span>

                <button type="submit" class="btn btn-primary mb-2 mx-4 mx-md-0 mr-lg-2 py-2 form-control-inline3">Search
                </button>

            </form>
        </div>
        <div class="chapter2">
            <img class="curve2" src="{{asset('svg/curvegrey.svg')}}" alt="image">
        </div>
    </section>
    <!-- End section 1-->

    {{--Section 2 Destinations--}}
    <section id="section2">
        <div class="container">
            <h2 class="black front">Popular Destinations</h2>
            <div class="row mb-5">
                <div class="col-sm-9 front">
                    <div class="separator "></div>
                    <h5 class="primary-color section-title ">Find the one that suits you best </h5>
                </div>

                <div class="col-sm-3 front my-auto">
                    <a class="btn btn-primary mt-2 px-5 py-2" href="{{route('destination.index')}}" role="button">more
                        destinations</a>
                </div>
            </div>
        </div>
        <div class="container destination-section">
            <div class="row">

                @foreach($cities as $city)
                    <div class="col-lg-3 col-sm-6 col-xs-12 mb-4 mb-lg-0 my-4 complete-image">
                        <a class=""
                           href="{{route('destination.detail',['slug' => \App\Models\Utilities\Helper::slug($city->location)])}}"
                           target="_blank">
                            <div class="destination-item">
                                <img src="https://picsum.photos/300/450?image={{rand(1,1000)}}"
                                     class="img-fluid destination-item" alt="image">
                                <h6 class="white front">{{$city->location}}</h6>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="chapter2">
            <img class="curve2" src="{{asset('svg/curve.svg')}}" alt="image">
        </div>

    </section>
    <!-- End section 2 Destinations-->

    <!-- Section 3 Tours-->

    <section id="section3">
        <div class="container">
            <h2 class="black front">Explore this tours</h2>
            <div class="row mb-5">
                <div class="col-sm-9 front">
                    <div class="separator "></div>
                    <h5 class="primary-color section-title ">Best &amp; More Popular Tours</h5>
                </div>
                <div class="col-sm-3 front my-auto">
                    <a class="btn btn-primary   mt-2 px-5 py-2" href="{{route('tour.index')}}" role="button">more
                        tours</a>
                </div>
            </div>
        </div>

        <div class="content tours-homepage">
            <div class="container">
                <div class="row">
                    @foreach($tours as  $key=>$tour)
                        <div
                                class="col-xs-12 col-md-6 col-lg-4 {{ $loop->last ? 'my-4 mx-auto' : 'mb-lg-0 mb-4 my-4'}}">
                            <div class="card">
                                <small class="white front"><span
                                            class="far fa-clock mr-2 white"></span><strong>{{rand(1,15)}}</strong><br>days
                                </small>
                                <a class="img-card" href="{{route('tour.detail', ['slug' => $tour->slug])}}">
                                    <img src="https://picsum.photos/360/200?image={{rand(1,1000)}}" alt="image"/>
                                </a>
                                <div class="card-content">
                                    @if(rand(0,1) === 1)
                                        <div class="special-offer">
                                            <div class="arrow_box text-center">
                                                <span class="white subtitle bold"> {{rand(10,40)}}% OFF</span>
                                            </div>
                                        </div>
                                    @endif
                                    <div>
                                        <a class="btn btn-primary px-3 btn-sm float-left"
                                           href="{{route('category.detail', ['slug' => $tour->category->name])}}"
                                           role="button">{{$tour->category->name}}</a>
                                    </div>
                                    <h6 class="primary-color text-right">
                                        ${{number_format($tour->activePrice()->price,2)}}</h6>
                                    <h6 class="black">
                                        <a href="/tours/{{$tour->slug}}" target="_blank">{{$tour->title}}</a>
                                    </h6>
                                    <p>
                                        {{$tour->description}}
                                    </p>
                                    <p>
                                        <a href="{{route('tour.detail', ['slug' => $tour->slug])}}"
                                           target="_blank" class="btn btn-link">See more</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="chapter2">
            <img class="curve2" src="{{asset('svg/curvegrey.svg')}}" alt="image">
        </div>
    </section>
    <!-- End section 3 Tours-->

    <section id="section4">
        <div class="container">
            <h2 class="black front">Our Packages</h2>
            <div class="row mb-5">
                <div class="col-sm-9 front">
                    <div class="separator "></div>
                    <h5 class="primary-color section-title ">Best &amp; More Popular Unique Packages</h5>
                </div>
                <div class="col-sm-3 front my-auto">
                    <a class="btn btn-primary mt-2 px-5 py-2" href="{{route('tour.index')}}" role="button">more
                        Packages</a>
                </div>
            </div>
        </div>

        <div class="content tours-homepage">
            <div class="container">
                <div class="row">
                    @foreach($packages as  $key=>$package)
                        <div
                                class="col-xs-12 col-md-6 col-lg-4 {{ $loop->last ? 'my-4 mx-auto' : 'mb-lg-0 mb-4 my-4'}}">
                            <div class="card">
                                <small class="white front">
                                    <span class="far fa-clock mr-2 white"></span>
                                    <strong>{{$package->duration}}</strong>
                                    <br>days
                                </small>
                                <a class="img-card" href="{{route('packages.detail', ['slug' => $package->slug])}}">
                                    <img src="https://picsum.photos/360/200?image={{rand(1,1000)}}" alt="image"/>
                                </a>
                                <div class="card-content">
                                    <div>
                                        <a class="btn btn-primary px-3 btn-sm float-left"
                                           href="{{route('category.detail', ['slug' => $package->category->name])}}"
                                           role="button">{{$package->category->name}}</a>
                                    </div>
                                    <h6 class="primary-color text-right">
                                        ${{number_format($package->activePrice()->price,2)}}</h6>
                                    <h6 class="black"><a href="{{route('packages.detail', ['slug' => $package->slug])}}"
                                                         target="_blank">{{$package->title}}</a></h6>
                                    <p>
                                        {{$package->description}}
                                    </p>
                                    <p>
                                        <a href="{{route('packages.detail', ['slug' => $package->slug])}}"
                                           target="_blank" class="btn btn-link">See more</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </section>
    <!-- End section 3 Packages-->

    <section id="section5">
        <img class="curve3" src="{{asset('svg/curve2.svg')}}" alt="iamge">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content  col-lg-8">
                    <div class="title text-center">
                        <h4 class="mb-5 bold black">Hot topics from Travel Section</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($blogs->chunk(2) as $item)
                    <div class="col-lg-6 {{$loop->last ? 'travel-right' : 'travel-left'}}">
                        @foreach($item as $blog)
                            <div class="single-travel media mb-4">
                                <img class="img-fluid justify-content-center align-items-center mr-sm-3 "
                                     src="https://picsum.photos/640/426?image={{rand(100,300)}}" alt="">
                                <div class="dates tiny white">
                                    <span>{{$blog->created_at->format('d')}}</span>
                                    <p class="white text-center">{{$blog->created_at->format('M')}}</p>
                                </div>
                                <div class="media-body mt-sm-0 mt-3  align-self-center">
                                    <a class="title-blog black" href="/blog/{{ $blog->slug }}"><h6
                                                class="mt-0 ">{{$blog->title}}</h6></a>
                                    <p class="">{{$blog->subtitle}}</p>
                                    <div class="meta-bottom d-flex justify-content-between">
                                        <p class="primary-color"><span class="far primary-color fa-heart"></span> 0
                                            Likes
                                        </p>
                                        <p class="primary-color"><span class="far primary-color fa-comments"></span> 0
                                            Comments
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <a href="{{route('blog.index')}}" class="btn btn-primary">Browse all blogs</a>
                </div>
            </div>
        </div>
        <div class="chapter2">
            <img class="curve2" src="{{asset('svg/curve.svg')}}" alt="image">
        </div>
    </section>
    <!-- End section 3 tours-->
    <section id="section4">
        <div class="container testimonials">
            <div class="row">
                <div class="col-md-8 offset-md-2 col-10 offset-1">
                    <h3 class="text-center  mb-4 black"><strong>Tour Experts</strong></h3>
                    <img class="svgcenter quotesicon" src="{{asset('svg/quotes.svg')}}" alt="image">

                    <div id="testimonialCarousel" class="carousel slide" data-ride="carousel">

                        <div class="carousel-inner mt-0">
                            @foreach($testimonials as $test)
                                <div class="carousel-item text-center {{$loop->first ? 'active' : ''}}">
                                    <h5 class="m-0 pt-3 px-4 black">{{$test->msg}}</h5>
                                    <h6 class="mt-4 mb-0"><strong class="primary-color">{{$test->name}}</strong></h6>
                                    <p class=" m-0 subheading black">{{$test->subheading}}</p>
                                </div>
                            @endforeach
                        </div>
                        <a class="carousel-control-prev " href="#testimonialCarousel" role="button"
                           data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only ">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#testimonialCarousel" role="button"
                           data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                        <ol class="carousel-indicators mt-5">
                            @foreach($testimonials as $test)
                                <li data-target="#testimonialCarousel" data-slide-to="{{$loop->index}}"
                                    class="{{$loop->first ? 'active' : 'action-color'}}"></li>
                            @endforeach
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-12 mt-3 mt-lg-5 mx-auto">
                    <a class="popup-vimeo" href="https://vimeo.com/71319358?autoplay=1">
                        <img src="{{asset('images/lakegirl.jpg')}}" class="img-fluid video-call" alt="image">
                        <div class="play-center">
                            <i class="far fa-7x fa-play-circle"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>

    </section>


    {{--Call to Action--}}
    <section id="sectioncta">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 ">
                    <div class="bs-calltoaction bs-calltoaction-default">
                        <div class="row">
                            <div class="col-md-9  cta-contents ">
                                <h6 class="cta-title ml-lg-5 ml-2 mt-md-3 mt-0 bold white">Explore it all. The sky is
                                    the limit!</h6>
                            </div>
                            <div class="col-md-3 mr-5  cta-button">
                                <a href="{{route('contact')}}" class="btn btn-block px-3 mr-5 btn-primary">Call us
                                    now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection