@extends('dashboard.main')
@section('title', 'Complaints - ConsentUG')
@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Complaints Management</h1>
        </div>

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Message</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($complaints as $complaint)
                                <tr>
                                    <td>{{ $complaint->created_at->format('Y-m-d H:i') }}</td>
                                    <td>{{ $complaint->name }}</td>
                                    <td>{{ $complaint->email }}</td>
                                    <td>{{ Str::limit($complaint->message, 50) }}</td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <a href="{{ route('dashboard.complaints.show', $complaint) }}"
                                               class="btn btn-sm btn-info">
                                                <i class='bx bx-show'></i>
                                            </a>
                                            <form action="{{ route('dashboard.complaints.destroy', $complaint) }}"
                                                  method="POST"
                                                  onsubmit="return confirm('Are you sure you want to delete this complaint?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">
                                                    <i class='bx bx-trash'></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center">No complaints found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-center mt-4">
                    {{ $complaints->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
