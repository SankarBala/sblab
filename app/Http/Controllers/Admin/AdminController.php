<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class AdminController extends Controller
{
    public function dashboard(): View
    {
        return view('admin.dashboard');
    }

    public function contact(): View
    {
        return view('admin.contact');
    }

    public function about(): View
    {
        return view('admin.about');
    }

}
