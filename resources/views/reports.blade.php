@extends('layouts.main')

@section('title', 'All Reports - ConsentUG')

<div class="header">
    <div class="contact">
        <div class="container">
            <h3>Our Reports</h3>
            <p>Explore Our Reports</p>
        </div>
    </div>
</div>

@section('body')
    <div class="container p-4">
        <h1>All Reports</h1>
        <p>Explore our complete collection of reports.</p>

        <ul class="list-group">
            @foreach($reports as $report)
                <li class="list-group-item">
                    <a href="{{ $report->file_url }}" target="_blank">{{ $report->title }}</a>
                    <small class="text-muted">{{ $report->created_at->format('M d, Y') }}</small>
                </li>
            @endforeach
        </ul>

        <!-- Pagination for Reports -->
        <div class="mt-4">
            {{ $reports->links() }}
        </div>
    </div>
@endsection