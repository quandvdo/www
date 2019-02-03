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

        <a href="#social-popup" role="button" class="open-popup-link d-lg-inline-block d-block">
                                    <span id="btnFA2" class="btn btn-outline-danger pt-2 px-3 ">
                                            Share Tour
                                        <i class="ml-2 fas fa-share-alt"></i>
                                    </span>
        </a>

        <div id="social-popup" class="white-popup mfp-hide text-center">
            <a href="http://www.facebook.com/sharer/sharer.php?u={{urlencode(url()->current())}}&t={{$tour->name}}" target="_blank" class="share-popup"><i class="fab fa-facebook-f"></i></a>

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
            <a href="tel:{{$options->where('key', '=', 'phone')->where('type','=','global')->first()->value}}"><h5 class="grey text-center tel-info"><i
                            class="fas primary-color fa-phone faa-tada animated mr-2 grey my-lg-0 mb-1"></i>{{$options->where('key', '=', 'phone')->first()->value}}</h5></a>
            <a href="mailto:{{$options->where('key', '=', 'email')->where('type','=','global')->first()->value}}"><h5 class="grey text-center mail-info"><i
                            class="fas fa-envelope faa-horizontal animated primary-color mr-2"></i>{{$options->where('key', '=', 'email')->where('type','=','global')->first()->value}}
                </h5></a>
        </div>
    </div>

    <a href="{{route('blog.promotion')}}"><img src="{{asset('images/promotion.jpg')}}"
                     class="w-100 img-fluid mx-auto d-block mt-4"
                     alt="CompassTravel promotion"></a>
</div>