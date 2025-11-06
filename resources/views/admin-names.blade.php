@extends('layouts.app') {{-- or your dashboard layout --}}

@section('title', 'Admin Accounts')

@section('content')
    <div class="container mt-4">
        <h3 class="mb-3 text-white">Registered Admin Accounts ({{ $names->count() }})</h3>
        <div class="card bg-dark border-white">
            
            <div class="card-body">
                @if ($names->isEmpty())
                    <p class="text-muted">No admin accounts found.</p>
                @else
                    <ul class="list-group bg-dark">
                        @foreach ($names as $name)
                            <li class="list-group-item bg-dark text-white border-secondary">
                                {{ $name }}
                            </li>
                        @endforeach
                    </ul>

                @endif
            </div>
        </div>
    </div>
@endsection
