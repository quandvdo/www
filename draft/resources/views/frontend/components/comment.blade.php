<h6 class="bold mt-5 black">Comment Section </h6>
<div class="comments-container">
    <ul id="comments-list" class="comments-list">
        @include('frontend.components.partials.comment.comment_replies',  ['comments' => $comments, 'id' => $id ,'type' => $type])
    </ul>
</div>
<div class="mt-5  mx-auto my-auto">
    <h6 class="black bold mt-5 ml-md-0 ml-4 text-center">Leave a comment</h6>
    <form class="form-comment" method="post" action="{{route('comment.add')}}">
        @csrf
        <div class="row mt-3">
            <div class="col-12 ">
                <div class="form-group text-center">
                    <label for="exampleFormControlTextarea1">Your thoughts about this
                        blog...</label>
                    <textarea class="form-control" placeholder="Was it helpful?"
                              name="comment_body" rows="3"></textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-12">
                <input type="hidden" name="id" value="{{ $id }}"/>
                <input type="hidden" name="type" value="{{$type}}">
                <button type="submit" class="btn col-sm-12 mt-2 btn-primary">Send Thoughts
                </button>
            </div>
        </div>
    </form>
</div>