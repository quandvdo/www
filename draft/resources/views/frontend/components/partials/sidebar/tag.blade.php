<div class="more-info tags my-4">
    {{--TODO: TAGs Display--}}
    <h6 class="black semibold text-center mx-4 mt-3 mb-3 info-title">Popular Tags</h6>

    <div class="text-center px-3 px-lg-2 pb-3 ">
        @foreach($tags as $tag)
            <a class="btn btn-outline-primary px-3 mr-1 mb-1 btn-sm " href="#"
               role="button">{{$tag->name}} - {{$tag->blogs_count}} posts</a>
        @endforeach
    </div>
</div>