<?php namespace App\Http\Controllers;

use App\Accommodation;
use Illuminate\Routing\Controller;

class AccommodationController extends Controller
{

    /**
     * Display a listing of the resource.
     * GET /accommodation
     *
     * @return Response
     */
    public function index()
    {
        //
        return Accommodation::paginate();
    }

    /**
     * Show the form for creating a new resource.
     * GET /accommodation/create
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * POST /accommodation
     *
     * @return Response
     */
    public function store()
    {
        //
        $input = \Input::json();
        $accommodation = new Accommodation;
        $accommodation->name = $input->get('name');
        $accommodation->description = $input->get('description');
        $accommodation->location_id = $input->get('location_id');
        $accommodation->save();

        return response($accommodation, 201);
    }

    /**
     * Display the specified resource.
     * GET /accommodation/{id}
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
     * GET /accommodation/{id}/edit
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage
     * PUT /accommodation/{id}
     * @Get("/search-accommodation")
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        //

        $input = \Input::json();
        $accommodation =
            Accommodation::findOrFail($id);
        $accommodation->name = $input->get('name');
        $accommodation->description = $input->get('description');
        $accommodation->location_id = $input->get('location_id');
        $accommodation->save();
        return response($accommodation, 200)
            ->header('Content-Type', 'application/json');
    }

    /**
     * Remove the specified resource from storage.
     * DELETE /accommodation/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}