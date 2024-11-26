<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;

class SettingsController extends Controller
{
    public function index()
    {
        $documents = Document::where('uploaded_by', auth()->id())
                            ->orderBy('created_at', 'desc')
                            ->get();
        return view('dashboard.settings', compact('documents'));
    }
}
