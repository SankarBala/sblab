<?php

namespace App\View\Components;

use App\Models\Article;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Footer extends Component
{
    // public $articles;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        // $this->articles = Article::where("published", 1)->take(2)->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $articles = Article::where("published", 1)->take(2)->get();
        return view('components.footer', compact('articles'));
    }
}
