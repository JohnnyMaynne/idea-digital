<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Post;

class CommentsController extends Controller
{
    public function store()
    {

        $model = Post::findOrFail(request('model'));

        $comment = new Comment();

        $comment->name = request('name');
        $comment->email = request('email');

        $comment->commentable()->associate($model);
        $comment->comment = request('comment');
        $comment->save();

        return $comment;
    }

    public function show($id)
    {

    }
}
