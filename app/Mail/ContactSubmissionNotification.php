<?php

namespace App\Mail;

use App\Models\Email;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactSubmissionNotification extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public Email $email)
    {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Contact Form Submission',
            replyTo: [
                new \Illuminate\Mail\Mailables\Address($this->email->email, $this->email->full_name),
            ],
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.contact-submission-notification',
        );
    }
}
