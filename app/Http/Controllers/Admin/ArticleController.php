<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Article;
use App\Models\Tag;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;
use Illuminate\View\View;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $articles = Article::paginate(10);
        return view('admin.articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $categories = Category::with('children')->where('parent_id', 0)->get();

        return view('admin.articles.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request): RedirectResponse
    {

        $words = explode(' ', $request->name);
        $limitedWords = array_slice($words, 0, 10); // Keep only the first 8 words
        $slug = Str::slug(implode(' ', $limitedWords));

        $count = Article::where('slug', $slug)->count();
        if ($count > 0) {
            $slug .= '-' . ($count + 1);
        }

        // Store the article
        $article = new Article();
        $article->name = $request->name;
        $article->slug = $slug;
        $article->short_description = $request->short_description;
        $article->description = $request->description;
        $article->published = $request->published;

        $article->save();

        $article->categories()->attach($request->categories);

        // Handle tags
        $tags = $request->tags;
        if (!empty($tags)) {
            $tagIds = [];
            foreach ($tags as $tagName) {
                $tag = Tag::firstOrCreate(['name' => $tagName]);
                $tagIds[] = $tag->id;
            }
            $article->tags()->attach($tagIds);
        }


        if ($request->hasFile('image')) {
            $image = $request->file('image');

            $timestamp = time();
            $extension = $image->getClientOriginalExtension();
            $filename = "{$article->id}_{$timestamp}.{$extension}";

            $path = $image->storeAs('articles', $filename, 'public');

            $article->image = $path;
            $article->save();
        }

        // Redirect to the index page
        return redirect()->route('admin.article.index')->with('success', 'Article created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article): View
    {
        $categories = Category::with('children')->where('parent_id', 0)->get();

        return view('admin.articles.edit', compact('article', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, Article $article): RedirectResponse
    {

        $article->name = $request->name;
        $article->short_description = $request->short_description;
        $article->description = $request->description;
        $article->published = $request->published;
        
        $article->categories()->sync($request->categories);

        // Handle tags
        $tags = $request->tags;
        if (!empty($tags)) {
            $tagIds = [];
            foreach ($tags as $tagName) {
                $tag = Tag::firstOrCreate(['name' => $tagName]);
                $tagIds[] = $tag->id;
            }
            $article->tags()->sync($tagIds);
        } else {
            $article->tags()->detach();
        }

        $article->save();

        if ($request->hasFile('image')) {
            $image = $request->file('image');

            $timestamp = time();
            $extension = $image->getClientOriginalExtension();
            $filename = "{$article->id}_{$timestamp}.{$extension}";

            $path = $image->storeAs('articles', $filename, 'public');

            $article->image = $path;
            $article->save();
        }

        return redirect()->route('admin.article.index')->with('success', 'Article updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article): RedirectResponse
    {
        $article->categories()->detach();
        $article->tags()->detach();
        $article->delete();

        return redirect()->route('admin.article.index')->with('success', 'Article deleted successfully!');
    }
}
