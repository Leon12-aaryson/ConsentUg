<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'document' => 'required|file|mimes:pdf,doc,docx,xls,xlsx|max:10240'
        ]);

        $file = $request->file('document');
        $path = $file->store('documents', 'public');

        Document::create([
            'title' => $request->title,
            'file_path' => $path,
            'file_type' => $file->getClientOriginalExtension(),
            'uploaded_by' => auth()->id()
        ]);

        return back()->with('success', 'Document uploaded successfully');
    }

    public function download(Document $document)
    {
        return Storage::disk('public')->download($document->file_path);
    }

    public function destroy(Document $document)
    {
        Storage::disk('public')->delete($document->file_path);
        $document->delete();

        return back()->with('success', 'Document deleted successfully');
    }
}
