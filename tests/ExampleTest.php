<?php

use App\Repo\ReservationRepository;
use App\Repo\ReservationStore;
use App\Reservation;
use App\Room;
use Debugbar;

class ExampleTest extends TestCase
{

    /**
     * A basic functional test example.
     *
     * @return void
     */
    /*
    public function testBasicExample()
    {
        $this->visit('/')
             ->see('Laravel 5');
    }

    */

    public function testReservationRoomExample()
    {
        $reservationRepo = new ReservationRepository(
            new ReservationStore()
        );


        $start_date = '2015-10-01';
        $end_date = '2015-10-10';
        $user_id = App\User::first()->id;
        $rooms = Room::take(2)->lists('id')->toArray();

        $reservation = $reservationRepo->create([
            'date_start'         => $start_date,
            'date_end'           => $end_date,
            'rooms'              => $rooms,
            'reservation_number' => '0001',
            'user_id'            => $user_id
        ]);

        $this->assertInstanceOf('App\Reservation', $reservation);
        $this->assertEquals('2015-10-01',
            $reservation->date_start);
        $this->assertEquals(2, count($reservation->rooms));
    }
}
