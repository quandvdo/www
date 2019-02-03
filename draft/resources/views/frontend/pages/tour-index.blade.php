@extends('frontend._layout.main')

@section('content')
    @component('frontend.components.subheader',
    ['title' => 'Find Your Perfect Tour',
    'img' => 'search.jpg'])
    @endcomponent

    <!-- Section 3 Tours-->
    <section id="section3" class="tour-list-sidebar tour-list-sidebar-2-col">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-md-6 col-lg-3 ml-lg-5 order-lg-first order-last mt-3 mt-lg-0">
                    <div class="form-container py-3">
                        <h4 class="black bold mt-3 px-4 pb-2 text-center">Search your Destination</h4>
                        <form id="sidebar-form" class="px-xl-5 px-lg-3 px-5">
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <div class="input-group">
                                        <input type="email" class="form-control" id="inputEmail3"
                                               placeholder="Search Tours">
                                        <div class="input-group-append">
                                            <div class="input-group-text"><i class="fa fa-search"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <div class="input-group">
                                        <select class="form-control" id="inlineFormInputName1">
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
                                        <div class="input-group-append">
                                            <div class="input-group-text"><i class="fas fa-calendar"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <div class="input-group">
                                        <select class="form-control" id="inlineFormInputName2">
                                            <option selected>Tour Type</option>
                                            <option value="1">Adventure</option>
                                            <option value="2">Romantic</option>
                                            <option value="3">Vacation</option>
                                            <option value="3">Explore</option>
                                        </select>
                                        <div class="input-group-append">
                                            <div class="input-group-text"><i class="fas fa-chevron-down"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <div class="input-group">
                                        <select class="form-control" id="inlineFormInputName3">
                                            <option selected>Sort by Name</option>
                                            <option value="1">Price low to high</option>
                                            <option value="2">Price high to low</option>
                                            <option value="3">Sort by Date</option>
                                        </select>
                                        <div class="input-group-append">
                                            <div class="input-group-text"><i class="fas fa-sort-amount-up"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <div class="input-group">
                                        <input class="form-control py-2 border-right-0 border" type="search"
                                               placeholder="Destination" id="example-search-input">
                                        <div class="input-group-append">
                                            <div class="input-group-text"><i class="far fa-compass"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <div class="d-block">
                                        <p class=" text-center">
                                            <label class="text-center" for="amount">Price range:</label>
                                            <input class="text-center" type="text" id="amount" readonly>
                                        </p>
                                    </div>
                                    <div id="slider-range"></div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn col-sm-12 my-2 btn-primary">Search</button>

                                </div>
                            </div>
                        </form>
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
                    <a href="#"><img src="{{asset('images/promotion.jpg')}}"
                                     class="w-100 img-fluid mx-auto d-block mt-4"
                                     alt=""></a>
                </div>
                @if(!$tours->isEmpty())
                    @foreach($tours->chunk(4) as $item)
                        <div class="col-xs-12 col-md-6 col-lg-4">
                            @foreach($item as $tour)
                                <a class="card-full" href="{{$tour->slug}}">
                                    <div class="card-image-holder mb-4">
                                        <img class="w-100 h-100"
                                             src="https://picsum.photos/550/367?image={{rand(800,900)}}"
                                             alt="{{$tour->name}}">
                                        <div class="card-days front">
                                            <small class="white front tiny"><span
                                                        class="far fa-clock mr-2 white"></span>{{rand(3,15)}}<br>days
                                            </small>
                                        </div>
                                        <div class="card-content front col-12 align-items-center w-100">
                                            <div class="row  align-items-center">
                                                <div class="col-7">
                                                    <h6 class="white mb-1">{{$tour->title}}</h6>
                                                </div>
                                                <div class="col-5 align-middle pr-4">
                                                    <h6 class="white text-right mb-0">
                                                        ${{number_format($tour->activePrice()->price,2)}}</h6>
                                                    <div class="review-card-image text-right mb-2 pb-1 mr-0">
                                                        @for($i = 0 ; $i < rand(3,5);$i++)
                                                            <i class="fas fa-star"></i>
                                                        @endfor
                                                        <span class="tiny white"> 0 reviews </span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bottom-tour-background"></div>
                                    </div>
                                </a>
                            @endforeach

                        </div>
                    @endforeach

                @else
                    <div class="col">
                        <h6>There are currently no available tours. Please try again. Thank you</h6>
                    </div>
                @endif

            </div>
            {{$tours->links()}}
        </div>
    </section><!-- End section 3 tours-->

@endsection
