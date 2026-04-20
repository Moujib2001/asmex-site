<?php
// app/Mail/InscriptionNotification.php

namespace App\Mail;

use App\Models\Inscription;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class InscriptionNotification extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public Inscription $inscription) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: '🔔 Nouvelle inscription – ASMEX Export Digital IA 2026',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.inscription-notification',
            with: ['inscription' => $this->inscription],
        );
    }
}
