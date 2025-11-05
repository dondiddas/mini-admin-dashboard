@extends('layouts.auth')
@section('title', 'Login')

@section('content')
<div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">

    <div class="col-md-4">
        <div class="card shadow-lg border-0 rounded-4" style="background:#1e1e1e;">
            <div class="card-body p-4">
                
                <h3 class="text-center mb-4 text-white fw-bold">Welcome Back</h3>

                @if (session('status'))
                    <div class="alert alert-success">{{ session('status') }}</div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-3">
                        <label class="text-light">Email</label>
                        <input type="email" 
                            class="form-control bg-dark text-white border-secondary @error('email') is-invalid @enderror"
                            name="email" 
                            value="{{ old('email') }}"
                            required autofocus>
                        @error('email') 
                            <small class="text-danger">{{ $message }}</small> 
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="text-light">Password</label>
                        <input type="password" 
                            class="form-control bg-dark text-white border-secondary @error('password') is-invalid @enderror"
                            name="password" 
                            required>
                        @error('password') 
                            <small class="text-danger">{{ $message }}</small> 
                        @enderror
                    </div>

                    <div class="d-flex justify-content-between mb-3 text-light small">
                        <div>
                            <input type="checkbox" name="remember"> Remember me
                        </div>
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="text-primary">Forgot?</a>
                        @endif
                    </div>

                    <button class="btn btn-primary w-100 fw-semibold py-2">Login</button>

                </form>

            </div>
        </div>
    </div>

</div>
@endsection
