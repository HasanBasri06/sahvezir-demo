<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostCommentController;
use App\Http\Controllers\PostPageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SiteController;
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

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/')->withErrors([
        'logout' => 'Çıkış Yapıldı'
    ]);
})->middleware('auth');

/**
 * footer bilgler alanı
 */
Route::get('/contact', [SiteController::class, 'contact']);
Route::post('/contact', [SiteController::class, 'contactSave']);

Route::get('/team', [SiteController::class, 'team']);

/**
 * hesap alanı
 */
Route::get('/hesap', [
    AccountController::class,
    'index'
])->middleware('auth');

Route::get('/hesap/yorumlar', [
    AccountController::class,
    'comments'
])->middleware('auth');


/**
 * yorum kısmı
 */
Route::post('/posts/{post:slug}/comment', [PostCommentController::class, 'store']);

/**
 * admin paneli kısmı
 */
Route::get('/sahvezir/login', [AdminController::class, 'index']);
Route::post('/sahvezir/login', [AdminController::class, 'check']);
Route::get(
    '/sahvezir/main',
    [AdminController::class, 'main']
)
    ->name('main')
    ->middleware('OnlyAdmin');
Route::get('/sahvezir/haber-paylas', [
    AdminController::class,
    'newsPublish'
])
    ->name('publishNews');

Route::get('/sahvezir/tum-gonderiler', [
    AdminController::class, 'allNews'
])
    ->name('allNews')
    ->middleware('OnlyAdmin');

Route::post('/sahvezir/logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerate();
    return redirect('/');
});

Route::post('/sahvezir/savenews', [AdminController::class, 'newsStore'])->name('save-new');
Route::get('/sahvezir/all-contact-form', [AdminController::class, 'allContactForm'])->name('allContactForm');
