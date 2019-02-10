<?php

namespace App\Http\Controllers\Utility;

use App\Http\Requests\StoreComment;
use App\Models\Blog\Blog;
use App\Models\Utility\Comment;
use App\Repository\Activity\ActivityRepositoryInterface;
use App\Repository\Blog\BlogRepositoryInterface;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CommentController extends Controller
{
    protected $blog, $activity;

    public function __construct(BlogRepositoryInterface $blogRepository, ActivityRepositoryInterface $activityRepository)
    {
        $this->middleware('auth');
        $this->blog = $blogRepository;
        $this->activity = $activityRepository;
    }

    public function store(StoreComment $request)
    {
        $validated = $request->validated();
        $type = $request['type'];
        $comment = new Comment();
        $comment->body = trim(strip_tags($request['comment_body']));
        $comment->parent_id = null;
        $comment->user()->associate($request->user());
        $model_id = $request['id'];
        switch ($type) {
            case 'tour':
                $model = $this->activity->show($model_id);
                break;
            case 'blog':
                $model = $this->blog->show($model_id);
                break;
        }
        $model->comments()->save($comment);
        Session::flash('message', 'SUCCESS! Your comment has been posted!');
        Session::flash('alert-class', 'alert-success');
        return back();

    }

    public function replyStore(StoreComment $request)
    {
        $type = $request['type'];
        $reply = new Comment();
        $reply->body = trim(strip_tags($request['comment_body']));
        $reply->user()->associate($request->user());
        $reply->parent_id = $request->get('comment_id');
        $model_id = $request['id'];
        switch ($type) {
            case 'tour':
                $model = $this->activity->show($model_id);
                break;
            case 'blog':
                $model = $this->blog->show($model_id);
                break;
        }
        $model->comments()->save($reply);
        Session::flash('message', 'SUCCESS! Your reply has been posted!');
        Session::flash('alert-class', 'alert-success');
        return back();

    }
}
