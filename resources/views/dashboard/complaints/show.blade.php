@extends('dashboard.main')
@section('title', 'View Complaint - ConsentUG')
@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>View Complaint</h1>
            <a href="{{ route('dashboard.complaints.index') }}" class="btn btn-secondary">
                <i class='bx bx-arrow-back'></i> Back to Complaints
            </a>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <p><strong>Name:</strong> {{ $complaint->name }}</p>
                        <p><strong>Email:</strong> {{ $complaint->email }}</p>
                        <p><strong>Date:</strong> {{ $complaint->created_at->format('Y-m-d H:i') }}</p>
                    </div>
                    <div class="col-md-12 mt-4">
                        <h5>Message:</h5>
                        <p class="border p-3 rounded">{{ $complaint->message }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
