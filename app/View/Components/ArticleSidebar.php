<?php

namespace App\View\Components;

use App\Models\Article;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ArticleSidebar extends Component
{
    public $article;
    /**
     * Create a new component instance.
     */
    public function __construct(Article $article)
    {
        $this->article = $article;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $most_reads = Article::where('published', 1)->orderBy('read', 'desc')->take(5)->get();
        $recent_articles = Article::where('published', 1)->orderBy('created_at', 'desc')->take(4)->get();

        return view('components.article-sidebar', compact(['most_reads', 'recent_articles']));
    }
}
