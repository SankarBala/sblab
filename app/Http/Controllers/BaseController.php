<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Faq;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BaseController extends Controller
{

    public function home(): View
    {
        return view('home');
    }

    public function about(): View
    {
        return view('about');
    }

    public function contact(): View
    {
        return view('contact');
    }

    public function articles(): View
    {
        return view('articles');
    }

    public function article(): View
    {
        // view()->share('article', $article);
        return view('article');
    }

    public function faq(): View
    {
        $faqs = Faq::where('active', 1)->get();
        return view('faq')->with('faqs', $faqs);
    }
}
