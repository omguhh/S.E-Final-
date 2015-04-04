<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Purchase_history;
use Illuminate\Http\Request;

class purchasehistorycontroller extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('PH');
	}

//$purch = Purchase_history::all(['client_name','fa_name','stock_name','date_brought']);
//return \View::make('PurchaseHistory')->with('purch', $purch);


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function purchase_history()
	{
		///  SELECT rc_name FROM registered_client,financial_advisor WHERE registered_client.fa_name_fk = financial_advisor.fa_name GROUP BY rc_name

		$clients  = Purchase_history::all(['fa_name'])->first()
			->select('client_name','fa_name','stock_name','date_brought')
			->get();

		 return \View::make('PurchaseHistory')->with('purch',$clients);
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
