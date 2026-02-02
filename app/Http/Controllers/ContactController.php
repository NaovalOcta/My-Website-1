<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Show the contact page
     */
    public function index()
    {
        return view('contact');
    }

    /**
     * Handle contact form submission
     */
    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|min:10',
        ]);

        // Get form data
        $data = $request->only(['name', 'email', 'subject', 'message']);

        // Send email using Laravel Mail
        try {
            Mail::send('emails.contact', $data, function ($message) use ($data) {
                $message->to(config('mail.from.address', 'contact@naoval.dev'))
                    ->subject('New Contact: ' . $data['subject'])
                    ->replyTo($data['email'], $data['name']);
            });

            return back()->with('success', 'Pesan Anda berhasil dikirim! Saya akan segera membalas.');
        } catch (\Exception $e) {
            return back()->with('error', 'Maaf, terjadi kesalahan saat mengirim pesan. Silakan coba lagi atau hubungi melalui email langsung.');
        }
    }
}
