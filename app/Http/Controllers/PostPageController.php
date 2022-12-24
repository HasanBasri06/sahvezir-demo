<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class PostPageController extends Controller
{
    public function index($slug)
    {

        Carbon::setLocale('tr');

        $post = Post::latest()->where('slug', $slug)->get();
        $gundemPosts = Post::latest()->where('category_id', 7)->get();


        return view("post", [
            "slug" => $slug,
            "post" => $post[0],
            'gundemPosts' => $gundemPosts
        ]);
    }

    public function search(Request $request)
    {

        $posts = Post::latest()->where('title', 'like', '%'.$request->input('search').'%')->get();

        if($request->input('search') === null){
            return Redirect::to(url()->previous());
            exit;
        }

        $gundemPosts = Post::latest()->get();

        return view('search', [
            "slug" => $request->input('search'),
            "posts" => $posts,
            'gundemPosts' => $gundemPosts
        ]);
    }
}
