<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

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
            'image' => 'required|image|mimes:jpeg,png,jpg|max:10048', // remove avif here
            'author' => 'required|string|max:255',
        ]);

        // Additional validation for AVIF file extension
        if ($request->file('image')->getClientOriginalExtension() === 'avif') {
            // Check the mime type manually
            if (mime_content_type($request->file('image')->getPathname()) !== 'image/avif') {
                return back()->withErrors(['image' => 'The image must be a valid AVIF file.']);
            }
        }

        $imageName = time() . '.' . $request->image->extension();
        // $request->image->move(public_path(path: 'images'), $imageName);

        $request->image->move(public_path('images'), $imageName);


        Blog::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'image' => $imageName,
            'author' => 'Leon',
            // 'author' => auth()->user()->name,
            'created_at' => now(),
        ]);

        return redirect()->route('blogs.index')->with('success', 'Blog created successfully.');
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
        \Log::info('Blog page debug info:', $debugInfo);

        return view('blog', compact('blogs', 'debugInfo'));
    }
}
