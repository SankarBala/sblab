<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
// use App\Mail\VerifyEmail;
use Illuminate\Auth\Notifications\VerifyEmail as NotificationsVerifyEmail;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {

        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|string|min:6',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials, $request->remember)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'Credentials don\'t match our records.',
        ]);
    }

    public function register(Request $request)
    {
        return view('auth.register');
    }

    public function create_user(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'email_verification_token' => Str::random(60),
        ]);

        if (!$user->hasVerifiedEmail()) {
            $user->sendEmailVerificationNotification();
        }

        return redirect()->route('login')->with('status', 'Registration successful! Please check your email to verify your account.');
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

    public function verify_email(Request $request, User $user, $hash)
    {

        if (!URL::hasValidSignature($request)) {
            abort(403, 'Invalid or expired verification link.');
        }

        if (!hash_equals(sha1($user->email), $hash)) {
            abort(403, 'Email verification failed.');
        }

        if ($user->hasVerifiedEmail()) {
            return redirect()->route('login')->with('status', 'Email already verified. Please login.');
        }

        $user->markEmailAsVerified();
        $user->save();
        $request->session()->regenerate();
        
        return redirect()->route('login')->with('status', 'Email successfully verified. Please login.');
    }



    // public function resend_verification_email(Request $request)
    // {
    //     return view('auth.verify-email');
    // }

    public function confirm_email(Request $request)
    {
        $token = $request->route('token');
        $user = User::where('email_verification_token', $token)->firstOrFail();

        if ($user->hasVerifiedEmail()) {
            return redirect()->route('login')->with('status', 'Email already verified. Please login.');
        }

        $user->markEmailAsVerified();
        $user->email_verification_token = null;
        $user->save();

        if (Hash::check($request->password, $user->password)) {
            Auth::login($user);
            return redirect()->route('dashboard')->with('status', 'Email verified and logged in successfully.');
        }

        return redirect()->route('login')->with('status', 'Email verified. Please login.');
    }

    public function logout(Request $request)
    {
        return redirect()->route('home');
    }
}
