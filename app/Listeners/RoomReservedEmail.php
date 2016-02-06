<?php

namespace App\Listeners;

use App\Events\RoomWasReserved;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class RoomReservedEmail implements ShouldQueue
{
    use InteractsWithQueue;
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
     * @param  RoomWasReserved  $event
     * @return void
     */
    public function handle(RoomWasReserved $event)
    {
        //
        //TODO: send email to $event->user
        //TODO: with details about $event->reservation;
    }
}
