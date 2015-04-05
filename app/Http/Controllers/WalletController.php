<?php namespace App\Http\Controllers;

use App\Http\Requests\Request;
use App\Registered_Client;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;

class WalletController extends Controller {

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

        //     $clients  = Purchase_history::all(['client_name'])->first()
        //     ->select('client_name','fa_name','stock_name','quantity','time_purchased')
        //     ->get();

        // return \View::make('clientport.holdings')->with('clients',$clients);
    }

    public function add_balance(){

        $moneys  = Registered_Client::all(['cash_balance'])->first()
            ->select('cash_balance')
            ->where('rc_name','=', 'naiyarah hussain')
            ->get();

        $inc_moneys = \Request::input('transfer_bal');
        $sum = $inc_moneys + $moneys[0]['cash_balance'];

        $new_bal = Registered_Client::where('rc_name', 'naiyarah hussain')-> update(['cash_balance'=>$sum]);
        return \View::make('clientport.wallet')->with('moneys',$moneys);

    }



    public function display_balance(){

        $moneys  = Registered_Client   ::all(['cash_balance'])->first()
            ->select('cash_balance')
            ->where('rc_name','=', 'naiyarah hussain')
            ->get();
        return \View::make('clientport.wallet')->with('moneys',$moneys);
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