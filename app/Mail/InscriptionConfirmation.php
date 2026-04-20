<?php
// app/Mail/InscriptionConfirmation.php

namespace App\Mail;

use App\Models\Inscription;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class InscriptionConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public Inscription $inscription) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Confirmation de votre inscription – ASMEX Export Digital IA 2026',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.inscription-confirmation',
            with: ['inscription' => $this->inscription],
        );
    }
}
