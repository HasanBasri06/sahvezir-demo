<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function register()
    {        
        return view('register');
    }

    public function store()
    {
        $attributes = request()->validate([   
            'name' => 'required|max:255',
            'lastname' => 'required|max:255',
            'email' => 'required|max:255|email|unique:users,email',
            'password' => 'required|max:255|min:8'
        ]);

        $user = User::create($attributes);

        auth()->login($user);

        return redirect('/login');
        
    }

    public function check()
    {
        $attributes = request()->validate([
            "email" => "required|email",
            "password" => "required"
        ]); 

        if(auth()->attempt($attributes)){
            session()->regenerate();
            return redirect('/');
        }

        return back() 
            ->withErrors(['email' => 'email adresi doğrulanamadı!'])
            ->onlyInput('email');

    }
}
