@if(Session::has('message'))
    <div class="alert alert {{ Session::get('alert-class', 'alert-info') }}" role="alert">
        {{ Session::get('message') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif