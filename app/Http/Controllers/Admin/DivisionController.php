<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Division;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DivisionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        view()->share('divisions', Division::paginate(10));
        return view('admin.division.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.division.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:divisions,name',
            'description' => 'nullable|string|max:20000',
            'images' => 'nullable|array|size:1',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ], [
            'images.*.image' => 'Each file must be an image.',
            'images.*.mimes' => 'Only JPEG, PNG, JPG, GIF, and WEBP files are allowed.',
            'images.*.max' => 'Each image must not exceed 2MB in size.',
        ]);

        $slug = Str::slug($request->name);

        $count = Division::where('slug', $slug)->count();
        if ($count > 0) {
            $slug .= '-' . ($count + 1);
        }

        $division = new Division();
        $division->name = $request->input('name');
        $division->slug = $slug;
        $division->description = $request->input('description');
        $division->active = $request->input('active');
        $division->save();

        // Handle image upload if present
        if ($request->hasFile('images')) {
            $image = $request->file('images')[0]; // Get the uploaded image (first item in the array)
            $path = $image->store('divisions', 'public'); // Store in 'public/divisions' folder

            // Save the image path to the database (if needed)
            $division->image = $path;
            $division->save();
        }

        return redirect()->route('admin.division.index')->with('success', 'Division created successfully!');
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
    public function edit(Division $division)
    {
        return view('admin.division.edit', compact('division'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Division $division)
    {
        $division->delete();
        return redirect()->route('admin.division.index')->with('success', 'Division deleted successfully!');
    }
}
