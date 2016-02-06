<?php

namespace App\Events;

use App\Reservation;
use App\User;
use Illuminate\Queue\SerializesModels;

class RoomWasReserved extends Event
{

    use SerializesModels;


    private $user;
    private $reservation;

    /**
     * RoomWasReserved constructor.
     * @param User $user
     * @param Reservation $reservation
     */
    public function __construct(User $user, Reservation $reservation)
    {
        $this->user = $user;
        $this->reservation = $reservation;
    }


}
