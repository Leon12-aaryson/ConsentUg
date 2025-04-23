<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Document;
use Illuminate\Http\Request;

class ArchivesController extends Controller
{
    public function index()
    {
        // Fetch gallery items
        $galleries = Gallery::latest()->take(12)->get(); // Limit to 12 for display

        // Fetch recent reports
        $reports = Document::latest()->take(5)->get(); // Limit to 5 for sidebar

        return view('archives', compact('galleries', 'reports'));
    }
}