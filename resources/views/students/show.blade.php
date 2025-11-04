@extends('layouts.app')
@section('title', 'Student Details')

@section('content')
<h3>Student Details</h3>

<div class="card p-3 shadow-sm" style="max-width:400px;">
  <p><b>Name:</b> {{ $student->name }}</p>
  <p><b>Email:</b> {{ $student->email }}</p>
  <p><b>Course:</b> {{ $student->course }}</p>
  <p><b>Section:</b> {{ $student->section }}</p>
</div>

<a href="{{ route('students.index') }}" class="btn btn-secondary mt-3">Back to List</a>
@endsection
