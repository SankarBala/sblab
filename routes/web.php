<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\BaseController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BaseController::class, 'home'])->name('home');
Route::get('/about-us', [BaseController::class, 'about'])->name('about');
Route::get('/contact-us', [BaseController::class, 'contact'])->name('contact');
Route::get('/profiles', [BaseController::class, 'profiles'])->name('profiles');
Route::get('/profile/{slug}', [BaseController::class, 'profile'])->name('profile');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/contact-us', [AdminController::class, 'contact'])->name('contact');
    Route::get('/about-us', [AdminController::class, 'about'])->name('about');
});
