<form method="post" action="{{ route('reply.add') }}">
    @csrf
    <div class="form-group">
        <input type="text" name="comment_body" class="form-control border-primary" />
        <input type="hidden" name="id" value="{{ $id }}" />
        <input type="hidden" name="type" value="{{$type}}">
        <input type="hidden" name="comment_id" value="{{ $comment->id }}" />
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-warning" value="Reply" />
    </div>
</form>