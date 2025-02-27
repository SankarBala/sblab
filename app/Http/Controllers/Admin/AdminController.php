<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Option;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminController extends Controller
{
    public function dashboard(): View
    {
        return view('admin.home');
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
        ]);

        foreach ($request->except('_token') as $name => $value) {
            Option::updateOrCreate(['key' => $name], ['value' => $value]);
        }
        
        return back()->with('success', 'Settings updated successfully.');
    }
}
