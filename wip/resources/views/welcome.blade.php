@extends('frontend.layout.main')

@section('content')
    <div id="app">
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    {{config('app.name', 'CompassTravel')}}
                </div>

                <div class="links">
                    <a href="/admin">Admin</a>
                </div>

                <div>
                    <textarea class="tiny" name="tinymce" id="" cols="30" rows="10">Something to Test</textarea>
                    <form id="my_form" action="http://voyager.test/admin/upload" target="form_target" method="post" enctype="multipart/form-data" style="">
                        <input name="image" id="upload_file" type="file" onchange="$('#my_form').submit();this.value='';">
                        <input type="hidden" name="type_slug" id="type_slug" value="pages">
                        <input type="hidden" name="_token" value="xJoO91v96MxCW3GM9dAsVBiGTjWtsIbF8sFuTYJf">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
