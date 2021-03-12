<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactAdminToUser extends Mailable
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
    public $name;
    public $reply;
    public $fromEmail;
    public $fromName;
    public $replyEmail;
    public $replyName;
    public function __construct($data)
    {
        $this->name = $data['name'];
        $this->subject = $data['subject'];
        $this->reply = $data['reply'];
        $this->fromEmail = config('constants.SENDER_EMAIL');
        $this->fromName = config('constants.SENDER_NAME');
        $this->replyEmail = config('constants.ADMIN_EMAIL');
        $this->replyName = config('constants.ADMIN_NAME');
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
        return $this->view('emails.contact_admin_to_user')                
            ->from($this->fromEmail, $this->fromName)
            ->replyTo($this->replyEmail, $this->replyName)
            ->subject($this->subject);
    }
}
