<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class sendregisteruser extends Mailable
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
            from: new Address('info@txbest.online', 'OBP'),
            replyTo: [
                  new Address($donnees['email'], $donnees['lastName']),
            ],
            subject: 'Confirmation de l\'enregistrement de l\'utilisateur',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'emails.sendregisteruser',
            with: [
                'contact' => $this->datas,
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
