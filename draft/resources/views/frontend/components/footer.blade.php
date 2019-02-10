<!-- Footer -->
<footer>
    <section id="footer" class="no-print">
        <div class="container">
            <div class="row text-center text-xs-center text-sm-left text-md-left">
                <!-- Contact Information -->
                <div class="col-xs-12 col-md-6 col-lg-4">
                    <h6 class="white mt-4">Contact Us</h6>
                    <ul class="list-unstyled quick-links">
                        @foreach($options as $option)
                            @if($option->type == 'global')
                                @if($option->key == 'intro')
                                    <li><p class="white light">{!! $option->value !!}</p></li>
                                @else
                                    <li><h5><i class="fas {{$option->icon}} mr-2"></i>{{$option->value}}</h5></li>
                                @endif
                            @endif
                        @endforeach
                    </ul>
                </div>

                <!-- Social Networks -->
                <div class="col-xs-12 col-md-6 col-lg-4">
                    <img class="svgcenter mt-4 logo-light" src="{{asset('svg/duration.svg')}}" alt="image">
                    <ul class="list-unstyled list-inline mt-3 social text-center">
                        @foreach($options as $item)
                            @if($item->type == 'social')
                                <li class="list-inline-item">
                                    <a href="{{$item->value}}"><i class="fab {{$item->icon}}"></i></a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                    <ul class="list-unstyled text-center quick-links mt-3">
                        <li><a href="{{route('landing')}}"><i class="fa fa-angle-double-right"></i>Home</a></li>
                        <li><a href="{{route('tour.index')}}"><i class="fa fa-angle-double-right"></i>See our Tours</a>
                        </li>
                        <li><a href="{{route('package.index')}}"><i class="fa fa-angle-double-right"></i>See our Package</a>
                        </li>
                        <li><a href="{{route('about')}}"><i class="fa fa-angle-double-right"></i>About Us</a></li>
                        <li><a href="{{route('contact')}}"><i class="fa fa-angle-double-right"></i>Contact Us</a></li>
                    </ul>

                </div>


                <!-- Instagram Feed -->
                <div id="instafeed" class="col-xs-12 col-md-6 col-lg-4 grid mx-auto">
                    <h6 class="white mt-4 mb-3">Instagram Gallery</h6>
                    <div class="grid-sizer"></div>
                </div>

            </div>

            <!-- GO UP rectangle -->
            <div class="scale-up">
                <a class="smooth-scroll  rectangle-right" href="#">
                    <div class="go-up px-1">
                        <i class="fas mb-2 fa-arrow-up"></i><br>
                        <h6 class="text-center letters-up">GO<br>UP</h6>
                    </div>
                </a>
            </div>

            <!-- Copyright Info-->
            <div class="row">
                <div class="col-12 mt-2 mt-sm-2 text-center text-white">
                    <div class="separatorfullwidth"></div>
                    <p class="white footer-bottom">© Copyright Compass Travel - <a class="text-green ml-2"
                                                                                   href="mailto:quandvdo@gmail.com"
                                                                                   target="_blank">by Kudi</a></p>
                </div>
            </div>
        </div>
    </section>
</footer>
<!-- End of Footer -->