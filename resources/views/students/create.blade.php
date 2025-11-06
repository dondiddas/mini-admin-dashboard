@extends('layouts.app')
@section('title', 'Add Student')

@section('content')
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body bg-dark">
                    <h4 class="text-center text-white mb-4">Add New Student</h4>

                    <form method="POST" action="{{ route('students.store') }}" class="text-white">
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        @endif

                        @csrf

                        <div class="mb-3">
                            <label>Student Name</label>
                            <input type="text"
                                class="form-control bg-dark text-white border-secondary @error('name') is-invalid @enderror"
                                name="name" required>
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label>Email Address</label>
                            <input type="email"
                                class="form-control bg-dark text-white border-secondary @error('email') is-invalid @enderror"
                                name="email" required>
                            @error('email')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <button class="btn btn-success w-100">Save Student</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
