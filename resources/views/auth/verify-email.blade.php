@extends('auth.layouts.app')
@section('content')
    <div class="login-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="{{ route('home') }}" class="h1">{{ config('app.name') }}</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Enter password to verify.</p>
                <form action="{{ route('verification.confirm') }}" method="post">
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
@endsection
