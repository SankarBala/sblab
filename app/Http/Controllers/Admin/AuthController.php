<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        return view('auth.login');
    }

    public function athenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $credentials['password'] = bcrypt($credentials['password']);
        $credentials[''] = $request->input('');
    }

    public function register(Request $request)
    {
        return view('auth.register');
    }

    public function create_user(Request $request)
    {
        return view('auth.register');
    }

    public function forgot_password(Request $request)
    {
        return view('auth.forgot-password');
    }

    public function reset_password(Request $request)
    {
        return view('auth.reset-password');
    }

    public function send_reset_link(Request $request)
    {
        return view('auth.reset-password');
    }

    public function update_password(Request $request)
    {
        // return view('auth.reset-password');
    }

    public function logout(Request $request)
    {
        return redirect()->route('home');
    }
}
