<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app/name')}} | 403 Unauthorized</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    {{-- theme css --}}
    <link rel="stylesheet" href="{{mix('assets/css/theme.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendor/perfect-scrollbar.css')}}">
    {{-- page specific css --}}
</head>
<body>

<div class="not-found-wrap text-center">
    <h1 class="text-60">
        419
    </h1>
    <p class="text-36 subheading mb-3">Page Expired</p>
    <p class="mb-5 text-muted text-18">Sorry! Please login again or return to homepage</p>
    <a class="btn btn-lg btn-primary btn-rounded" href="{{route('landing.index')}}">Go back to home</a>
    <a class="btn btn-lg btn-success btn-rounded" href="back()">Login</a>
</div>


</body>
</html>