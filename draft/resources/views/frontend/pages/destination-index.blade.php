@extends('frontend._layout.main')

@section('content')
    @component('frontend.components.subheader',
        ['title' => 'Find Your Destination',
        'img' => 'destinations.jpg'])
    @endcomponent

    <!-- Section 3 Tours-->
    <section id="section3" class="tour-list-sidebar">
        <div class="container-fluid">
            <div class="row">
                @include('frontend.components.sidebar-index')
                <div class="col-lg-9 col-md-12">
                    <div class="row">
                        @foreach($destinations->chunk(3) as $destination)
                            <div class="col-lg-3 col-md-3">
                                @foreach($destination as $dest)
                                    <div class="complete-image mb-4">
                                        <a class="" href="{{route('destination.detail', ['slug' => \App\Models\Utility\Helper::slug($dest->city)])}}"
                                           target="_blank">
                                            <div class="destination-item">
                                                <img src="{{asset('images/costarica.jpg')}}"
                                                     class="img-fluid destination-item"
                                                     alt="{{$dest->city}}">
                                                <h6 class="white front">{{$dest->city}} - {{$dest->activities_count}} Tours</h6>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                    {{$destinations->links('pagination::bootstrap-4')}}
                </div>

            </div>
        </div>

    </section><!-- End section 3 tours-->

@endsection
