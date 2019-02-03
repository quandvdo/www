@extends('frontend._layout.main')

@push('script')
    <script>
        function initMap() {
            let uluru = {lat: 21.0227387, lng: 105.8194541};
            let map = new google.maps.Map(document.getElementById('map'), {
                zoom: 14,
                center: uluru
            });
            let marker = new google.maps.Marker({
                position: uluru,
                map: map
            });
        }
    </script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAX6LW8_BIKXNVzx205L88xRdjfaf5dpfg&callback=initMap">
    </script>
@endpush

@section('content')
    <!-- section 1 Title-->
    <div class="tour-title not-fixed ">

        <img class="w-100 h-100" src="{{asset('images/toronto.jpg')}}" alt="">
        <h1 class="white text-center front shadow-text center-text">Contact Us</h1>
        <img class="curve2 front" src="{{asset('svg/curvegrey.svg')}}" alt="">
    </div>
    <!-- End section 1-->

    <!-- Section 2 about us-->
    <section id="pagesection">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <section class="map-fullwidth">
                        <div id="map"></div>
                    </section>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-12 order-md-first order-last">

                    <form id="contact-form" method="post" action="{{route('contactPost')}}" role="form">
                        <div class="messages"></div>
                        <div class="controls">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group text-center">
                                        <label for="form_name">First name *</label>
                                        <input id="form_name" type="text" name="name" class="form-control"
                                               placeholder="Please enter your first name *" required="required"
                                               data-error="Firstname is required.">
                                        <div class="help-block with-errors tiny mt-2"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group text-center">
                                        <label for="form_lastname">Last name *</label>
                                        <input id="form_lastname" type="text" name="surname" class="form-control"
                                               placeholder="Please enter your last name *" required="required"
                                               data-error="Lastname is required.">
                                        <div class="help-block with-errors tiny mt-2"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group text-center">
                                        <label for="form_email">Email *</label>
                                        <input id="form_email" type="email" name="email" class="form-control"
                                               placeholder="Please enter your email *" required="required"
                                               data-error="Valid email is required.">
                                        <div class="help-block with-errors tiny mt-2"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group text-center">
                                        <label for="form_phone">Phone</label>
                                        <input id="form_phone" type="tel" name="phone" class="form-control"
                                               placeholder="Please enter your phone">
                                        <div class="help-block with-errors tiny mt-2"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group text-center">
                                        <label for="form_message">Message *</label>
                                        <textarea id="form_message" name="message" class="form-control"
                                                  placeholder="What tour are you interested in? *" rows="4"
                                                  required="required"
                                                  data-error="Please,leave us a message."></textarea>
                                        <div class="help-block with-errors tiny mt-2"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <input type="submit" class="btn btn-primary px-4 btn-send" value="Send message">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 mt-4">
                                    <p class="text-muted"><strong>*</strong> These fields are required.</p>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>

                <div class="col-md-5 col-12 mb-5 text-left">
                    <h3 class="black bold front mb-2 mt-2 ">Feel free to<br> connect with us</h3>
                    <h5 class="primary-color section-title mb-3">Open Hours: 08:00 AM - 23.00 PM</h5>
                    <div class="separator"></div>
                    @foreach($options as $option)
                        @if($option->type == 'global')
                            @if($option->key == 'intro')
                                <p class=" text-block">{!! $option->value !!}</p>
                            @endif
                        @endif
                    @endforeach
                    <p>
                    <ul class="list-unstyled quick-links">
                        @foreach($options as $option)
                            @if($option->type == 'global')
                                @if($option->key == 'intro')
                                @else
                                    <li><h5><i class="fas {{$option->icon}} mr-2"></i>{{$option->value}}</h5></li>
                                @endif
                            @endif
                        @endforeach
                    </ul>
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8 offset-md-2 text-center  col-10 offset-1 mt-5">
                    <div class="text-center white-popup">
                        @foreach($options as $item)
                            @if($item->type == 'social')
                                <li class="list-inline-item">
                                    <a href="{{$item->value}}"><i class="fab {{$item->icon}}"></i></a>
                                </li>
                            @endif
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection