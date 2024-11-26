@extends('dashboard.main')
@section('title', 'Dashboard - ConsentUG')
@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Dashboard Overview</h1>
        </div>

        <!-- Statistics Cards -->
        <div class="row mb-4">
            <div class="col-md-3">
                <div class="card bg-primary text-white">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="card-title">Total Users</h6>
                                <h2 class="mb-0">{{ $totalUsers }}</h2>
                            </div>
                            <i class='bx bx-user bx-lg'></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-success text-white">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="card-title">Blog Posts</h6>
                                <h2 class="mb-0">{{ $totalBlogs }}</h2>
                            </div>
                            <i class='bx bx-news bx-lg'></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-warning text-white">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="card-title">Reports</h6>
                                <h2 class="mb-0">{{ $totalReports }}</h2>
                            </div>
                            <i class='bx bx-file bx-lg'></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-danger text-white">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="card-title">Complaints</h6>
                                {{-- <h2 class="mb-0">{{ $totalComplaints }}</h2> --}}
                            </div>
                            <i class='bx bx-message-square-detail bx-lg'></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Recent Blog Posts -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="card-title mb-0">Recent Blog Posts</h5>
                        <a href="{{ route('dashboard.blogs.index') }}" class="btn btn-sm btn-primary">View All</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Author</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($recentBlogs as $blog)
                                        <tr>
                                            <td>{{ Str::limit($blog->title, 30) }}</td>
                                            <td>{{ $blog->author }}</td>
                                            <td>{{ $blog->created_at->format('M d, Y') }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="3" class="text-center">No blog posts yet</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Complaints -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="card-title mb-0">Recent Complaints</h5>
                        <a href="{{ route('dashboard.complaints.index') }}" class="btn btn-sm btn-primary">View All</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Subject</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($recentComplaints as $complaint)
                                        <tr>
                                            <td>{{ $complaint->name }}</td>
                                            <td>{{ Str::limit($complaint->message, 30) }}</td>
                                            <td>{{ $complaint->created_at->format('M d, Y') }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="3" class="text-center">No complaints yet</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
