@extends('layouts.app')
@section('title', 'Students')

@section('content')
<h3 class="mb-4 fw-semibold">Students</h3>

{{-- Top Action Bar --}}
<div class="d-flex justify-content-between align-items-center mb-3">
    <a href="{{ route('dashboard') }}" class="btn bg-light btn-sm">
        ← Back
    </a>

    <a href="{{ route('students.create') }}" class="btn btn-success">
        + Add New Student
    </a>
</div>

{{-- Success Message --}}
@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif

{{-- Search Form --}}
<form method="GET" action="{{ route('students.index') }}" class="mb-3">
    <div class="input-group">
        <input type="text" name="search" value="{{ $search }}" class="form-control"
               placeholder="Search students by name or email...">
        <button class="btn btn-primary">Search</button>
    </div>
</form>

{{-- Search Results Message --}}
@if($search)
    <p class="text-muted">
        Results for: <strong>"{{ $search }}"</strong> — {{ $searchCount }} found
    </p>
@endif

<p><strong>Total Students:</strong> {{ $totalStudents }}</p>

{{-- Students Table --}}
@if (!$students->isEmpty())
<table class="table table-bordered table-hover align-middle table-dark">
    <thead class="table-dark">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Course</th>
        <th>Section</th>
        <th width="120">Action</th>
    </tr>
</thead>

<tbody>
@foreach($students as $s)
    <tr>
        <td>{{ $s->name }}</td>
        <td>{{ $s->email }}</td>
        <td>{{ $s->course }}</td>
        <td>{{ $s->section }}</td>
        <td>
            <a href="{{ route('students.show', $s->id) }}" class="btn btn-sm bg-primary text-white">
                View
            </a>
        </td>
    </tr>
@endforeach
</tbody>
</table>

{{-- Pagination --}}
<div>
    {{ $students->links() }}
</div>
@else
<div class="alert alert-warning">
    No students found.
</div>
@endif

@endsection
