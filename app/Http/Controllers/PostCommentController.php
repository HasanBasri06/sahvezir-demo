<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class PostCommentController extends Controller
{
    public function store(Post $post)
    {

        request()->validate(
            [
                'comment' => 'required|max:255'
            ],
            [
                'required' => 'Bu alan doldurulması zorunludur!'
            ]
        );

        $post->comment()->create([
            'name' => auth()->user()->name,
            'body' => request()->comment,
            'user_id' => auth()->user()->id
        ]);

        return back();
    }
}
