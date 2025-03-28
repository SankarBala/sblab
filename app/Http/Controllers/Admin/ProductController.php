<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Division;
use App\Models\Product;
use App\Models\Tag;
use App\Services\Thumbnail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\View\View;
use Intervention\Image\ImageManager;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        if ($request->has('search')) {
            $search = $request->input('search');
            $products = Product::where('name', 'like', '%' . $search . '%')->paginate(10);
        } else {
            $products = Product::paginate(10);
        }
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $categories = Category::with('children')->where('parent_id', 0)->get();
        $divisions = Division::where('active', 1)->get();

        return view('admin.products.create', compact('categories', 'divisions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request): RedirectResponse
    {

        $words = explode(' ', $request->name);
        $limitedWords = array_slice($words, 0, 10);
        $slug = Str::slug(implode(' ', $limitedWords));

        $count = Product::where('slug', $slug)->count();
        if ($count > 0) {
            $slug .= '-' . ($count + 1);
        }

        // Store the product
        $product = new Product();
        $product->name = $request->name;
        $product->division_id = $request->division;
        $product->slug = $slug;
        $product->short_description = $request->short_description;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->published = $request->published;

        $product->save();

        $product->categories()->attach($request->categories);

        // Handle tags
        $tags = $request->tags;
        if (!empty($tags)) {
            $tags = array_unique($tags);
            $tagIds = [];
            foreach ($tags as $tagName) {
                $tag = Tag::firstOrCreate(['name' => $tagName]);
                $tagIds[] = $tag->id;
            }
            $product->tags()->attach($tagIds);
        }


        if ($request->hasFile('image')) {
            $image = $request->file('image');

            $timestamp = time();
            $extension = $image->getClientOriginalExtension();
            $filename = "{$product->id}_{$timestamp}.{$extension}";

            $path = $image->storeAs('products', $filename, 'public');
            $product->image = $path;
            $product->save();

            // Generate thumbnails
            Thumbnail::generate(storage_path("app/public/products"), $filename);
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
        $divisions = Division::where('active', 1)->get();

        return view('admin.products.edit', compact('product', 'categories', 'divisions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, Product $product): RedirectResponse
    {

        $product->name = $request->name;
        $product->division_id = $request->division;
        $product->short_description = $request->short_description;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->published = $request->published;

        $product->categories()->sync($request->categories);

        // Handle tags
        $tags = $request->tags;
        if (!empty($tags)) {
            $tags = array_unique($tags);
            $tagIds = [];
            foreach ($tags as $tagName) {
                $tag = Tag::firstOrCreate(['name' => $tagName]);
                $tagIds[] = $tag->id;
            }
            $product->tags()->sync($tagIds);
        } else {
            $product->tags()->detach();
        }


        $product->save();


        if ($request->has('image')) {

            if ($request->input('image') === 'remove') {
                if ($product->image) {
                    Storage::disk('public')->delete($product->image);
                    $product->image = null;
                    $product->save();
                }
            } elseif ($request->hasFile('image')) {
                if ($product->image) {
                    Storage::disk('public')->delete($product->image);
                }
                $image = $request->file('image');

                $timestamp = time();
                $extension = $image->getClientOriginalExtension();
                $filename = "{$product->id}_{$timestamp}.{$extension}";

                $path = $image->storeAs('products', $filename, 'public');

                $product->image = $path;
                $product->save();

                // Generate thumbnails
                Thumbnail::generate(storage_path("app/public/products"), $filename);
            }
        }

        return redirect()->route('admin.product.index')->with('success', 'Product updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product): RedirectResponse
    {
        $product->categories()->detach();
        $product->tags()->detach();
        $product->delete();

        return redirect()->route('admin.product.index')->with('success', 'Product deleted successfully!');
    }
}
