@extends('dashboard.main')
@section('title', 'Reports - ConsentUG')
@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Reports Management</h1>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#uploadReportModal">
                <i class='bx bx-upload me-1'></i> Upload Report
            </button>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Type</th>
                                <th>Uploaded By</th>
                                <th>Upload Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($reports as $report)
                                <tr>
                                    <td>{{ $report->title }}</td>
                                    <td>{{ strtoupper($report->file_type) }}</td>
                                    <td>{{ $report->uploader->name }}</td>
                                    <td>{{ $report->created_at->format('Y-m-d H:i') }}</td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <a href="{{ route('dashboard.reports.download', $report) }}"
                                               class="btn btn-sm btn-success me-1">
                                                <i class='bx bx-download me-1'></i>
                                                Download
                                            </a>
                                            <form action="{{ route('dashboard.reports.destroy', $report) }}"
                                                  method="POST"
                                                  class="d-inline"
                                                  onsubmit="return confirm('Are you sure you want to delete this report?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">
                                                    <i class='bx bx-trash me-1'></i>
                                                    Delete
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center">No reports available</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-center mt-4">
                    {{ $reports->links() }}
                </div>
            </div>
        </div>
    </div>

    <!-- Upload Report Modal -->
    <div class="modal fade" id="uploadReportModal" tabindex="-1" aria-labelledby="uploadReportModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="uploadReportModalLabel">Upload New Report</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('dashboard.reports.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="title" class="form-label">Report Title</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror"
                                   id="title" name="title" required>
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="document" class="form-label">Upload File</label>
                            <input type="file" class="form-control @error('document') is-invalid @enderror"
                                   id="document" name="document" required>
                            @error('document')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Upload Report</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
