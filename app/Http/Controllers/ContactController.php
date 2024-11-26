<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use App\Mail\ContactMessageMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use Exception;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string'
        ]);

        try {
            // Save to database
            $message = ContactMessage::create($validated);

            // Send email with sender's email as the from address
            Mail::send(new ContactMessageMail($validated));

            return redirect()->back()->with('success', 'Thank you for your message. We will get back to you soon!');
        } catch (Exception $e) {
            // Log the error
            Log::error('Contact form error: ' . $e->getMessage());

            return redirect()->back()
                ->with('error', 'Sorry, there was a problem sending your message. Please try again later.')
                ->withInput();
        }
    }
}
