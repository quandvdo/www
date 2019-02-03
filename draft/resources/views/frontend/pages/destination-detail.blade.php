@extends('frontend._layout.main')

@section('content')
    <!-- Title section 1 -->
    <div class="tour-title not-fixed center-image">

        <img class="w-100 h-100" src="{{asset('images/central-park-1.jpg')}}" alt="">
        <h1 class="white text-center front shadow-text center-text">{{$tour->name}}</h1>

        <a class="smooth-scroll" href="#read-tour">
            <img class="curvechevron" src="{{asset('svg/cursingle.svg')}}" alt="image">
            <div class="chevroncurve">
                <i class="fas  hoverchevron white fa-chevron-down"></i>
            </div>
        </a>

    </div>

    <section id="section3" class="tour-list-sidebar tour-list-sidebar-2-col">

        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-md-6 col-lg-3 ml-lg-5 order-lg-first order-last mt-5 mt-lg-0">
                    <div class="input-group mb-4 search-button">
                        <input class="form-control border-secondary py-2" placeholder="Search a Tour...">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>

                    <div class="mb-lg-3 mb-4  text-center">

                        <a href="#gallery-1" role="button" class="btn-gallery mb-2 d-lg-inline-block d-block">
                                    <span id="btnFA" class="btn  btn-outline-danger pt-2 mr-1  px-3">
                                            View Gallery
                                        <i class="ml-2 fas fa-images"></i>
                                    </span>
                        </a>

                        <div id="gallery-1" class="hidden">
                            <a href="images/central-park-2.jpg">Image 1</a>
                            <a href="images/central-newyork.jpg">Image 2</a>
                            <a href="images/newyorkbridge.jpg">Image 3</a>
                            <a href="images/newyork.jpg">Image 4</a>
                        </div>

                        <a href="#test-popup" role="button" class="open-popup-link d-lg-inline-block d-block">
                                    <span id="btnFA2" class="btn btn-outline-danger pt-2 px-3">
                                            Share This
                                        <i class="ml-2 fas fa-share-alt"></i>
                                    </span>
                        </a>

                        <div id="test-popup" class="white-popup mfp-hide text-center">
                            <a href="https://www.facebook.com/sharer/sharer.php?u=http://uxithemes.com/Turbino"
                               target="_blank">
                                <i class="fab fa-facebook-f"></i></a> &nbsp;

                            <a href="https://twitter.com/intent/tweet?text=Uxithemes&url=http%3A%2F%2Fwww.uxithemes.com/Turbino"
                               target="_blank">
                                <i class="fab fa-twitter"></i></a>&nbsp;

                            <a href="https://plus.google.com/share?url=http%3A%2F%2Fwww.uxithemes.com%2FTurbino">
                                <i class="fab fa-google-plus-g"></i>
                            </a>

                            <a href="mailto:support@uxithemes.com">
                                <i class="fas fa-envelope"></i></a>
                        </div>

                    </div>

                    <div id="instasidebar" class="grid2 runsidebar">
                        <h6 class="black semibold text-center mx-4 mt-3 mb-2 ">Instagram Gallery</h6>
                        <div class="grid-sizer"></div>
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

                    <a href="#"><img src="images/promotion.jpg" class="w-100 img-fluid mx-auto d-block mt-4"
                                     alt="image"></a>
                </div>

                <div class="col-xs-12 col-md-11 col-lg-8 single-tour">

                    <h4 id="read-tour" class="black text-left mb-3 bold">{{$slug}}</h4>

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
                            <div class="tour-item-description list-font">English</div>
                        </li>

                        <li>
                            <div class="tour-item-title list-font">Visa</div>
                            <div class="tour-item-description list-font">Not Required if You have European Passport
                            </div>
                        </li>

                        <li>
                            <div class="tour-item-title list-font">Accepted Currency</div>
                            <div class="tour-item-description list-font">US Dollar, Euro.</div>
                        </li>

                        <li>
                            <div class="tour-item-title list-font">Area in km²</div>
                            <div class="tour-item-description list-font">32 Km²</div>
                        </li>

                    </ul>

                    <div class="mr-lg-5">
                        <div class="tour-schedule">
                            <h6 class="black bold mt-5 mb-3">New York, The most infamous City</h6>

                            <p>Spend your first day in New York getting to know the lay of the land and looking at the
                                city’s rich history.</p>

                            <div class="list-font semibold mt-3">Western Oldest City</div>

                            <p>Aliquip ea dolor velit pariatur ea dolore anim. Cillum consectetur cupidatat anim aliquip
                                Lorem veniam minim exercitation cupidatat mollit ad nulla occaecat exercitation.
                                Pariatur incididunt nostrud sint ex ullamco et aliqua aliqua cillum laboris est in. Sint
                                non consectetur consequat amet laboris reprehenderit amet nulla.</p>

                            <div class="list-font semibold mt-3">History of Central Park</div>

                            <p>Cillum aute nisi sunt quis duis. Ad anim non velit nulla elit est excepteur proident
                                excepteur laboris. Elit consectetur culpa enim aliquip tempor. Velit proident ex non
                                excepteur est dolor duis irure esse id ea. Incididunt anim amet deserunt mollit sunt
                                mollit qui incididunt minim Lorem tempor tempor consequat quis. Proident culpa nostrud
                                nisi nulla qui. Incididunt ad velit voluptate sint ea.

                                Officia deserunt et excepteur veniam esse quis fugiat ad quis pariatur nostrud. Est in
                                esse deserunt id aliqua consequat nostrud nisi pariatur occaecat excepteur adipisicing
                                cupidatat sunt. Deserunt ad proident sint duis fugiat culpa cupidatat exercitation
                                adipisicing. Amet aliquip in ut quis in laborum commodo dolor cillum esse excepteur id
                                minim exercitation. Deserunt ex ad do nostrud enim fugiat ad aute. Voluptate laborum
                                occaecat magna labore eu non nisi. Labore proident voluptate anim esse et enim
                                incididunt consectetur Lorem voluptate laborum esse laboris.</p>

                            <img class="img-fluid my-3" src="images/central-park-1.jpg" alt="">

                            <h6 class="black bold mt-5 mb-3">The Perfect Destination</h6>

                            <p>Velit ut exercitation labore ex ad fugiat. Voluptate nulla nisi ex aliquip nulla anim
                                mollit sunt velit elit et. Dolor est anim sunt laboris consectetur labore anim. Esse
                                duis tempor id magna non in consequat irure aute. Id tempor ullamco cillum cillum.
                                Occaecat nostrud irure ex Lorem ut ad ut magna cupidatat voluptate ea pariatur ex.
                                Deserunt laborum commodo veniam eu laboris irure magna incididunt fugiat consequat minim
                                commodo.

                                Eiusmod culpa aliquip tempor excepteur incididunt amet cillum sunt magna voluptate
                                ullamco anim. Aliquip nostrud sunt reprehenderit deserunt ipsum reprehenderit mollit
                                reprehenderit do exercitation non. Ea magna ullamco ea elit voluptate qui Lorem est
                                minim commodo laborum mollit dolore. Nulla aliquip culpa sint eiusmod sunt amet. Magna
                                ea nisi non minim duis deserunt fugiat. Voluptate veniam officia sunt aliquip aliquip
                                officia eiusmod id et laborum velit officia excepteur.</p>

                            <div class="list-font semibold mt-3">West Coast Culture</div>

                            <p>Ut ut duis consequat anim velit minim proident aliquip cupidatat elit amet amet
                                consectetur occaecat. Eiusmod eu proident laborum anim. Nulla adipisicing sint voluptate
                                Lorem irure et velit.</p>

                            <img class="img-fluid my-3" src="images/central-park-2.jpg" alt="image">

                            <div class="list-font semibold mt-3">Monuments</div>

                            <p class="mb-0">Eiusmod elit Lorem labore proident fugiat ad magna sunt deserunt est ullamco
                                sint. Adipisicing deserunt reprehenderit quis sint id voluptate ut aute laborum. Ipsum
                                aute ex aliquip fugiat. Voluptate enim elit reprehenderit consequat proident est non
                                dolore et deserunt ad magna proident in. Id cupidatat quis sit sunt. Mollit ullamco
                                officia et aliqua commodo qui est dolore. Cupidatat cupidatat voluptate deserunt
                                proident.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
