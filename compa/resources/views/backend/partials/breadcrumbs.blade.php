<div class="breadcrumb">
    <h1>{{$title}}</h1>
    <ul>
        <li><a href="{{route('dashboard.index')}}">Dashboard</a></li>
        @if(isset($prepage))
            <li><a href="{{$prelink}}">{{$prepage}}</a></li>
        @endif
        <li>{!! $page !!}</li>
    </ul>

</div>

<div class="separator-breadcrumb border-top"></div>
{{-- end of breadcrumb --}}

{{--
@include('backend.partials.breadcrumbs',[
     'title' => 'All Users',
     'prelink' => null,
     'prepage' => null,
     'page' => 'All user list'
    ])
--}}