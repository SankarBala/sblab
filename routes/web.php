<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DivisionController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\BaseController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BaseController::class, 'home'])->name('home');
Route::get('/about-us', [BaseController::class, 'about'])->name('about');
Route::get('/contact-us', [BaseController::class, 'contact'])->name('contact');
Route::get('/profiles', [BaseController::class, 'profiles'])->name('profiles');
Route::get('/profile/{slug}', [BaseController::class, 'profile'])->name('profile');
Route::get('/articles', [BaseController::class, 'articles'])->name('articles');
Route::get('/article', [BaseController::class, 'article'])->name('article');
Route::get('/faq', [BaseController::class, 'faq'])->name('faq');

// General post routes.
Route::post('/message', [BaseController::class, 'store_message'])->name('store_message');

// Admin routes.
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['admin']], function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::resource('message', MessageController::class)->names('message');
    Route::resource('division', DivisionController::class)->names('division');
    Route::resource('faq', FaqController::class)->names('faq');
    Route::resource('product', ProductController::class)->names('product');
});


