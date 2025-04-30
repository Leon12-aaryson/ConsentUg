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

                <div class="row mt-4" id="gallery-container">
                    @if($galleries->isEmpty())
                        <div class="col-12">
                            <p class="text-muted text-center">No gallery items available at this time.</p>
                        </div>
                    @else
                        @foreach($galleries as $gallery)
                            <div class="col-md-4 mb-4">
                                <div class="card">
                                    <img src="{{ asset('storage/' . $gallery->image_path) }}" class="card-img-top" alt="{{ $gallery->title ?? 'Gallery Item' }}">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $gallery->title }}</h5>
                                        <p class="card-text">{{ $gallery->description }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>

                <!-- Pagination for Gallery (only if items exist) -->
                @if(!$galleries->isEmpty())
                    <div class="mt-4">
                        {{ $galleries->links() }}
                    </div>
                @endif
            </div>

            <!-- Reports Section (4 columns) -->
            <div class="col-md-4">
                <h4>Recent Reports</h4>
                <ul class="list-group" id="reports-container">
                    @if($reports->isEmpty())
                        <li class="list-group-item text-muted">No reports available at this time.</li>
                    @else
                        @foreach($reports as $report)
                            <li class="list-group-item">
                                <a href="{{ asset('storage/' . $report->file_path) }}" target="_blank">{{ $report->title }}</a>
                                <small class="text-muted">{{ $report->created_at->format('M d, Y') }}</small>
                            </li>
                        @endforeach
                    @endif
                </ul>

                <!-- Get More Link for Reports -->
                @if($reports->count() >= 10 && $totalReports > 10)
                    <div class="mt-3 text-center">
                        <span class="do-links">
                            <a href="{{ route('reports') }}" class="btn btn-primary">View all Reports</a>
                        </span>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection