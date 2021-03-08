<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactAutoReplyToUser extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $AppName;
    public $InfoMail;
    public $subject;
    public $fromEmail;
    public $fromName;
    public $name;
    public function __construct($data)
    {
       $this->subject = $data['subject'];
       $this->name = $data['name'];
       $this->fromEmail = config('constants.SENDER_EMAIL');
       $this->fromName = config('constants.SENDER_NAME');
       $this->InfoMail = config('constants.INFOMAIL');
       $this->AppName = env('APP_NAME');
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.contact_auto_reply_to_user')                
            ->from($this->fromEmail, $this->fromName)
            ->replyTo($this->fromEmail, $this->fromName)
            ->subject($this->subject);
    }
}
