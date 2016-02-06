<?php


namespace App\Repo;

class ReservationRepository implements RepositoryInterface
{

    private $reservation;

    function __construct($reservation)
    {
        $this->reservation = $reservation;
    }

    public function create($attributes)
    {
        $reservationObject = $this->reservation->create($attributes);

        return $reservationObject;
    }
}