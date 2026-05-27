<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendEmail extends Controller
{
        public function showMailForm(){
        return view('mailform');
    }
    public function sendMail(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ],
        [
            'email.required' => 'Email field is required',
            'email.email' => 'Please enter a valid email address'
        ]);

        $toEmail = $request->email;

        Mail::raw('Hello Student, Your form has been submitted successfully.', function ($message) use ($toEmail) {

            $message->to($toEmail)
                    ->subject('Student Form Submission');
        });

        return back()->with('success', 'Email Sent Successfully');
    }
}