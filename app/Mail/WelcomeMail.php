<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class WelcomeMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct(private string $title, private string $body, private string $date, private string $no_off_nights,  private string $no_off_adults,private string  $no_off_kids,private string $interested_in,private string $name, private string $email,private string  $phone_number,private string $description)
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
                                'date'=>$this->date,
                                'no_off_nights'=>$this->no_off_nights,
                                'no_off_adults'=>$this->no_off_adults,
                                'no_off_kids'=>$this->no_off_kids,
                                'interested_in'=>$this->interested_in,
                                'name'=>$this->name,
                                'email'=>$this->email,
                                'phone_number'=>$this->phone_number,
                                'description'=>$this->description
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