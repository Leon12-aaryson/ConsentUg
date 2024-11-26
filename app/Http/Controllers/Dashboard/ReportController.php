<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ReportController extends Controller
{
    public function index()
    {
        $reports = Document::orderBy('created_at', 'desc')->paginate(10);
        return view('dashboard.reports.index', compact('reports'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'document' => 'required|file|mimes:pdf,doc,docx,xls,xlsx|max:10240'
        ]);

        $file = $request->file('document');
        $path = $file->store('reports', 'public');

        Document::create([
            'title' => $request->title,
            'file_path' => $path,
            'file_type' => $file->getClientOriginalExtension(),
            'uploaded_by' => auth()->id()
        ]);

        return back()->with('success', 'Report uploaded successfully');
    }

    public function download(Document $document)
    {
        return Storage::disk('public')->download($document->file_path);
    }

    public function destroy(Document $document)
    {
        Storage::disk('public')->delete($document->file_path);
        $document->delete();
        return back()->with('success', 'Report deleted successfully');
    }
} 
