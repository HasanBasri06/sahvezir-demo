<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function contact(){
        return view('pages.contact');
    } 

    public function contactSave()
    {
        $attribute = request()->validate([
            'name' => 'required',
            'subject' => 'required',
            'email' => 'required|email',
            'body' => 'required|max:255|min:5'
        ],[
            'required' => 'Bu alan boş geçilemez',
            'max' => 'Lütfen yazınız 255 karakteri geçmesin'
        ]);


        return back()->withInput([
            'name' => 'uyarı',
            'subject' => 'uyarı',
            'email' => 'uyarı',
            'body' => 'uyarı',
        ]);

    }

    public function team()
    {
        return view('pages.team');
    }
}
