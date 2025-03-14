<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Option;
use App\Models\Product;
use App\Models\Staff;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminController extends Controller
{
    public function dashboard(): View
    {

        $products = Product::all();
        $articles = Article::all();
        $staffs = Staff::all();

        return view('admin.home', compact('products', 'articles', 'staffs'));
    }

    public function settings(): View
    {
        view()->share('settings', Option::pluck('value', 'key'));
        return view('admin.settings');
    }

    public function settings_update(Request $request): RedirectResponse
    {

        $request->validate([
            'phone' => 'required|string',
            'email' => 'required|email|string',
            'address' => 'required|string',
            'facebook' => 'nullable|string|url',
            'twitter' => 'nullable|string|url',
            'youtube' => 'nullable|string|url',
        ]);

        foreach ($request->except('_token') as $name => $value) {
            Option::updateOrCreate(['key' => $name], ['value' => $value]);
        }

        return back()->with('success', 'Settings updated successfully.');
    }
}
