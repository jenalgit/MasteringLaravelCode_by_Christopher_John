<?php namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class RoomController extends Controller {



	/**
	 * Display a listing of the resource.
	 * GET /room
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /room/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /room
	 *
	 *  For the second task, reserving the room, we'll create a command as we'll most likely
	 	need a follow up action, which we will enable via the publisher subscriber pattern.
		The publisher subscriber pattern is used to represent publishers that send messages
		and subscribers that listen to these messages.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /room/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /room/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /room/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /room/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	/**
	 * Search for a room in an Accommodation
	 * For Json Request as
	 * Ex :
	 * {
	"start_date": "2015-07-10"
	"end_date": "2015-07-17"
	"city": "London"
	"country": "England"
	}
	 *	http://websiteurl.com/search?query={%22start_date%22:
	%222015-07-10%22,%22end_date%22:%222015-07-17%22,
	%22city%22:%22London%22,%22country%22:%22England%22}
	 *
	 */
	public function search()
	{
		json_decode(\Request::input('query'));
	}

}