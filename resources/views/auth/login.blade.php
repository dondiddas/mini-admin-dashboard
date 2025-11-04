@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="col-md-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <h4 class="text-center mb-4">Login</h4>

                @if (session('status'))
                    <div class="alert alert-success">{{ session('status') }}</div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                               name="email" required autofocus>
                        @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="mb-3">
                        <label>Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                               name="password" required>
                        @error('password') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="d-flex justify-content-between mb-3">
                        <div>
                            <input type="checkbox" name="remember">
                            <label>Remember me</label>
                        </div>
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}">Forgot?</a>
                        @endif
                    </div>

                    <button class="btn btn-primary w-100">Login</button>

                    <div class="text-center mt-3">
                        <p class="mb-0">
                            Don't have an account?
                            <a href="{{ route('register') }}">Register</a>
                        </p>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
