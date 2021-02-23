<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewEmployeeNotification extends Mailable
{
    use Queueable, SerializesModels;
    public $employee;
    /**
     * Create a new message instance.
     *
     * @param $employee
     */
    public function __construct($employee)
    {
        $this->employee = $employee;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('adam@live.mv')
            ->to($this->employee->email)
            ->subject('dear '.$this->employee->name .' Welcome to the HR System')
            ->markdown('emails.employees.new-employees-notification');
    }
}
