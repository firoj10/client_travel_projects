<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct(private string $title, private string $body, private string $frist_name,  private string $last_name,private string  $phone_number,private string $message, private string $email)
    {
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Welcome to laracoding.com EmailDemo',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {

        
    
        return new Content(
            view: 'emails.welcome',
            with: [
                'title' => $this->title,
                'body' => $this->body,
                'frist_name'=>$this->frist_name,
                'last_name'=>$this->last_name,
                'email'=>$this->email,
                'phone_number'=>$this->phone_number,
                'message'=>$this->message,
               
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}