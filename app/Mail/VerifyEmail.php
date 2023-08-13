<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VerifyEmail extends Mailable
{
    use Queueable, SerializesModels;

    protected $user;
    protected $verificationUrl;

    public function __construct($notifiable, $verificationUrl)
    {
        $this->notifiable = $notifiable;
        $this->verificationUrl = $verificationUrl;
    }

    public function build()
    {
        return $this->from('sender@example.com', 'Имя отправителя')
            ->subject('Подтверждение адреса электронной почты')
            ->view('emails.verify-email', [
                'user' => $this->user,
                'verificationUrl' => $this->verificationUrl,
            ]);
    }
}



