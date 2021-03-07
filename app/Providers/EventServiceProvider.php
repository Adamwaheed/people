<?php

namespace App\Providers;

use App\Events\EmployeeCreated;
use App\Listeners\CreateEmployeeUser;
use App\Listeners\SendEmailToEmployee;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

use App\Events\NewUserCreated;
use App\Listeners\CreateProfileToNewUser;
use App\Listeners\SendEmailToallStaff;
use App\Listeners\SendSmsToNewUser;


class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        EmployeeCreated::class => [
            SendEmailToEmployee::class,
            CreateEmployeeUser::class,
        ],
        NewUserCreated::class => [
            CreateProfileToNewUser::class,
            SendEmailToallStaff::class,
            SendEmailToallStaff::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
