<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        view()->share('categories', Category::paginate(10));
        return view('admin.category.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
       
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:categories,name',
            'description' => 'nullable|string|max:20000',
            'images' => 'nullable|array|size:1',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ], [
            'images.*.image' => 'Each file must be an image.',
            'images.*.mimes' => 'Only JPEG, PNG, JPG, GIF, and WEBP files are allowed.',
            'images.*.max' => 'Each image must not exceed 2MB in size.',
        ]);

        $slug = Str::slug($request->name);

        $count = Category::where('slug', $slug)->count();
        if ($count > 0) {
            $slug .= '-' . ($count + 1);
        }

        $category = new Category();
        $category->name = $request->input('name');
        $category->slug = $slug;
        $category->description = $request->input('description');
        $category->active = $request->input('active');
        $category->save();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->store('categories', 'public');

            $category->image = $path;
            $category->save();
        }

        return redirect()->route('admin.category.index')->with('success', 'Category created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category): View
    {
        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category): RedirectResponse
    {

        $request->validate([
            'name' => 'required|string|max:255|unique:categories,name,' . $category->id,
            'description' => 'nullable|string|max:20000',
            'images' => 'nullable|array|size:1',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ], [
            'images.*.image' => 'File must be an image.',
            'images.*.mimes' => 'Only JPEG, PNG, JPG, GIF, and WEBP are allowed.',
            'images.*.max' => 'Image must not exceed 2MB in size.',
        ]);

        $slug = Str::slug($request->name);

        $count = Category::where('slug', $slug)->count();
        if ($count > 0) {
            $slug .= '-' . ($count + 1);
        }

        $category->name = $request->input('name');
        $category->slug = $slug;
        $category->description = $request->input('description');
        $category->active = $request->input('active');

        $category->save();

        if ($request->has('image')) {
            if ($request->input('image') === 'remove') {
                if ($category->image) {
                    Storage::disk('public')->delete($category->image);
                    $category->image = null;
                    $category->save();
                }
            } elseif ($request->hasFile('image')) {
                if ($category->image) {
                    Storage::disk('public')->delete($category->image);
                }
                $image = $request->file('image');
                $path = $image->store('categories', 'public');
                $category->image = $path;
                $category->save();
            }
        }

        return redirect()->route('admin.category.edit', $category)->with('success', 'Category updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category): RedirectResponse
    {
        if ($category->image) {
            Storage::disk('public')->delete($category->image);
        }

        $category->delete();
        return redirect()->route('admin.category.index')->with('success', 'Category deleted successfully!');
    }
}
