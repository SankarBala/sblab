<?php

namespace App\Http\Controllers;

use App\Http\Requests\MessageRequest;
use App\Models\Article;
use App\Models\Category;
use App\Models\Division;
use App\Models\Faq;
use App\Models\Message;
use App\Models\Option;
use App\Models\Product;
use App\Models\Staff;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BaseController extends Controller
{
    public function __construct()
    {
        view()->share('options', Option::pluck('value', 'key'));
        view()->share('divisions', Division::where('active', 1)->get());
    }

    public function home(): View
    {
        $articles = Article::where('published', 1)->take(10)->get();
        $products = Product::where('published', 1)->take(10)->get();
        $staffs = Staff::all();

        return view('home', compact('articles'));
    }

    public function about(): View
    {
        return view('about');
    }

    public function contact(): View
    {
        return view('contact');
    }

    public function division(Request $request, Division $division): View
    {

        $productsQuery = $division->products()->where('published', 1);

        // Search functionality
        if ($request->has('search') && $request->search !== '') {
            $productsQuery->where('name', 'like', '%' . $request->search . '%');
        }

        // Sorting functionality
        if ($request->has('sort')) {
            $sortParams = explode('~', $request->sort);
            if (count($sortParams) == 2) {
                $productsQuery->orderBy($sortParams[0], $sortParams[1]);
            }
        } else {
            // Default sorting (optional)
            $productsQuery->orderBy('name', 'asc'); // or any default order
        }

        // Pagination and appending query params
        $products = $productsQuery->paginate(12)->appends(request()->query());

        return view('divisional-products', compact(['division', 'products']));
    }


    public function products(Request $request): View
    {
        $productsQuery = Product::where('published', 1);
        if ($request->has('search') && $request->search !== '') {
            $productsQuery->where('name', 'like', '%' . $request->search . '%');
        }

        if ($request->has('sort')) {
            $sortParams = explode('~', $request->sort);
            if (count($sortParams) == 2) {
                $productsQuery->orderBy($sortParams[0], $sortParams[1]);
            }
        } else {
            $productsQuery->orderBy('name', 'asc');
        }
        $products = $productsQuery->paginate(12)->appends(request()->query());
        return view('products', compact('products'));
    }

    public function product(Product $product): View
    {
        $categories = $product->categories;
        $tags = $product->tags;
        $related = $product->related();

        return view('product', compact(['product', 'categories', 'tags', 'related']));
    }



    public function articles(Request $request): View
    {
        $articlesQuery = Article::where('published', 1)->orderBy('created_at', 'desc');

        if ($request->filled('search')) {
            $articlesQuery->where('name', 'like', "%{$request->search}%");
        }

        $articles = $articlesQuery->paginate(6)->appends(['search' => $request->search]);
        $categories = Category::where('published', 1)->get();

        return view('articles', compact(['articles', 'categories']));
    }

    public function article(Article $article): View
    {
        $article->increment('read');
        return view('article', compact('article'));
    }

    public function faq(): View
    {
        $faqs = Faq::where('active', 1)->get();
        return view('faq')->with('faqs', $faqs);
    }

    public function store_message(MessageRequest $request): JsonResponse
    {
        $message = new Message();
        $message->name = $request->name;
        $message->email = $request->email;
        $message->message = $request->message;
        $message->save();

        return response()->json(['status' => 'success', 'message' => 'Message sent successfully.']);
    }
}
