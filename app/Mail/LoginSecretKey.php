<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class LoginSecretKey extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $secret_key;
    public $fromEmail;
    public $fromName;
    public function __construct($secret_key)
    {
        $this->secret_key= $secret_key;
        $this->fromEmail = config('constants.SENDER_EMAIL');
        $this->fromName = config('constants.SENDER_NAME');
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
//        return $this->view('emails.login_secret_key');
         return $this->view('emails.login_secret_key')                
            ->from($this->fromEmail, $this->fromName)
            ->subject('Login Secret Key');
    }
}
