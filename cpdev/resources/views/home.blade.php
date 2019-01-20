@extends('frontend._layout.main')

@section('content')
    <!-- Title section 1 -->
    <div class="tour-title not-fixed center-image">
        <img class="w-100 h-100" src="https://picsum.photos/1920/600?image={{rand(1,1000)}}" alt="">
        <h1 class="white text-center shadow-text center-text">You are logined</h1>

        <div>
            <a class="smooth-scroll" href="#read-tour">
                <img class="curvechevron" src="{{asset('svg/curvesingle.svg')}}" alt="">
                <div class="chevroncurve">
                    <i class="fas  hoverchevron white fa-chevron-down"></i>
                </div>
            </a>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in!
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
