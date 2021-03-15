<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactUserToAdmin extends Mailable
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
    public $region;
    public $contact_number;
    public $email;
    public $purpose;
    public $comments;
    public function __construct($data)
    {
        $this->name= $data['name'];
        $this->region = $data['region'];
        $this->contact_number=$data['contact_number'];
        $this->email=$data['email'];
        $this->purpose=$data['purpose'];
        $this->comments=$data['comments'];
        $this->subject = $data['subject'];
       
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
        
        return $this->view('emails.contact_user_to_admin')                
            ->from($this->fromEmail, $this->fromName)
            ->replyTo($this->fromEmail, $this->fromName)
//            ->cc('rushabh@wdipl.com','Rushabh Parekh')
            ->subject($this->subject);
    }
}
