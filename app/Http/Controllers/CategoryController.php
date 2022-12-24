<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(string $slug)
    {

        $categoryId = Category::where('slug',$slug)->first();

        $posts = Category::find($categoryId->id)->posts()->with('category')->paginate(10);

        $lastTreePost = Category::find($categoryId->id)->posts()->with('category')->get();

        $gundemPosts = Post::latest()->where('category_id', 7)->get();
        

        return view('category', [
            "slug" => $slug,
            "categoryList" => $posts,
            "gundemPosts" => $gundemPosts,
            "lastTreePost" => $lastTreePost

        ]);      
    }
}
