<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\FinancialAdvisor;
use App\Registered_Client;
use App\Calender_meeting;
use Illuminate\Http\Request;

class FAController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

		$clients  = Registered_Client::all(['rc_name'])->first()
			->select('rc_id','rc_name','rc_email','rc_address','rc_phone','cash_balance')
			->join('financial_advisor', 'registered_client.fa_name_fk', '=', 'financial_advisor.fa_name')
			->where('fa_name_fk','=', 'ayesha sheriff')
			->get();
		return \View::make('main')->with('client', $clients);

	}

	public function view_clients(){
		$client  = Registered_Client::all(['rc_name'])->first()
			->select('rc_id','rc_name','rc_email','rc_address','rc_phone','cash_balance')
			->join('financial_advisor', 'registered_client.fa_name_fk', '=', 'financial_advisor.fa_name')
			->where('fa_name_fk','=', 'ayesha sheriff')
			->get();
		return \View::make('FAClient')->with('client', $client);
	}


	public function viewCalendar(){
		//SELECT rc_name FROM registered_client,financial_advisor WHERE registered_client.fa_name_fk = financial_advisor.fa_name GROUP BY rc_name

		//SELECT financial_advisor.fa_name, registered_client.rc_id , meeting_title , meeting_date , meeting_content
		// FROM registered_client,financial_advisor,calender_meeting
		// WHERE registered_client.fa_name_fk = financial_advisor.fa_name

//
//		$clients  = Registered_Client::all(['rc_name'])->first()
//			->select('rc_id','rc_name')
//			->join('financial_advisor', 'registered_client.fa_name_fk', '=', 'financial_advisor.fa_name')
//			->where('fa_name_fk','=', $id)
//			->get();


		$clients = Registered_Client::all()->first()
			->select('registered_client.rc_id','rc_name','financial_advisor.fa_name','meeting_title','meeting_date','meeting_content')
			->join('financial_advisor','registered_client.fa_name_fk','=','financial_advisor.fa_name')
			->join('calender_meeting','financial_advisor.fa_name' ,'=' ,'calender_meeting.fa_name')
			->where('fa_name_fk','=','ayesha sheriff')
			->get();

		return \View::make('main')->with('clients',$clients);

//            $clients  = Registered_Client::all(['registered_client.rc_id'])->first();
//						FinancialAdvisor::all(['financial_advisor.fa_name'])->first();
//						Calender_meeting::all(['meeting_title'])->first();
//						Calender_meeting::all(['meeting_date'])->first();
//						Calender_meeting::all(['meeting_content'])->first()
//				->select('rc_id','rc_name')
//				->join('financial_advisor,registered_client', 'registered_client.fa_name_fk', '=', 'financial_advisor.fa_name')
//				->where('fa_name_fk','=', $id)
//				->get();


	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
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
