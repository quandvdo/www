@if(Session::has('message'))
    <div class="container">
        <div class="alert {{ Session::get('alert-class', 'alert-info') }} alert-fixed" role="alert">
            {{ Session::get('message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
@endif

@if ($errors->has('comment_body'))
    <div class="alert alert-danger alert-fixed" role="alert">
        {{ $errors->first('comment_body') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif