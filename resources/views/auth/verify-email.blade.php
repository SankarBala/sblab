@extends('auth.layouts.app')
{{-- @section('content')
    <div class="login-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="{{ route('home') }}" class="h1">{{ config('app.name') }}</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Enter password to verify.</p>
                <form action="" method="post">
                    @csrf
                    <div class="mb-3">
                        <input type="password" class="form-control" placeholder="Password" name="password">
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-success btn-block">Verify</button>
                        </div>
                    </div>
                </form>
             
            </div>
        </div>
    </div>
@endsection --}}


@section('content')
<div class="container">
    <h2>Email Verification Required</h2>
    <p>Before accessing this page, please verify your email by clicking the link sent to your email.</p>

    @if (session('status') == 'verification-link-sent')
        <div class="alert alert-success">
            A new verification link has been sent to your email address.
        </div>
    @endif

    <form method="POST" action="{{ route('verification.resend') }}">
        @csrf
        <button class="btn btn-info" type="submit">Resend Verification Email</button>
    </form>
</div>
@endsection
