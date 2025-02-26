<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CategoryController;
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
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['admin', 'verified']], function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::resource('message', MessageController::class)->names('message');
    Route::resource('division', DivisionController::class)->names('division');
    Route::resource('category', CategoryController::class)->names('category');
    Route::resource('faq', FaqController::class)->names('faq');
    Route::resource('product', ProductController::class)->names('product');
    Route::resource('article', ArticleController::class)->names('article');
});

// Auth routes.
Route::group(['middleware' => ['guest']], function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'authenticate'])->name('authenticate');
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'create_user'])->name('create_user');
    Route::get('/forgot-password', [AuthController::class, 'forgot_password'])->name('forgot_password');
    Route::post('/forgot-password', [AuthController::class, 'send_reset_link'])->name('send_reset_link');
    Route::get('/reset-password/{token}', [AuthController::class, 'reset_password'])->name('reset_password');
    Route::post('/reset-password/{token}', [AuthController::class, 'update_password'])->name('update_password');
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
Route::get('/email/verify', [AuthController::class, 'verification_notice'])
    ->name('verification.notice')
    ->middleware('auth', 'throttle:6,1');
Route::post('/email/resend', [AuthController::class, 'resend_verification_email'])
    ->name('verification.resend')
    ->middleware(['auth', 'throttle:6,1']);

Route::get('/email/verify/{id}/{hash}', [AuthController::class, 'verify_email'])->name('verification.verify')->middleware(['signed', 'throttle:6,1']);
