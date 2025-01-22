<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');

Route::view('/forums/', 'forums')->name('forums');

Route::view('/shop/', 'shop')->name('shop');

Route::view('/articles/', 'articles')->name('articles');

Route::view('/media-files/', 'media-files')->name('media-files');

Route::view('/contact-us/', 'contact-us')->name('contact-us');

Route::view('/users/', 'users')->name('users');

Route::view('/profile/', 'profile')->name('profile');

Route::view('/search/', 'search')->name('search');

Route::view('/community/', 'community')->name('community');

Route::view('/messenger/', 'messenger')->name('messenger');

Route::view('/preferences/', 'preferences')->name('preferences');

Route::view('/bookmarks/', 'bookmarks')->name('bookmarks');

Route::get('/create-post/', [PostController::class, 'create'])->name('create-post');

Route::post('/create-post/create-post/', [PostController::class, 'store']);

Route::get('/login/', [LoginController::class, 'create'])->name('login');

Route::post('/login/login', [LoginController::class, 'store']);

Route::get('/register/', [RegisterController::class, 'create'])->name('register');

Route::post('/register/register', [RegisterController::class, 'store']);

Route::get('/logout/', [loginController::class, 'destroy'])->name('logout');