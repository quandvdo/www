<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{config('app.name' , 'CompassTravel')}} | Admin pages </title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet">
    @stack('before-css')
    {{-- theme css --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">
    <link rel="stylesheet" href="{{mix('assets/css/theme.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendor/perfect-scrollbar.css')}}">
    {{-- page specific css --}}
    @stack('page-css')
</head>

<body>
<div class="app-admin-wrap">

@include('layouts.component.header-menu')
{{-- end of header menu --}}



@include('layouts.component.sidebar')
{{-- end of left sidebar --}}

<!-- ============ Body content start ============= -->
    <div class="main-content-wrap sidenav-open d-flex flex-column">

        @yield('main-content')

        @include('layouts.component.footer')
    </div>
    <!-- ============ Body content End ============= -->
</div>
<!--=============== End app-admin-wrap ================-->

<!-- ============ Search UI Start ============= -->
@include('layouts.component.search')
<!-- ============ Search UI End ============= -->

{{-- common js --}}
<script src="{{mix('assets/js/common-bundle-script.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
{{-- page specific javascript --}}
@stack('page-js')
<script src="{{asset('assets/js/script.js')}}"></script>

{{-- laravel js --}}
{{-- <script src="{{mix('assets/js/laravel/app.js')}}"></script> --}}

@stack('bottom-js')
@notify_render
</body>
</html>
