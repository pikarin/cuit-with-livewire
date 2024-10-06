<?php

namespace App\Listeners;

use App\Events\CuitCreated;
use App\Models\User;
use App\Notifications\NewCuit;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendCuitCreatedNotifications implements ShouldQueue
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(CuitCreated $event): void
    {
        foreach (User::whereNot('id', $event->cuit->user_id)->cursor() as $user) {
            $user->notify(new NewCuit($event->cuit));
        }
    }
}
