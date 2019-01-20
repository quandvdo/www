<!-- navbar -->
<div id="wrapper-navbar">
    <nav class="navbar py-3 fixed-top navbar-expand-lg navbar-light bg-dark">
        <a class="navbar-brand ml-sm-5" href="{{route('landing')}}">
            {{--<img src="{{asset('images/logo.png')}}" alt="Compass Travel Logo">--}}
            Compass Travel
        </a>
        <button class="navbar-toggler collapsed navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="icon-bar top-bar"></span>
            <span class="icon-bar middle-bar"></span>
            <span class="icon-bar bottom-bar"></span>
            <span class="sr-only">Toggle navigation</span>
        </button>
        <div class="collapse navbar-collapse ml-auto" id="navbarSupportedContent">.
            <ul class="navbar-nav ml-auto">
                {{--
                    <li class="nav-item mr-3 open my-lg-0 my-2 ml-lg-0 ml-3">
                        <a href="/" class="nav-link hvr-underline-from-center">Hompage</a>
                    </li>
                --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle mr-3 my-lg-0 my-2 ml-lg-0 ml-3" href="#"
                       id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        Destinations
                    </a>
                    <div class="dropdown-menu dropdownId dropdown-menu-right" aria-labelledby="navbarDropdown2">
                        <a class="dropdown-item mt-1" href="/destinations/Hanoi">Hanoi</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/destinations/Ho-Chi-Minh">Ho Chi Minh</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item mb-1" href="/destinations/">Browse All Destination</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <div class="dropdown-divider d-lg-none"></div>
                    <a class="nav-link dropdown-toggle mr-3 my-lg-0 my-2 ml-lg-0 ml-3" href="#" id="navbarDropdown3"
                       role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Tours
                    </a>
                    <div class="dropdown-divider d-lg-none"></div>
                    <div class="dropdown-menu dropdownId dropdown-menu-right" aria-labelledby="navbarDropdown3">
                        <a class="dropdown-item mt-1" href="/tours/HaLong-Bay-Cruise">Halong Bay Cruise</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/tours/HaLong-Bay-Cruise">Adventure Cruise</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item mb-1" href="/tours/HaLong-Bay-Cruise">Something Cruise</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item mb-1" href="/tours/">Browse All Tours </a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle dropdown-menu-right  ml-lg-0 ml-3 mr-3 my-lg-0 my-2 lastitem"
                       href="#" id="navbarDropdown5" role="button" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        Blogs
                    </a>
                    <div class="dropdown-divider d-lg-none"></div>
                    <div class="dropdown-menu dropdownId dropdown-menu-right" aria-labelledby="navbarDropdown5">
                        <a class="dropdown-item mt-1" href="/blogs/recents">Most recent Travel news</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/blogs">All Travel Blogs</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle dropdown-menu-right ml-lg-0 ml-3 mr-4 my-lg-0 my-2 lastitem"
                       href="#" id="navbarDropdown6" role="button" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        About Us
                    </a>
                    <div class="dropdown-divider d-lg-none"></div>
                    <div class="dropdown-menu dropdownId dropdown-menu-right" aria-labelledby="navbarDropdown6">
                        <a class="dropdown-item mt-1" href="/about-us">About Us</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/our-team">Our Team</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="/contact-us" class="nav-link lastitem">Contact Us</a>
                </li>
            </ul>

            {{--<div class="row d-none d-lg-block sidebartop">
                <div class="col-12 mr-4 sidebar">
                    <div class="mini-submenu">
                        <span class="icon-bar2"></span>
                        <span class="icon-bar2"></span>
                        <span class="icon-bar2"></span>
                    </div>
                    <div class="list-group">
                                <span class="list-group-item active">
                                    <img class="svgcenter mt-4 logo-light" src="{{asset('svg/logolight.svg')}}" alt="image">
                                    <span class="pull-right" id="slide-submenu">
                                    <i class="fa fa-times"></i>
                                    </span>
                                </span>
                        <p class="white py-4 px-5 text-center  list-group-item light">
                            Lorem ipsum diocritatem eu, fierent molestie petentium id his. Ut aeterno nostrum nam, solet
                            sapientem ea quo. Cum te meis illud, aeterno accusata ut vix.
                        </p>
                        <ul class="list-group-item py-4">
                            <li><h5 class="white text-center"><i class="white fas fa-map-marker-alt mr-2"></i>Mave
                                    Avenue, New York</h5></li>
                            <li><h5 class="white text-center"><i class="white fas fa-phone-square mr-2"></i>United
                                    States (+1) 3333.1111</h5></li>
                            <li><h5 class="white text-center"><i class="white fas fa-envelope mr-2"></i>hello@ourcompany.com
                                </h5></li>
                        </ul>
                        <div class="list-group-item text-center pt-4 ">
                            <h6>Follow Us</h6>
                            <ul class="text-center py-3">
                                <li class="list-inline-item"><a href="http://www.facebook.com"><i
                                            class="fab fa-facebook-f"></i></a></li>
                                <li class="list-inline-item"><a href="http://www.twitter.com"><i
                                            class="fab fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="http://www.instagram.com"><i
                                            class="fab fa-instagram"></i></a></li>
                            </ul>
                            <div class="list-group-item py-4">
                                <a href="#" class="d-block white py-2">
                                    <i class="fa fa-users"></i> About Us
                                </a>
                                <a class="white d-block" href="#">
                                    <i class="fa fa-envelope"></i> Contact Us
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>--}}
        </div>
    </nav>
</div>
<!-- End navbar -->
