<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ComplaintController extends Controller
{
    public function index()
    {
        $complaints = ContactMessage::orderBy('created_at', 'desc')->paginate(10);
        return view('dashboard.complaints.index', compact('complaints'));
    }

    public function show(ContactMessage $complaint)
    {
        return view('dashboard.complaints.show', compact('complaint'));
    }

    public function destroy(ContactMessage $complaint)
    {
        $complaint->delete();
        return redirect()->route('dashboard.complaints.index')->with('success', 'Complaint deleted successfully');
    }
}
