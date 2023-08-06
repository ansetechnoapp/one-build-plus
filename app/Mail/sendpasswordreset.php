<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class sendpasswordreset extends Mailable
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
       // dd($donnees['name']);
        return new Envelope(
            from: new Address($donnees['email'], ''),
            replyTo: [
                  new Address($donnees['email'], ''),
            ],
            subject: 'modification mot de passe',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'emails.sendpasswordreset',
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
