<!-- _comment_replies.blade.php -->

@foreach($comments as $comment)
    <li>
        <div class="comment-main-level mb-4">
            <div class="comment-avatar d-none d-md-block">
                <img src="{{asset('images/chadblog.jpg')}}"
                     alt="{{$comment->user->name}} Avatar">
            </div>
            <div class="comment-box">
                <div class="comment-head">
                    @if(Route::currentRouteName() == 'blog')
                        <h6 class="comment-name {{$blog->user_id == $comment->user_id ? 'by-author' : ''}}">
                            <a href="#">{{$comment->user->name}}</a>
                        </h6>
                    @else
                        <h6 class="comment-name">
                            <a href="#">{{$comment->user->name}}</a>
                        </h6>
                    @endif
                    <div class="text-left">
                        <span class="time-review">{{$comment->created_at->diffForHumans()}}</span>
                    </div>
                </div>
                <div class="comment-content">
                    {{$comment->body}}
                </div>
            </div>
        </div>
        <ul class="comments-list reply-list">
            @include('frontend.components.partials.comment.comment_form')
            @include('frontend.components.partials.comment.comment_replies', ['comments' => $comment->replies])
        </ul>
    </li>
@endforeach

