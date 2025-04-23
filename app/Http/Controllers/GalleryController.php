<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    // Display a listing of gallery items
    public function index()
    {
        $galleries = Gallery::latest()->paginate(10);
        return view('dashboard.gallery.index', compact('galleries'));
    }

    // Show the form for creating a new gallery item
    public function create()
    {
        return view('dashboard.gallery.create');
    }

    // Store a newly created gallery item
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Max 2MB
            'description' => 'nullable|string',
        ]);

        // Handle image upload
        $imagePath = $request->file('image')->store('gallery', 'public');

        // Create gallery item
        Gallery::create([
            'title' => $request->title,
            'image_path' => $imagePath,
            'description' => $request->description,
        ]);

        return redirect()->route('gallery.index')->with('success', 'Gallery item created successfully.');
    }

    // Display a specific gallery item
    public function show(Gallery $gallery)
    {
        return view('dashboard.gallery.show', compact('gallery'));
    }

    // Show the form for editing a gallery item
    public function edit(Gallery $gallery)
    {
        return view('dashboard.gallery.edit', compact('gallery'));
    }

    // Update a gallery item
    public function update(Request $request, Gallery $gallery)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'nullable|string',
        ]);

        // Update fields
        $data = [
            'title' => $request->title,
            'description' => $request->description,
        ];

        // Handle image upload if provided
        if ($request->hasFile('image')) {
            // Delete old image
            Storage::disk('public')->delete($gallery->image_path);
            // Store new image
            $data['image_path'] = $request->file('image')->store('gallery', 'public');
        }

        $gallery->update($data);

        return redirect()->route('gallery.index')->with('success', 'Gallery item updated successfully.');
    }

    // Delete a gallery item
    public function destroy(Gallery $gallery)
    {
        // Delete image from storage
        Storage::disk('public')->delete($gallery->image_path);
        // Delete gallery item
        $gallery->delete();

        return redirect()->route('gallery.index')->with('success', 'Gallery item deleted successfully.');
    }
}