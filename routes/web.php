<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostPageController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/", [HomeController::class, 'index']);

Route::get('/kategori/{slug:slug}', [CategoryController::class, 'index']);

Route::get('/post/{slug}', [PostPageController::class, 'index']);

Route::get('/search', [
    PostPageController::class, 
    'search'
])->name('search');

Route::get('/login', [
    UserController::class, 'login'
])
->name('login')
->middleware('guest');

Route::post('/login', [
    UserController::class, 'check'
])
->middleware('guest');

Route::get('/register', [
    UserController::class, 'register'
])
->name('register')
->middleware('guest');

Route::post('/register', [
    UserController::class, 
    'store'
])->middleware('guest');

Route::post('/logout', function(){
    Auth::logout();
    return redirect('/');
})->middleware('auth');

