<a href="#gallery-1" role="button" class="btn-gallery mb-2 d-lg-inline-block d-block">
            <span id="btnFA" class="btn btn-outline-danger pt-2 mr-1  px-3">
                    View Gallery
                <i class="ml-2 fas fa-images"></i>
            </span>
</a>
<div id="gallery-1" class="hidden">
    @for($i=0 ; $i < rand(3,9); $i++)
        <a href="https://picsum.photos/1920/928?image={{rand(1,1000)}}">Image {{$i}}</a>
    @endfor
</div>