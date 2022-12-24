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
        $attributes = request()->validate(
            [
                'name' => 'required|max:255',
                'lastname' => 'required|max:255',
                'email' => 'required|max:255|email|unique:users,email',
                'password' => 'required|max:255|min:8',
                "confirmpass" => 'required_with:password|same:password|min:8'
            ],
            [
                'name.required' => 'İsim alanı boş geçilmez',
                'lastname.required' => 'Soyisim alanı boş geçilmez',
                'email.required' => 'E-posta alanı boş geçilmez',
                'password.required' => 'Şifre alanı boş geçilmez',
                'confirmpass.required' => 'Lütfen Şifrenizi Onaylayınız',
                'email.unique' => 'Email alanı benzersiz olmalıdır',
                'confirmpass.required_with' => 'Şifreniz eşleşmiyor!',
                'confirmpass.same' => 'Şifreniz eşleşmiyor!',
                'max' => 'Lütfen 255 karakterden az bir değer girin!',
                'min' => 'Şifreniz minimum 8 karakterden oluşmalıdır!'
            ]
        );

        $user = User::create($attributes);

        auth()->login($user);

        return redirect('/login');
    }

    public function check()
    {

        $attributes = request()->validate(
            [
                "email" => "required|email",
                "password" => "required"
            ],
            [
                'required' => 'Bu alan doldurulması zorunludur'
            ]
        );

        if (auth()->attempt($attributes)) {
            session()->regenerate();
            return redirect('/');
        }

        return back()
            ->withErrors(['email' => 'email adresi doğrulanamadı!', 'password' => 'şifre doğrulanamadı!'])
            ->onlyInput('email');
    }
}
