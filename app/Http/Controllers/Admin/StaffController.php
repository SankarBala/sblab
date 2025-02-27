<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $staffs = Staff::all();
        return view("admin.staff.index", compact("staffs"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.staff.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "name" => "required|string|min:2|max:255",
            "email" => "nullable|email|unique:staff",
            "phone" => "nullable|string",
            'images' => 'nullable|array|size:1',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => "nullable|string",
            'facebook' => "nullable|string",
            'twitter' => "nullable|string",
            'linkedin' => "nullable|string",
            'instagram' => "nullable|string",
        ]);

        $staff = new Staff();
        $staff->name = $request->name;
        $staff->email = $request->email;
        $staff->phone = $request->phone;
        $staff->designation = $request->designation;
        $staff->description = $request->description;
        $staff->facebook = $request->facebook;
        $staff->twitter = $request->twitter;
        $staff->linkedin = $request->linkedin;
        $staff->instagram = $request->instagram;
        $staff->save();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->store('staffs', 'public');

            $staff->image = $path;
            $staff->save();
        }


        return redirect()->route("admin.staff.index")->with("success", "Staff created successfully.");
    }

    /**
     * Display the specified resource.
     */
    public function show(Staff $staff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Staff $staff)
    {

        return view("admin.staff.edit", compact("staff"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Staff $staff)
    {

        $request->validate([
            "name" => "required|string|min:2|max:255",
            "email" => "nullable|email|unique:staff, email, $staff->id",
            "phone" => "nullable|string",
            'images' => 'nullable|array|size:1',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => "nullable|string",
            'facebook' => "nullable|string",
            'twitter' => "nullable|string",
            'linkedin' => "nullable|string",
            'instagram' => "nullable|string",
        ]);

        $staff->name = $request->name;
        $staff->email = $request->email;
        $staff->phone = $request->phone;
        $staff->designation = $request->designation;
        $staff->description = $request->description;
        $staff->facebook = $request->facebook;
        $staff->twitter = $request->twitter;
        $staff->linkedin = $request->linkedin;
        $staff->instagram = $request->instagram;
        $staff->save();

        if ($request->has('image')) {
            if ($request->input('image') === 'remove') {
                if ($staff->image) {
                    Storage::disk('public')->delete($staff->image);
                    $staff->image = null;
                    $staff->save();
                }
            } elseif ($request->hasFile('image')) {
                if ($staff->image) {
                    Storage::disk('public')->delete($staff->image);
                }
                $image = $request->file('image');
                $path = $image->store('staffs', 'public');
                $staff->image = $path;
                $staff->save();
            }
        }

        return redirect()->route('admin.staff.edit', $staff)->with('success', 'Staff updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Staff $staff)
    {
        if ($staff->image) {
            Storage::disk('public')->delete($staff->image);
        }

        $staff->delete();

        return redirect()->route('admin.staff.index')->with('success', 'staff deleted successfully!');
    }
}
