<?php

namespace App\Listeners;

use App\User;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Notification;
use App\Events\UserCreated as UserCreatedEvent;
use App\Notifications\UserCreated as SendNotificationUserCreated;

class UserCreated
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
    public function handle(UserCreatedEvent $event)
    {
        Notification::send(User::whereNom('Administrateur')->first(), new SendNotificationUserCreated($event->user));
    }
}
