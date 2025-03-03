@extends('auth.layouts.app')
@section('content')
    <div class="login-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="{{ route('home') }}" class="h1">{{ config('app.name') }}</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Forgot your password? <br /> Enter your email to reset password.</p>
                <form action="{{route('forgot_password')}}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Email" name="email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-success btn-block">Change password</button>
                        </div>
                    </div>
                </form>
                <p class="mt-3 mb-1 d-flex justify-content-between">
                    <a class="btn btn-primary btn-sm flex-fill mr-1" href="{{ route('login') }}">Login</a>
                    <a class="btn btn-info btn-sm flex-fill ml-1" href="{{ route('home') }}">Homepage</a>
                </p>
            </div>
        </div>
    </div>
@endsection
