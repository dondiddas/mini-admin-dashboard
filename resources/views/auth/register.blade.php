@extends('layouts.auth')
@section('title', 'Register')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="col-md-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <h4 class="text-center mb-4">Register</h4>

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="mb-3">
                        <label>Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                               name="name" required autofocus>
                        @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                               name="email" required>
                        @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="mb-3">
                        <label>Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                               name="password" required>
                        @error('password') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="mb-3">
                        <label>Confirm Password</label>
                        <input type="password" class="form-control" name="password_confirmation" required>
                    </div>

                    <button class="btn btn-success w-100">Register</button>

                    <div class="text-center mt-3">
                        <p class="mb-0">
                            Already have an account?
                            <a href="{{ route('login') }}">Login</a>
                        </p>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
