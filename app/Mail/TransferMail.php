<?php

namespace App\Mail;

use App\Models\Event;
use App\Models\Transfer;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Queue\SerializesModels;
use Nette\Utils\ArrayList;

class TransferMail extends Mailable
{
    use Queueable, SerializesModels;

    public $content;
    public Transfer $transfer;
    public Event  $eventWithCtr;

    /**
     * Create a new message instance.
     */
    public function __construct(Transfer $transfer, Event $eventWithCtr, $content)
    {
        $this->transfer = $transfer;
        $this->eventWithCtr = $eventWithCtr;
        $this->content = $content;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Nachricht von Dhammareise',
            replyTo: $this->content['replyMail']
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'email.transfer-mail',
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
