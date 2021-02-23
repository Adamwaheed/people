<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewEmployeeUserCredential extends Mailable
{
    use Queueable, SerializesModels;

    private $user;
    private $password;

    /**
     * Create a new message instance.
     *
     * @param $user
     * @param $password
     */
    public function __construct($user,$password)
    {
        $this->user = $user;
        $this->password = $password;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->
          $this->from('adam@live.mv')
             ->subject('dear '.$this->employee->name .'New User Created ')
             ->markdown('emails.users.new-user-credential');
    }
}
