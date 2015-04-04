<?php namespace App\Http\Controllers;

use App\Admin;
use App\Fa;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Meeting;
use App\User;
use Illuminate\Http\Request;

class MeetingController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

		$fas = Fa::all();
		return \View::make('index')->with('fas',$fas);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function add()
	{
		$meetings = Meeting::all()->first()->get();
		$meeting = Meeting::updateOrCreate(['fa_id' => 'bb8','c_id' => 'nh114','date' => '2015-02-12','time' => '14:00:00','notes' => 'BUY GUTER STOCKS!!!!BITCHES!!!',]);
		return \View::make('index')->with('meetings',$meetings);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function edit()
	{
		$meetings = Meeting::all();
		$meetingsdel = Meeting::where('meeting_no',21)->delete();
		$meeting = Meeting::updateOrCreate(['fa_id' => 'bb8','c_id' => 'nh114','date' => '2015-02-12','time' => '14:00:00','notes' => 'EDITED MEETING',]);
		return \View::make('index')->with('meetings',$meetings);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function delete()
	{
		$meetings = Meeting::all();
		$meetingsdel = Meeting::where('meeting_no',20)->delete();
		return \View::make('index')->with('meetings',$meetings);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */

	/**
	 * Update the specified resource in storage.
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
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
