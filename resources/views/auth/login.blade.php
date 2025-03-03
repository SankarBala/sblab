@extends('auth.layouts.app')

@section('content')
    <div class="login-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="{{ route('home') }}" class="h1">{{ config('app.name') }}</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Sign in to Enter Admin Panel</p>
                <form action="{{ route('authenticate') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <input type="email" class="form-control" placeholder="Email" name="email" value="{{old('email')}}"/>
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" placeholder="Password" name="password" />
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember" name="remember">
                                <label for="remember">
                                    Remember Me
                                </label>
                            </div>
                        </div>

                        <div class="col-4">
                            <button type="submit" class="btn btn-success btn-block">Sign In</button>
                        </div>

                    </div>
                </form>

                <p class="mt-3 mb-1 d-flex justify-content-between">
                    {{-- <a class="btn btn-primary btn-sm flex-fill mr-1" href="{{ route('forgot_password') }}">Forgot
                        Password</a> --}}
                    <a class="btn btn-info btn-sm flex-fill ml-1" href="{{ route('home') }}">Homepage</a>
                </p>
            </div>
        </div>
    </div>
@endsection
