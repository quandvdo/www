@extends('frontend._layout.main')

@section('content')
    @component('frontend.components.subheader',
        ['title' => $dest->city . ' City',
        'img' => 'destinations.jpg'])
    @endcomponent

    <section id="section3" class="tour-list-sidebar tour-list-sidebar-2-col">

        <div class="container-fluid">
            <div class="row">
                @include('frontend.components.sidebar-detail', ['name' => $dest->city . ' Tours'])

                <div class="col-xs-12 col-md-11 col-lg-8 single-tour">

                    <h4 id="read-tour" class="black text-left mb-3 bold">{{$dest->city}} City</h4>

                    <div class="separator-tour"></div>
                    <div class="cardHolder album">
                        <a href="images/central-park-2.jpg" class="image-link card-grid-popup">
                            <img class="card-grid-popup2" src="images/central-park-2.jpg" alt="image"/>
                        </a>
                        <a href="images/central-newyork.jpg" class="image-link card-grid-popup">
                            <img class="card-grid-popup2" src="images/central-newyork.jpg" alt="image"/>
                        </a>
                        <a href="images/newyorkbridge.jpg" class="image-link card-grid-popup">
                            <img class="card-grid-popup2" src="images/newyorkbridge.jpg" alt="image"/>
                        </a>
                        <a href="images/central-park-1.jpg" class="image-link card-grid-popup">
                            <img class="card-grid-popup2" src="images/central-park-1.jpg" alt="image"/>
                        </a>
                        <a href="images/newyork.jpg" class="image-link card-grid-popup">
                            <img class="card-grid-popup2" src="images/newyork.jpg" alt="image">
                        </a>
                        <a href="images/newyork-sports.jpg" class="image-link card-grid-popup">
                            <img class="card-grid-popup2" src="images/newyork-sports.jpg" alt="image"/>
                        </a>
                    </div>

                    <div class="separator-tour"></div>

                    <ul class="single-tour-container">
                        <li>
                            <div class="tour-item-title list-font mb-sm-0 mb-3">Map Location</div>
                            <div class="tour-item-description list-font">
                                <div id="map-small"></div>
                                <script>
                                    function initMap() {
                                        var uluru = {lat: 40.73429, lng: -73.9922259};
                                        var map = new google.maps.Map(document.getElementById('map-small'), {
                                            zoom: 12,
                                            center: uluru
                                        });
                                        var marker = new google.maps.Marker({
                                            position: uluru,
                                            map: map
                                        });
                                    }
                                </script>
                                <script async defer
                                        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAX6LW8_BIKXNVzx205L88xRdjfaf5dpfg&callback=initMap">
                                </script>
                            </div>
                        </li>

                        <li>
                            <div class="tour-item-title list-font">Spoken Language</div>
                            <div class="tour-item-description list-font">Vietnamese, English</div>
                        </li>

                        <li>
                            <div class="tour-item-title list-font">Visa</div>
                            <div class="tour-item-description list-font">Only Required when entering Vietnam<br>
                                Visa Upon Arrival service is available <br>
                                Please contact us for more information
                            </div>
                        </li>

                        <li>
                            <div class="tour-item-title list-font">Accepted Currency</div>
                            <div class="tour-item-description list-font">Vietnam Dong, US Dollar, Euro.</div>
                        </li>

                        <li>
                            <div class="tour-item-title list-font">Area in km²</div>
                            <div class="tour-item-description list-font">{{$dest->area}}</div>
                        </li>

                    </ul>

                    <div class="mr-lg-5">
                        <div class="tour-schedule">
                            <h6 class="black bold mt-5 mb-3">{{$dest->title}}</h6>

                            <p>{{$dest->description}}</p>

                        </div>
                    </div>
                    <div class="row">
                        @if($tours != null)
                            <div class="col-lg-12">
                                <h6>Related Tours in this area</h6>
                            </div>
                            @foreach($tours->activities as $tour)
                                <div class="col-xs-12 col-md-6 col-lg-6">
                                    <a class="card-full" href="/tours/{{$tour->slug}}">
                                        <div class="card-image-holder mb-4">
                                            <img class="w-100 h-100"
                                                 src="https://picsum.photos/550/367?image={{rand(800,900)}}"
                                                 alt="{{$tour->name}}">
                                            <div class="card-days front">
                                                <small class="white front tiny"><span
                                                            class="far fa-clock mr-2 white"></span>{{$tour->duration}}
                                                    <br>days
                                                    {!! !$tour->isActive ? '<br>Comming soon' : '' !!}
                                                </small>
                                            </div>
                                            <div class="card-content front col-12 align-items-center w-100">
                                                <div class="row  align-items-center">
                                                    <div class="col-7">
                                                        <h6 class="white mb-1">{{$tour->title}}</h6>
                                                    </div>
                                                    <div class="col-5 align-middle pr-4">
                                                        <h6 class="white text-right mb-0">
                                                            ${{number_format($tour->price->price,2)}}</h6>
                                                        <div class="review-card-image text-right mb-2 pb-1 mr-0">
                                                         {{--   @for($i = 0 ; $i < rand(3,5);$i++)
                                                                <i class="fas fa-star"></i>
                                                            @endfor--}}

                                                            <span class="tiny white">{{$tour->all_comments_count}} reviews </span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="bottom-tour-background"></div>
                                        </div>
                                    </a>


                                </div>
                            @endforeach
                        @else
                            <div class="col-xs-12 col-md-6 col-lg-12">
                                There are no current active tours in this city
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
