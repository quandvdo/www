@extends('frontend._layout.main')

@push('script')

@endpush

@section('content')
    <!-- section 1 Title-->
    <div class="tour-title not-fixed center-image">

        <img class="w-100 h-100" src="{{asset('images/about-us.jpg')}}" alt="">
        <h1 class="white text-center front shadow-text center-text">Meet Our Teams</h1>
        <img class="curve2 front" src="{{asset('svg/curve.svg')}}" alt="">

    </div>
    <!-- End section 1-->
    <!-- Section 2 about us-->
    <section id="section3">
        <div class="container tour-wrapper">
            <div class="row">
                <div class="col-12 mb-4">
                    <h3 class="text-center pb-1 black bold">Meet our team</h3>
                    <div class="separator text-center svgcenter"></div>
                    <h5 class="primary-color text-center">Occaecat sunt elit quis id commodo ullamco dolor fugiat ullamco culpa </h5>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6 col-12 mx-auto my-3">
                    <img class="team-holder circle  mx-auto svgcenter" src="assets/images/robert.jpeg" alt="image">
                    <h6 class="mt-4 mb-0 text-center"><strong class="black">Robert McTravel</strong></h6>
                    <p class="mb-2 subheading black text-center grey">Turbino CEO</p>
                    <ul class="text-center">
                        <li class="list-inline-item"><a href="http://www.facebook.com"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="list-inline-item"><a href="http://www.twitter.com"><i class="fab fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="http://www.instagram.com"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 mx-auto my-3">
                    <img class="team-holder circle mx-auto svgcenter" src="assets/images/jennifer.jpg" alt="">
                    <h6 class="mt-4 mb-0 text-center"><strong class="black">Jeniffer Lovin</strong></h6>
                    <p class="mb-2 subheading black text-center grey">Turbino Guide</p>
                    <ul class="text-center">
                        <li class="list-inline-item"><a href="http://www.facebook.com"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="list-inline-item"><a href="http://www.twitter.com"><i class="fab fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="http://www.instagram.com"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 mx-auto my-3">
                    <img class="team-holder circle mx-auto svgcenter" src="assets/images/rupert.jpg" alt="">
                    <h6 class="mt-4 mb-0 text-center"><strong class="black">Rupert Runtour</strong></h6>
                    <p class="mb-2 subheading black text-center grey">Logistics</p>
                    <ul class="text-center">
                        <li class="list-inline-item"><a href="http://www.facebook.com"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="list-inline-item"><a href="http://www.twitter.com"><i class="fab fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="http://www.instagram.com"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 mx-auto my-3">
                    <img class="team-holder circle mx-auto svgcenter" src="assets/images/elisa.jpg" alt="">
                    <h6 class="mt-4 mb-0 text-center"><strong class="black">Elisa McTravel</strong></h6>
                    <p class="mb-2 subheading black text-center grey">Turbino Asistant</p>
                    <ul class="text-center">
                        <li class="list-inline-item"><a href="http://www.facebook.com"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="list-inline-item"><a href="http://www.twitter.com"><i class="fab fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="http://www.instagram.com"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="row mt-lg-5 mt-4">
                <div class="col-lg-3 col-sm-6 col-12 mx-auto mt-3">
                    <img class="team-holder circle svgcenter mx-auto" src="assets/images/alan.jpg" alt="">
                    <h6 class="mt-4 mb-0 text-center"><strong class="black">Robert McTravel</strong></h6>
                    <p class="mb-2 subheading black text-center grey">Turbino Manager</p>
                    <ul class="text-center mb-0">
                        <li class="list-inline-item"><a href="http://www.facebook.com"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="list-inline-item"><a href="http://www.twitter.com"><i class="fab fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="http://www.instagram.com"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 mx-auto mt-3">
                    <img class="team-holder circle mx-auto svgcenter" src="assets/images/chad.jpeg" alt="">
                    <h6 class="mt-4 mb-0 text-center"><strong class="black">Chad Guideaur</strong></h6>
                    <p class="mb-2 subheading black text-center grey">Turbino Guide</p>
                    <ul class="text-center mb-0">
                        <li class="list-inline-item"><a href="http://www.facebook.com"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="list-inline-item"><a href="http://www.twitter.com"><i class="fab fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="http://www.instagram.com"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 mx-auto mt-3">
                    <img class="team-holder circle svgcenter mx-auto " src="assets/images/mary.jpg" alt="">
                    <h6 class="mt-4 mb-0 text-center"><strong class="black">Mary Heydee</strong></h6>
                    <p class="mb-2 subheading black text-center grey">Travel Guide</p>
                    <ul class="text-center mb-0">
                        <li class="list-inline-item"><a href="http://www.facebook.com"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="list-inline-item"><a href="http://www.twitter.com"><i class="fab fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="http://www.instagram.com"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 mx-auto mt-3">
                    <img class="team-holder circle svgcenter mx-auto" src="assets/images/monica.jpg" alt="">
                    <h6 class="mt-4 mb-0 text-center"><strong class="black">Monica McHappy</strong></h6>
                    <p class="mb-2 subheading black text-center grey">Turbino Agent</p>
                    <ul class="text-center mb-0">
                        <li class="list-inline-item"><a href="http://www.facebook.com"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="list-inline-item"><a href="http://www.twitter.com"><i class="fab fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="http://www.instagram.com"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

@endsection