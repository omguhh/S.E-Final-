<?php namespace App\Http\Controllers;

use App\Purchase_history;
use App\Registered_Client;
use Illuminate\Routing\Controller;

class ClientController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /client
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /client/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /client
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /client/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show()
	{

		return \View::make('clientport/display');
	}

    public function display_holdings(){

            $clients  = Purchase_history::all(['client_name'])->first()
            ->select('client_name','fa_name','stock_name','quantity','time_purchased')
            ->get();

        return \View::make('clientport.holdings')->with('clients',$clients);
    }

    public function show_deets(){

        $clients  = Registered_Client   ::all(['rc_name'])->first()
            ->select('rc_name','rc_email','rc_address','rc_phone','cash_balance','fa_name_fk')
            ->where('rc_name','=', 'naiyarah hussain')
            ->get();

        return \View::make('clientport.personaldeets')->with('deets',$clients);
    }
	/**
	 * Show the form for editing the specified resource.
	 * GET /client/{id}/edit
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
	 * PUT /client/{id}
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
	 * DELETE /client/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}