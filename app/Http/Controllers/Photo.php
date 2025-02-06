<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeri;
use Illuminate\Support\Facades\Mail;



class Photo extends Controller
{
    public function index()
    {
        $allGaleri = Galeri::all();
    
        return view('contact', compact('allGaleri'));
 
    }

   

    public function sendEmail(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'user_message' => $request->message, // Ganti nama variabel menjadi user_message
        ];

        Mail::send('emails.contact', $data, function ($message) use ($data) {
            $message->to('pedromhutagaol@gmail.com')
                ->subject('New Contact Form Enquiry')
                ->replyTo($data['email']);
        });

        return back()->with('success', 'Your message has been sent successfully!');
    }
}