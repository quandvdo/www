<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{config('app.name', 'CompassTravel')}}</title>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>
    <script src="{{asset('js/plugins/smooth-scroll.min.js')}}"></script>
    <script src="{{asset('js/plugins/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/plugins/ofi.js')}}"></script>
    <script src="{{ asset('js/compass.js') }}" defer></script>
    @stack('js')

    {{--CSS--}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
          integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('/css/plugins/animate.css')}}">
    <link rel="stylesheet" href="{{asset('/css/plugins/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('/css/compass.css')}}">
    @stack('css')
</head>
<body>
@include('frontend.components.navbar')
@yield('content')
@include('frontend.components.footer')
</body>
</html>