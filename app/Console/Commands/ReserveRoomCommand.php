<?php

namespace App\Console\Commands;

use App\Events\RoomWasReserved;
use App\Repo\ReservationRepository;
use App\Repo\ReservationStore;
use App\Reservation;
use App\User;
use Illuminate\Console\Command;
use MyCompany\Accommodation\ReservationValidator;

class ReserveRoomCommand extends Command
{

    public $user;
    public $rooms;
    public $start_date;
    public $end_date;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:name';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
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
     * Execute the console command.
     *
     * @return mixed
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
