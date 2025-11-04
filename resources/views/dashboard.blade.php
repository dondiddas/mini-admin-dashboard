@extends('layouts.app')
@section('title', 'Dashboard')

@section('content')
<h3 class="mb-4 fw-semibold">Dashboard</h3>

<div class="row g-3">
    <div class="col-md-4">
        <div class="card shadow-sm text-center p-3">
            <h6 class="text-muted">Total Students</h6>
            <h2 class="fw-bold">{{ $totalStudents }}</h2>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card shadow-sm text-center p-3">
            <h6 class="text-muted">New Today</h6>
            <h2 class="fw-bold">{{ $todayNew }}</h2>
        </div>
    </div>
</div>

<a href="{{ route('students.index') }}" class="btn btn-primary mt-4">
    View Students
</a>
@endsection
