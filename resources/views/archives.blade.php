@extends('layouts.main')

@section('title', 'Archives - ConsentUG')

<div class="header">
    <div class="contact">
        <div class="container">
            <h3>Our Archives</h3>
            <p>Explore Our Gallery and Reports</p>
        </div>
    </div>
</div>

@section('body')
    <div class="container p-4">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="row">
            <!-- Gallery Section (8 columns) -->
            <div class="col-md-8">
                <h1>Gallery Archives</h1>
                <p class="mt-4">Discover our collection of images showcasing our initiatives, events, and impact in promoting consumer sustainability and advocacy.</p>

                <div class="row mt-4">
                    @forelse($galleries as $gallery)
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <img src="{{ asset('storage/' . $gallery->image_path) }}" class="card-img-top" alt="{{ $gallery->title ?? 'Gallery Item' }}">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $gallery->title ?? 'Untitled' }}</h5>
                                    <p class="card-text">{{ Str::limit($gallery->description, 100) ?? 'No description available.' }}</p>
                                </div>
                            </div>
                        </div>
                    @empty
                        <p>No gallery items available.</p>
                    @endforelse
                </div>
            </div>

            <!-- Reports Section (4 columns) -->
            <div class="col-md-4">
                <h4>Recent Reports</h4>
                <ul class="list-group">
                    @forelse($reports as $report)
                        <li class="list-group-item">
                            <a href="{{ asset('storage/' . $report->file_path) }}" target="_blank">{{ $report->title ?? 'Untitled Report' }}</a>
                            <small class="text-muted">{{ $report->created_at->format('M d, Y') }}</small>
                        </li>
                    @empty
                        <li class="list-group-item">No reports available.</li>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
@endsection