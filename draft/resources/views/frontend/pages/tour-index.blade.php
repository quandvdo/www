@extends('frontend._layout.main')

@section('content')

    @component('frontend.components.subheader',
    ['title' => Route::currentRouteName() == 'tour.index' ? 'Find Your Perfect Tour' : 'Find Your Perfect Package' ,
    'img' => 'search.jpg'])
    @endcomponent

    <!-- Section 3 Tours-->
    <section id="section3" class="tour-list-sidebar tour-list-sidebar-2-col">
        <div class="container-fluid">
            <div class="row">
                @include('frontend.components.sidebar-index')
                @foreach($tours->chunk(4) as $item)
                    <div class="col-xs-12 col-md-6 col-lg-4">
                        @foreach($item as $tour)
                            <a class="card-full" href="/tours/{{$tour->slug}}">
                                <div class="card-image-holder mb-4">
                                    <img class="w-100 h-100"
                                         src="https://picsum.photos/550/367?image={{rand(800,900)}}"
                                         alt="{{$tour->name}}">
                                    <div class="card-days front">
                                        <small class="white front tiny"><span
                                                    class="far fa-clock mr-2 white"></span>{{rand(3,15)}}<br>days
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
                                                    @for($i = 0 ; $i < rand(3,5);$i++)
                                                        <i class="fas fa-star"></i>
                                                    @endfor
                                                    <span class="tiny white"> 0 reviews </span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bottom-tour-background"></div>
                                </div>
                            </a>
                        @endforeach

                    </div>
                @endforeach
                {{$tours->links('pagination::bootstrap-4')}}
            </div>


        </div>
    </section><!-- End section 3 tours-->

@endsection
