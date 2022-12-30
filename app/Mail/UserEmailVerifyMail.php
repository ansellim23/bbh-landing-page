<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserEmailVerifyMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $name;
    protected $email;
    protected $email_token;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name,$email,$email_token)
    {
        $this->name = $name;
        $this->email = $email;
        $this->email_token = $email_token;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(env('mail_address'))->subject('Email Verify')->view('mail.email_verify')->with([
            'name' => $this->name,
            'email' => $this->email,
            'email_token' => $this->email_token
        ]);
    }
}
