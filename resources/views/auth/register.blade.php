@extends('layouts.app')
@section('content')

@section('title', 'Register')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="col-md-4">
        <div class="card shadow-sm">
            <div class="card-body bg-dark">
                <h4 class="text-center text-white mb-4">Register</h4>

                <form method="POST" action="{{ route('dashboard.register.store') }}" class="text-white">
                    @csrf

                    <div class="mb-3">
                        <label>Name</label>
                        <input type="text" class="form-control bg-dark text-white border-secondary @error('name') is-invalid @enderror"
                               name="name" required autofocus>
                        @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" class="form-control bg-dark text-white border-secondary @error('email') is-invalid @enderror"
                               name="email" required>
                        @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="mb-3">
                        <label>Password</label>
                        <input type="password" class="form-control bg-dark text-white border-secondary @error('password') is-invalid @enderror"
                               name="password" required>
                        @error('password') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="mb-3">
                        <label>Confirm Password</label>
                        <input type="password" class="form-control bg-dark text-white border-secondary" name="password_confirmation" required>
                    </div>

                    <button class="btn btn-primary w-100">Register</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
