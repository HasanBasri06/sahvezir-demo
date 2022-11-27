<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {


        Carbon::setLocale('tr');

        $posts = Post::with('category')->orderBy('id', 'desc')->get();

        $tecPosts = Post::where('category_id', 1)->paginate(7);
        $tecPosts->withPath('/kategori/teknoloji');


        $gamePosts = Post::with('category')->where('category_id',2)->get();
        $socialMediaPosts = Post::latest()->with('category')->where('category_id',6)->get();



        return view("app", [
            "posts" => $posts,
            "tecPosts" => $tecPosts,
            "gamePosts" => $gamePosts,
            "socialMediaPosts" => $socialMediaPosts
        ]);
    }
}
