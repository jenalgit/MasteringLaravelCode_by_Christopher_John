<?php

namespace App\Jobs;

use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\Events\RoomWasReserved;
use App\Repo\ReservationRepository;
use App\Repo\ReservationStore;
use App\Reservation;
use App\User;
use MyCompany\Accommodation\ReservationValidator;

class ReserveRoomJob extends Job implements ShouldQueue, SelfHandling
{
    use InteractsWithQueue, SerializesModels;

    public $user;
    public $rooms;
    public $start_date;
    public $end_date;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(User $user, $start_date, $end_date, $rooms)
    {
        $this->rooms = $rooms;
        $this->user = $user;
        $this->start_date = $start_date;
        $this->end_date = $end_date;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
        $reservationValidator = new ReservationValidator();
        $reservationRepository = new ReservationRepository(new ReservationStore());
        $reserveObject =new Reservation();

        if ($reservationValidator->validate($this->start_date, $this->end_date, $this->rooms)) {
            $reservation =
                $reservationRepository->create(
                    array(
                        'date_start' => $this->start_date,
                        'date_end'   => $this->end_date,
                        'rooms'      => $this->rooms,
                        'user_id'   =>  $this->user->id
                    )
                );
            $reserveObject = $reservation;
        }
        event(new RoomWasReserved($this->user, $reserveObject));
    }
}
