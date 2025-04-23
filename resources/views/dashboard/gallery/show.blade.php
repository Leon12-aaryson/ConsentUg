@extends('dashboard.main')

@section('title', ($gallery->title ?? 'Gallery Item') . ' - ConsentUG')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>{{ $gallery->title ?? 'Untitled' }}</h1>
            <a href="{{ route('gallery.index') }}" class="btn btn-secondary"><i class='bx bx-arrow-back'></i> Back to Gallery</a>
        </div>

        <div class="card">
            <div class="card-body">
                <img src="{{ asset('storage/' . $gallery->image_path) }}" alt="{{ $gallery->title }}" class="img-fluid mb-3" style="max-width: 500px;">
                <p><strong>Description:</strong> {{ $gallery->description ?? 'No description available.' }}</p>
                <p><strong>Created At:</strong> {{ $gallery->created_at->format('M d, Y') }}</p>
            </div>
        </div>
    </div>
@endsection