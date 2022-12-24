<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class AdminController extends Controller
{



    public function index()
    {
        return view('admin.index');
    }

    public function main()
    {
        return view('admin.layout');
    }

    public function allNews()
    {

        $posts = Post::latest()->paginate(8);

        return view('admin.all-news', [
            'posts' => $posts
        ]);
    }

    public function newsPublish()
    {

        $category = Category::get();

        return view('admin.share-news', [
            'categories' => $category
        ]);
    }

    public function allContactForm()
    {
        return view('admin.all-contact-form');
    }

    public function newsStore(Request $request)
    {

        $request->validate(
            [
                'title' => 'required',
                'image' => 'required',
                'body' => 'required',
                'category' => 'required'
            ],
            [
                'required' => 'Bu alan doldurulması zorunludur'
            ]
        );

        $slug = null;

        if ($request->showSlug != null) {
            $slug = Str::lower($request->showSlug);
            $slug = Str::replace('ı', 'i', $slug);
            $slug = Str::replace('ğ', 'g', $slug);
            $slug = Str::replace('ü', 'u', $slug);
            $slug = Str::replace('ş', 's', $slug);
            $slug = Str::replace('ö', 'o', $slug);
            $slug = Str::replace('ç', 'c', $slug);
            $slug = explode(' ', $slug);
            $slug = implode('-', $slug);
        } else {
            $slug = Str::lower($request->title);
            $slug = Str::replace('ı', 'i', $slug);
            $slug = Str::replace('ğ', 'g', $slug);
            $slug = Str::replace('ü', 'u', $slug);
            $slug = Str::replace('ş', 's', $slug);
            $slug = Str::replace('ö', 'o', $slug);
            $slug = Str::replace('ç', 'c', $slug);
            $slug = explode(' ', $slug);
            $slug = implode('-', $slug);
        }



        $imageName = $request->image->getClientOriginalName();

        $request->image->move(public_path('images/post'), $imageName);

        $postStatus = Post::create([
            'title' => $request->title,
            'image' => $imageName,
            'body' => $request->body,
            'slug' => $slug,
            'category_id' => $request->category,
            'author_id' => 1,
            'references' => 'asdasdas-asdasda-asdasxczxc-sda',
            'hits' => 44,

        ]);

        if ($postStatus->save()) {
            return back()->withErrors(['message' => 'Haber Başarılı Bir Şekilde Paylaşıldı']);
        }

        if ($request->category == null) {
            return back()->withErrors([
                'category' => 'Lütfen Bir Kategori Seçiniz'
            ]);
        }

        return back()->onlyInput(['message' => 'Bir Hata Oluştu']);
    }


    public function check(Request $request)
    {

        $attr = $request->validate(
            [
                'email' => 'required',
                'password' => 'required'
            ],
            [
                'required' => 'Bu alan doldurulması zorunludur!'
            ]
        );

        if (auth()->guard('admin')->attempt($attr)) {

            return redirect()->intended('/sahvezir/main');
        }

        return back()->withErrors([
            'email' => 'Email adresi hatalı!',
            'password' => 'Şifre hatalı!'
        ])->onlyInput(['email', 'password']);
    }




}
