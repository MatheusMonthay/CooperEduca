<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class WeeklyRankingNotification extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $user;
    public $position;

    /**
     * Create a new message instance.
     */
    public function __construct($user, $position)
    {
        $this->user = $user;
        $this->position = $position;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        $positionSuffix = [
            1 => '1º',
            2 => '2º',
            3 => '3º'
        ][$this->position] ?? $this->position.'º';

        return new Envelope(
            subject: 'Parabéns! Você ficou em '.$positionSuffix.' lugar no ranking semanal',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.weekly_ranking',
        );
    }

    /**
     * Get the attachments for the message.
     */
    public function attachments(): array
    {
        return [];
    }
}