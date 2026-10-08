<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'your-name'    => 'required|string|max:400',
            'your-email'   => 'required|email|max:400',
            'your-phone'   => 'nullable|string|max:50',
            'your-subject' => 'nullable|string|max:400',
            'your-message' => 'nullable|string|max:2000',
        ], [
            'your-name.required'  => 'The name field is required.',
            'your-email.required' => 'The email address is required.',
            'your-email.email'    => 'Please enter a valid email address.',
        ]);

        $data = [
            'name'    => $validated['your-name'],
            'email'   => $validated['your-email'],
            'phone'   => $validated['your-phone'] ?? null,
            'subject' => $validated['your-subject'] ?? null,
            'message' => $validated['your-message'] ?? '',
        ];

        try {
            Mail::to(env('QUOTE_NOTIFY_EMAIL', 'hannstars79@gmail.com'))->send(new ContactMail($data));
        } catch (\Throwable $e) {
            Log::error('Failed to send contact email: ' . $e->getMessage());

            return back()
                ->withInput()
                ->with('error', 'Sorry, your message could not be sent. Please try again.');
        }

        return back()->with('success', 'Thank you! Your message has been sent successfully.');
    }
}
