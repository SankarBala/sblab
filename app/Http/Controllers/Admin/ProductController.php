<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\View\View;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $products = Product::paginate(10);
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $categories = Category::with('children')->where('parent_id', 0)->get();

        return view('admin.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request): RedirectResponse
    {


        $slug = Str::slug($request->name);

        $count = Product::where('slug', $slug)->count();
        if ($count > 0) {
            $slug .= '-' . ($count + 1);
        }

        // Store the product
        $product = new Product();
        $product->name = $request->name;
        $product->slug = $slug;
        $product->short_description = $request->short_description;
        $product->description = $request->description;
        $product->price = $request->price;

        $product->attch($request->categories);


        $product->save();


        if ($request->hasFile('image')) {
            $image = $request->file('image');

            $timestamp = time();
            $extension = $image->getClientOriginalExtension();
            $filename = $product->id . '_' . $timestamp . '.' . $extension;

            $path = $image->storeAs('products', $filename, 'public');

            $product->image = $path;
            $product->save();
        }

        // Redirect to the index page
        return redirect()->route('admin.product.index')->with('success', 'Product created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product): View
    {
        $categories = Category::with('children')->where('parent_id', 0)->get();

        return view('admin.products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product): RedirectResponse
    {
        $product->name = $request->name;
        $product->short_description = $request->short_description;
        $product->description = $request->description;
        $product->price = $request->price;

        $product->categories()->sync($request->categories);

        $product->save();

        if ($request->hasFile('image')) {
            $image = $request->file('image');

            $timestamp = time();
            $extension = $image->getClientOriginalExtension();
            $filename = $product->id . '_' . $timestamp . '.' . $extension;

            $path = $image->storeAs('products', $filename, 'public');

            $product->image = $path;
            $product->save();
        }

        return redirect()->route('admin.product.index')->with('success', 'Product updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product): RedirectResponse
    {
        $product->delete();


        return redirect()->route('admin.product.index')->with('success', 'Product deleted successfully!');
    }
}
