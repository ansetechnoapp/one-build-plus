<?php

namespace App\Mail\contact;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class emailcontact extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct(public array $datas)
    {
        $this->datas = $datas;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        $donnees = $this->datas;
        return new Envelope(
            from: new Address($donnees['email'], ''),
            replyTo: [
                  new Address($donnees['email'], ''),
            ],
            subject: 'Formulaire contacte',
        );
    }

    /**
     * Get the message content definition.  
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'emails.contact',
            with: [
                'datas' => $this->datas,
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
