<?php namespace App\Http\Controllers;

use App\Jobs\PlaceOnWaitingList;
use App\Jobs\ReserveRoomJob;
use App\Repo\ReservationRepository;
use App\Repo\ReservationStore;
use App\Reservation;
use App\User;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller;
use MyCompany\Accommodation\ReservationValidator;

class ReservationController extends Controller
{


    use DispatchesJobs;
    /**
     * Display a listing of the resource.
     * GET /reservation
     *
     * @return Response
     */
    public function index()
    {
        //
        return Reservation::all();
    }

    /**
     * Show the form for creating a new resource.
     * GET /reservation/create
     *
     * @return Response
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     * POST /reservation
     *
     * @return Response
     */
    public function store()
    {
        //
        $reservationRepository = new ReservationRepository(new ReservationStore());
        $reservationValidator = new ReservationValidator();

        if ($reservationValidator->validate(\Input::get('start_date'),
            \Input::get('end_date'), \Input::get('rooms'))
        ) {
            $reservationRepository->create(
                [
                    'date_start' => \Input::get('start_date'),
                    'date_end'   => \Input::get('end_date'),
                    'rooms'      => \Input::get('rooms'),
                    'user_id'    => \Input::get('user_id')
                ]);


        }
        $user = User::find(\Input::get('user_id'));
        $start_date = \Input::get('start_date');
        $end_date = \Input::get('end_date');
        $rooms = \Input::get('rooms');

        $roomAvailable  =1 ;

        if ($roomAvailable) {

            $this->dispatch(
                new ReserveRoomJob($user, $start_date,
                    $end_date, $rooms)
            );
        } else {

            $this->dispatch(
                new PlaceOnWaitingList($user, $start_date,
                    $end_date, $rooms)
            );
        }
    }

    /**
     * Display the specified resource.
     * GET /reservation/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * GET /reservation/{id}/edit
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * PUT /reservation/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * DELETE /reservation/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}