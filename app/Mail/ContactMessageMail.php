<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMessageMail extends Mailable
{
    use Queueable, SerializesModels;

    public $messageData;

    public function __construct($messageData)
    {
        $this->messageData = $messageData;
    }

    public function build()
    {
        return $this->from(config('mail.from.address'), config('mail.from.name'))
                    ->replyTo($this->messageData['email'], $this->messageData['name'])
                    ->to('web@consentug.org')
                    ->subject('New Contact Form Message from ' . $this->messageData['name'])
                    ->view('emails.contact-message');
    }
}
