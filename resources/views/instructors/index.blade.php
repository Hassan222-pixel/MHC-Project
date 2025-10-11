@extends('layouts.app')

@section('page-title', 'Instructors')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4>Instructors</h4>
            @can('instructor-create')
                <a href="{{ route('instructors.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Add Instructor
                </a>
            @endcan
        </div>

        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            @if($instructors->count() > 0)
                <div class="container-fluid">
                    <div class="row">
                        @foreach($instructors as $instructor)
                            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                                <div class="card h-100 shadow-sm">
                                    @if($instructor->image)
                                        <img src="{{ asset('storage/' . $instructor->image) }}" class="card-img-top"
                                            alt="{{ $instructor->name }}" style="height: 200px; object-fit: cover;">
                                    @else
                                        <img src="https://via.placeholder.com/200x200?text=No+Image" class="card-img-top"
                                            alt="No image">
                                    @endif

                                    <div class="card-body text-center">
                                        <h5 class="card-title">{{ $instructor->name }}</h5>
                                        <p class="text-muted mb-1">{{ $instructor->title }}</p>
                                        <p class="small text-muted">Graduates: {{ $instructor->students_graduated }}</p>
                                        <p class="mb-2">⭐ {{ $instructor->rating }}</p>
                                    </div>

                                    <div class="card-footer text-center">
                                        <a href="{{ route('instructors.show', $instructor->id) }}" class="btn btn-info btn-sm">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        @can('instructor-edit')
                                            <a href="{{ route('instructors.edit', $instructor->id) }}" class="btn btn-warning btn-sm">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                        @endcan
                                        @can('instructor-delete')
                                            <form action="{{ route('instructors.destroy', $instructor->id) }}" method="POST"
                                                class="d-inline" onsubmit="return confirm('Are you sure?');">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                            </form>
                                        @endcan
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @else
                <div class="text-center text-muted">No instructors found</div>
            @endif
        </div>
    </div>
@endsection

@push('styles')
    <style>
        .card-body {
            overflow: visible !important;
            max-height: none !important;
        }

        .container-fluid {
            padding-left: 0;
            padding-right: 0;
        }
    </style>
@endpush