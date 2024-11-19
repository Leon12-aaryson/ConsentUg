<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('index', compact('blogs'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        Blog::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $imageName,
            'author' => auth()->user()->name,
        ]);

        return redirect()->route('dashboard.blogs')->with('success', 'Blog post created successfully.');
    }

    public function showBlogPage()
    {
        $blogs = Blog::latest()->get();

        // Add debugging information
        $debugInfo = [
            'blog_count' => $blogs->count(),
            'first_blog' => $blogs->first(),
            'blog_array' => $blogs->toArray(),
        ];

        // Log debugging information
        Log::info('Blog page debug info:', $debugInfo);

        return view('blog', compact('blogs', 'debugInfo'));
    }

    public function dashboard()
    {
        $blogs = Blog::latest()->get();
        return view('dashboard.blogs', compact('blogs'));
    }

    public function destroy(Blog $blog)
    {
        // Delete the blog's image if it exists
        if ($blog->image) {
            Storage::delete('public/images/' . $blog->image);
        }

        // Delete the blog
        $blog->delete();

        // Redirect with success message
        return redirect()->route('dashboard.blogs')->with('success', 'Blog post deleted successfully');
    }
}
