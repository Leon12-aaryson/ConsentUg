@extends('dashboard.main')
@section('title', 'Blogs - ConsentUG')
@section('content')

    <div class="container">
        <h1>Blog Posts</h1>

        <!-- Display Blog Posts -->
        @if (isset($blogs) && $blogs->count())
            <ul class="list-group">
                @foreach ($blogs as $blog)
                    <li class="list-group-item">
                        <h2>{{ $blog->title }}</h2>
                        <p>{{ $blog->content }}</p>
                        <small>Written by {{ $blog->author }} on {{ $blog->created_at->format('M d, Y') }}</small>
                    </li>
                @endforeach
            </ul>
        @else
            <p>No blog posts available.</p>
        @endif

        <!-- Create Blog Post Form -->
        <h2>Create a New Blog Post</h2>
        <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data" class="mt-4">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Enter blog title"
                    required>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea name="content" class="form-control" id="content" rows="5" placeholder="Enter blog content" required></textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Upload Image</label>
                <input type="file" name="image" class="form-control" id="image" accept="image/*" required>
            </div>
            <div class="mb-3">
                <label for="author" class="form-label">Author</label>
                <input type="text" name="author" class="form-control" id="author" placeholder="Enter author name"
                    required>
            </div>
            <button type="submit" class="btn btn-primary">Create Blog</button>
        </form>

    </div>

@endsection
