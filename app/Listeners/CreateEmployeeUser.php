<?php

namespace App\Listeners;

use App\Mail\NewEmployeeNotification;
use App\Mail\NewEmployeeUserCredential;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class CreateEmployeeUser implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $generatePassword = rand(11111,99999);

        $user = new User();
        $user->name = $event->employee->name;
        $user->email = $event->employee->email;
        $user->password = Hash::make($generatePassword);
        if($user->save()){
            Mail::to($user)->send(new NewEmployeeUserCredential($user,$generatePassword));
        }
    }
}
