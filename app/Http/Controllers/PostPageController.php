<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use PharIo\Manifest\Url;

class PostPageController extends Controller
{
    public function index($slug)
    {

        Carbon::setLocale('tr');
        $post = Post::where('slug', $slug)->get();
    
        return view("post", [
            "slug" => $slug,
            "post" => $post[0]
        ]);
    }

    public function search(Request $request)
    {

        $posts = Post::latest()->where('title', 'like', '%'.$request->input('search').'%')->get();

        if($request->input('search') === null){
            return Redirect::to(url()->previous());
            exit;
        }

        return view('search', [
            "slug" => $request->input('search'),
            "posts" => $posts
        ]);
    }
}
