<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendEmail(Request $request)
    {
        try {
            $request->validate([
                'fname' => 'required|string|max:255',
                'coursename' => 'required',
                'message' => 'required',
                'phone_number' => 'required'
            ]);

            $data = $request->only('fname', 'email', 'coursename', 'message', 'phone_number');

            // Mail::to('anjalitiwari67269@gmail.com')->send(new ContactMail($data)); 
            $registerEmailView = view('emails.inquiry', [
                'name'          => $request->fname,
                'coursename'    => $request->coursename,
                'phone_number'  => $request->phone_number,
                'email'         => $request->email,
                'state'         => $request->state,
                'message'       => $request->message
            ])->render();

            $mail = Mail::to($request->email)->send(new ContactMail($registerEmailView, 'Welcome Successful'));

            return back()->with('success', 'Email sent successfully!');
        } catch (Exception $e) {
            Log::error($e->getMessage());
        }
    }

    public function askQuestions(Request $request)
    {
        try {
            $request->validate([
                'fname'   => 'required|string|max:255',
                'lname'   => 'required|string|max:255',
                'message' => 'required',
                'subject' => 'required'
            ]);

            $data = $request->only('fname', 'lname','email','message', 'subject');

            // Mail::to('anjalitiwari67269@gmail.com')->send(new ContactMail($data)); 
            $registerEmailView = view('emails.questions', [
                'name'          => $request->fname,
                'lname'         => $request->lname,
                'phone_number'  => $request->subject,
                'email'         => $request->email,
                'message'       => $request->message
            ])->render();

            $mail = Mail::to('anjalitiwari67269@gmail.com')->send(new ContactMail($registerEmailView, 'Question'));

            return back()->with('success', 'Email sent successfully!');
        } catch (Exception $e) {
            Log::error($e->getMessage());
        }
    }

    public function newsletterRequest(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required'
            ]);

            $data = $request->only('name','email');

            // Mail::to('anjalitiwari67269@gmail.com')->send(new ContactMail($data)); 
            $registerEmailView = view('emails.newsletter', [
                'name'          => $request->name,
                'email'         => $request->email,
            ])->render();

            $mail = Mail::to('anjalitiwari67269@gmail.com')->send(new ContactMail($registerEmailView, 'NewsLetter Request'));

            return back()->with('status','success')->with('message', 'Newsletter request sent successfully!');
        } catch (Exception $e) {
            Log::error($e->getMessage());
        }
    }
}
