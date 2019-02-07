@extends('frontend._layout.main')

@push('meta')

    <meta property="og:url" content="http:{{urldecode(url()->current())}}"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="{{$tour->title}}"/>
    <meta property="og:description" content="{{$tour->highlight}}"/>
    <meta property="og:image" content="{{$tour->img}}"/>
@endpush

@section('content')

    @component('frontend.components.subheader',
        ['title' => $tour->title,
        'img' => 'search.jpg'])
    @endcomponent

    <section id="section3" class="tour-list-sidebar tour-list-sidebar-2-col">
        <div class="container-fluid">
            <div class="row">
                @include('frontend.components.sidebar-detail', ['name' => $tour->title])

                <div class="col-xs-12 col-md-12 col-lg-8 single-tour">
                    <h4 id="read-tour" class="black text-left mb-3 bold">{{$tour->title}}</h4>

                    <div class="row">
                        <div class="col-lg-4 col-sm-4 col-12 text-left">
                            <h6 class="primary-color semibold price-big">
                                ${{number_format($tour->price->price,2)}}
                                <span class="semibold subtitle">&nbsp;/ Per Person</span>
                            </h6>
                        </div>

                        <div class="col-sm-8 col-12 text-left ml-sm-0">
                            <div class=" ml-0 mt-1">
                                <a class="btn btn-primary px-3 text-left mr-1 mb-1 btn-sm"
                                   href="{{route('destination.detail', ['slug' => str_replace(' ','-',$tour->location->city)])}}"
                                   role="button">{{$tour->location->city}}</a>
                                <a class="btn btn-info px-3 mx-1 text-left mx-2 mb-1 btn-sm"
                                   href="{{route('category.detail', ['slug' => $tour->category->name])}}"
                                   role="button">{{$tour->category->name}}</a>
                                <a class="btn btn-danger px-3 mx-1 text-left mx-2 mb-1 btn-sm"
                                   href="{{route('package.index')}}"
                                   role="button">{{$tour->isPackage ? 'Package' : 'Tour'}}</a>
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
                                        class="black bold">{{$tour->location->city}}</span></p>
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
                                <div class="tour-item-description list-font">{{$tour->location->city}}</div>
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
                                    @foreach($tour->addons as $item)
                                        @if($item->type == 2)
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
                                    @foreach($tour->addons as $item)
                                        @if($item->type == 1)
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
                        @include('frontend.components.comment',['comments' => $tour->comments, 'id' =>$tour->id , 'type'=>'tour'])
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
