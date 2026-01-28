<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $body;
    public $description;

    public function __construct($body, $description)
    {
        $this->body = $body;
        $this->description = $description;
    }

    public function build()
    {
        // return $this->subject('New Contact Form Submission')
        //     ->view('emails.contact')
        //     ->with('data', $this->data);

             
        return $this->view('emails.contact')
        ->subject($this->description)->with([
            'body' => $this->body,
        ]);
    }
}
