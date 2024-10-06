<?php

namespace App\Http\Controllers;

use App\Models\Blog;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        $blogCount = $blogs->count();
        return view('blogs', compact('blogs', 'blogCount'));
    }

    public function create()
    {
        return view('create_blog');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:10048',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        Blog::create([
            'title' => $request->title,
            'content' => $request->input('content'),
            'image' => $imageName,
        ]);

        return redirect()->route('blogs.index')->with('success', 'Blog created successfully.');
    }
    // Display the list of blogs on the blog page
    public function showBlogPage()
    {
        $blogs = Blog::all(); // Retrieve all blogs
        return view('blog', compact('blogs')); // Make sure this matches your actual view file name
    }
}
