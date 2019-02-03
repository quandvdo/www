@extends('frontend._layout.main')

@push('script')

@endpush

@section('content')
    <!-- section 1 Title-->
    <div class="tour-title not-fixed center-image">

        <img class="w-100 h-100" src="{{asset('images/about-us.jpg')}}" alt="">
        <h1 class="white text-center front shadow-text center-text">About Us</h1>
        <img class="curve2 front" src="{{asset('svg/curve.svg')}}" alt="">

    </div>
    <!-- End section 1-->
    <!-- Section 2 about us-->
    <section id="section-newsletter">

        <div class="container">
            <div class="row">
                <div class="col-md-6 col-12 order-md-first order-last">
                    <img src="{{asset('/images/teamwork.jpg')}}" class="img-fluid mr-md-3 mr-0 img-border" alt="">
                </div>
                <div class="col-md-5 col-12 text-left my-auto">
                    <h3 class="black bold front mb-2 mt-2 ">A well-established<br> travel agency</h3>
                    <div class="separator "></div>
                    <h5 class="primary-color section-titlemb-3">Why choose our agency</h5>
                    <p class=" text-block  mb-md-0 mb-4">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                        Aenean commodo ligula
                        eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
                        nascetur </p>
                    <p></p>
                </div>
            </div>
        </div>

    </section>

    <section id="aboutsection">
        <img class="curve3" src="{{asset('svg/curve2.svg')}}" alt="">


        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 text-center  col-12">
                    <h3 class="text-center pb-1 black bold">What we have been up to lately</h3>
                    <div class="separator text-center svgcenter"></div>
                    <h5 class="m-0 pt-1 px-4 mb-4 text-center primary-color">New Destinations coming soon</h5>
                    <p class="text-block text-justify px-lg-5 px-1 mb-4 mb-md-5 black">
                        Esse do sit officia veniam. Mollit magna sint ex tempor eu elit. Quis Lorem ad dolore Lorem.
                        Deserunt do cupidatat
                        incididunt magna anim voluptate sit cupidatat. Quis labore excepteur Lorem est aute. Ut et
                        aliqua in deserunt duis
                    </p>
                    <img src="{{asset('images/newdestinations.jpg')}}" class="img-fluid img-border" alt="">

                </div>
            </div>
        </div>

    </section>

@endsection