<?php

namespace App\View\Components;

use App\Models\Article;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ArticlesSidebar extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $most_reads = Article::where('published', 1)->orderBy('read', 'desc')->take(5)->get();

        return view('components.articles-sidebar', compact('most_reads'));
    }
}
