<div class="col-xs-12 col-md-6 col-lg-3 ml-lg-5 ml-sm-3 order-lg-first order-last mt-3 mt-lg-0">
    <div class="mb-lg-3 mb-4 mt-lg-0 mt-4 text-center">
        @if( Route::currentRouteName() == 'destination.detail')
            <div class="input-group mb-4 search-button">
                <input class="form-control border-secondary py-2" placeholder="Search a Tour...">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
            <a href="{{route('tour.index')}}" class="btn btn-outline-danger  mb-2 d-lg-inline-block d-block">
                All tours
                <i class="ml-2 fas fa-envelope"></i>
            </a>
        @endif

        @include('frontend.components.partials.sidebar.view-gallery')
        @include('frontend.components.partials.sidebar.share-tour')
    </div>
    @if( Route::currentRouteName() == 'destination.detail')
    @else
        @include('frontend.components.partials.sidebar.book-this-tour')
    @endif
    @include('frontend.components.partials.sidebar.quick-contact')
    <a href="{{route('blog.promotion')}}">
        <img src="{{asset('images/promotion.jpg')}}"
             class="w-100 img-fluid mx-auto d-block mt-4"
             alt="CompassTravel promotion"></a>
</div>