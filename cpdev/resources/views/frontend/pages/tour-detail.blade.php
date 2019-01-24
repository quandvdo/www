@extends('frontend._layout.main')

@section('content')

    @component('frontend.components.subheader',
['title' => $tour->title,
'img' => 'search.jpg'])
    @endcomponent

    <section id="section3" class="tour-list-sidebar tour-list-sidebar-2-col">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-md-6 col-lg-3 ml-lg-5 ml-sm-3 order-lg-first order-last mt-3 mt-lg-0">

                    <div class="mb-lg-3 mb-4 mt-lg-0 mt-4 text-center">
                        <a href="#gallery-1" role="button" class="btn-gallery mb-2 d-lg-inline-block d-block">
                                    <span id="btnFA" class="btn btn-outline-danger pt-2 mr-1  px-3">
                                            View Gallery
                                        <i class="ml-2 fas fa-images"></i>
                                    </span>
                        </a>
                        <div id="gallery-1" class="hidden">
                            @for($i=0 ; $i < rand(3,9); $i++)
                                <a href="https://picsum.photos/1920/928?image={{rand(1,1000)}}">Image {{$i}}</a>
                            @endfor
                        </div>

                        <a href="#test-popup" role="button" class="open-popup-link d-lg-inline-block d-block">
                                    <span id="btnFA2" class="btn btn-outline-danger pt-2 px-3 ">
                                            Share Tour
                                        <i class="ml-2 fas fa-share-alt"></i>
                                    </span>
                        </a>

                        <div id="test-popup" class="white-popup mfp-hide text-center">
                            <a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.facebook.com%2Fcompasstravelvietnam"
                               target="_blank">
                                <i class="fab fa-facebook-f"></i></a> &nbsp;

                            <a href="https://twitter.com/intent/tweet?text=CompassTravelvietnam&url=http%3A%2F%2Fwww.facebook.com%2Fcompasstravelvietnam"
                               target="_blank">
                                <i class="fab fa-twitter"></i></a>&nbsp;

                            <a href="https://plus.google.com/share?url=http%3A%2F%2Fwww.facebook.com%2Fcompasstravelvietnam">
                                <i class="fab fa-google-plus-g"></i>
                            </a>

                            <a href="mailto:hi@compasstravel.vn">
                                <i class="fas fa-envelope"></i></a>
                        </div>
                    </div>


                    <div class="form-container px-3 py-3">

                        <h4 class="black bold mt-3 px-4 pb-2 text-center">Book this tour</h4>

                        <form id="sidebar-form" class="px-xl-3 px-lg-3 px-3">

                            <div class="form-group text-center">
                                <label class="" for="inputname">Your Name</label>
                                <input type="text" class="form-control" id="inputname" placeholder="John Doe">
                            </div>

                            <div class="form-group text-center">
                                <label class="" for="inputmail">Email Adress</label>
                                <input type="text" class="form-control" id="inputmail" placeholder="johndoe@gmail.com">
                            </div>

                            <div class="form-group text-center">
                                <label class="text-center" for="inputtours">Tour Interested In</label>
                                <input type="text" class="form-control" id="inputtours"
                                       placeholder="Mystical Machu Picchu">
                            </div>

                            <div class="form-group text-center departure">
                                <label class="" for="datepicker">Departure Date</label>
                                <div class="input-group">
                                    <input type="text" id="datepicker" placeholder="Choose your Date"
                                           class="form-control">
                                    <div class="input-group-append">
                                        <div class="input-group-text"><i class="fas fa-calendar"></i></div>
                                    </div>
                                </div>

                            </div>

                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn col-sm-12 my-2 btn-primary">Book Now</button>
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

                <div class="col-xs-12 col-md-12 col-lg-8 single-tour">
                    <h4 id="read-tour" class="black text-left mb-3 bold">{{$tour->title}}</h4>

                    <div class="row">
                        <div class="col-lg-4 col-sm-4 col-12 text-left">
                            <h6 class="primary-color semibold price-big">
                                ${{number_format($tour->activePrice()->price,2)}}
                                <span class="semibold subtitle">&nbsp;/ Per Person</span>
                            </h6>
                        </div>

                        <div class="col-sm-8 col-12 text-left ml-sm-0">
                            <div class=" ml-0 mt-1">
                                <a class="btn btn-primary px-3 text-left mr-1 mb-1 btn-sm"
                                   href="{{route('destination.detail', ['slug' => str_replace(' ','-',$tour->location)])}}"
                                   role="button">{{$tour->location}}</a>
                                <a class="btn btn-primary px-3 mx-1 text-left mx-2 mb-1 btn-sm"
                                   href="{{route('category.detail', ['slug' => $tour->category->name])}}"
                                   role="button">{{$tour->category->name}}</a>
                            </div>
                        </div>

                    </div>

                    <div class="separator-tour"></div>

                    <div class="row">
                        <div class="col-lg-3 col-6 order-1 order-lg-1">
                            <img class="svgcenter mb-2 age-icon" src="{{asset('svg/age.svg')}}" alt="">
                        </div>
                        <div class="col-lg-3 col-6 order-2 order-lg-2">
                            <img class="svgcenter mt-2 mb-2 duration-icon" src="{{asset('svg/duration.svg')}}" alt="">
                        </div>
                        <div class="col-lg-3 col-6 order-5 order-lg-3">
                            <img class="svgcenter mb-2 location-icon" src="{{asset('svg/location.svg')}}" alt="">
                        </div>
                        <div class="col-lg-3 col-6 order-6 order-lg-4">
                            <img class="svgcenter mt-3 mb-2 calendar-icon" src="{{asset('svg/calendar.svg')}}" alt="">
                        </div>
                        <div class="col-lg-3 col-6 order-3 order-lg-5">
                            <p class="grey text-center">Age<br><span class="black bold">+{{$tour->age}}</span></p>
                        </div>
                        <div class="col-lg-3 col-6 order-4 order-lg-6">
                            <p class="grey text-center">Duration<br><span class="black bold">{{$tour->duration}}
                                    Days</span></p>
                        </div>
                        <div class="col-lg-3 col-6 order-7 order-lg-7">
                            <p class="grey text-center">Location<br><span
                                        class="black bold">{{$tour->location}}</span></p>
                        </div>
                        <div class="col-lg-3 col-6 order-8 order-lg-8">
                            <p class="grey text-center mx-2">Dates<br><span class="black bold">{{$tour->month}}</span>
                            </p>
                        </div>
                    </div>

                    <div class="separator-tour"></div>
                    <div class="single-tour-container">
                        <ul>
                            <li>
                                <div class="tour-item-title list-font">Highlight</div>
                                <div class="tour-item-description list-font">
                                    {{$tour->highlight}}
                                </div>
                            </li>
                            <li>
                                <div class="tour-item-title list-font">Departure</div>
                                <div class="tour-item-description list-font">{{$tour->location}}</div>
                            </li>
                            <li>
                                <div class="tour-item-title list-font">Next Departure</div>
                                <div class="tour-item-description list-font">{{$tour->departure_time}}</div>
                            </li>

                            <li>
                                <div class="tour-item-title list-font">Accommodation</div>
                                <div class="tour-item-description list-font">All Inclusive</div>
                            </li>
                            <li>
                                <div class="tour-item-title list-font">What´s Included</div>
                                <div class="tour-item-description list-font">
                                    @foreach($tour->addon as $item)
                                        @if($item->type==2)
                                            <div>
                                                <i class="fas fa-check-circle"></i>Free - {{$item->name}}
                                                (${{$item->price}})
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </li>

                            <li>
                                <div class="tour-item-title list-font">Not Included</div>
                                <div class="tour-item-description list-font">
                                    @foreach($tour->addon as $item)
                                        @if($item->type==1)
                                            <div><i class="fas fa-times-circle"></i>{{$item->name}} - (${{$item->price}}
                                                )
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </li>
                            <li>
                                <div class="tour-item-title list-font">Description</div>
                                <div class="tour-item-description list-font">
                                    {{$tour->description}}
                                </div>
                            </li>
                            <li>
                                <div class="tour-item-title list-font">Itinerary</div>
                                <div class="tour-item-description list-font">
                                    {{$tour->itinerary}}
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
