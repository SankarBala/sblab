@extends('auth.layouts.app')
@section('content')
    <div class="login-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="{{ route('home') }}" class="h1">{{ config('app.name') }}</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Update your password.</p>
                <form action="login.html" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password" name="password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Confirm Password"
                            name="password_confirmation">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-success btn-block">Change password</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <p class="mt-3 mb-1 d-flex justify-content-between">
                    <a class="btn btn-primary btn-sm flex-fill mr-1" href="{{ route('login') }}">Login</a>
                    <a class="btn btn-info btn-sm flex-fill ml-1" href="{{ route('home') }}">Homepage</a>
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
@endsection
