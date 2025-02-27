@extends('auth.layouts.app')

@section('content')
    <div class="register-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="{{ route('home') }}" class="h1">{{ config('app.name') }}</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Register as new User</p>

                <form action="{{ route('create_user') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Full name" name="name">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" placeholder="Email" name="email">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" placeholder="Password" name="password">
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" placeholder="Retype password"
                            name="password_confirmation">
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-success btn-block">Register</button>
                        </div>
                    </div>
                </form>
                <p class="mt-3 mb-1 d-flex justify-content-between">
                    <a class="btn btn-primary btn-sm flex-fill mr-1" href="{{ route('login') }}">I already have account.</a>
                    <a class="btn btn-info btn-sm flex-fill ml-1" href="{{ route('home') }}">Homepage</a>
                </p>
            </div>
        </div>
    </div>
@endsection
