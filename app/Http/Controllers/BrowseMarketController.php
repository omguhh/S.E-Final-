<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;

class BrowseMarketController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| BrowseMarket Controller
	|--------------------------------------------------------------------------
	|
	| This is supposed to connect to the YahooAPI and also retrieve data relevant to
	| the page. All returned data will be displayed on a graph using highstock javascript.
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */



//	public function __construct()
//	{
//		$this->middleware('auth');
//	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function display_data()
	{

		$yql_base_url = "http://query.yahooapis.com/v1/public/yql";
		$yql_query = "select * from yahoo.finance.quoteslist where symbol in ('^GSPC','^NYA','^IXIC')";
		$yql_query_url = $yql_base_url . "?q=" . urlencode($yql_query) . "&env=store://datatables.org/alltableswithkeys";
		$yql_query_url .= "&format=json";

		$session = curl_init($yql_query_url);
		curl_setopt($session, CURLOPT_RETURNTRANSFER,true);
		$json = curl_exec($session);
		$phpObj =  json_decode($json);
		$i=0;
		$someArray = [];

		if(!is_null($phpObj->query->results)) {
			foreach ($phpObj->query->results as $quotes) {

				while($i<count($quotes)){
					array_push($someArray,[
						'Symbol' => $quotes[$i]->Symbol,
						'Change' => $quotes[$i]->Change,
						'Open' => $quotes[$i]->Open,
						'DaysHigh' => $quotes[$i]->DaysHigh,
						'DaysLow' => $quotes[$i]->DaysLow,
//						'Change' => $quotes[$i]->Change,
						'LastTradePriceOnly' =>$quotes[$i]->LastTradePriceOnly

					]);
					$i++;

				}

			}

		}

		//return View('browsemarket')->with('test', $someArray);
        return view('browsemarket')->with('test',$someArray);
        //return View::make('index');

	}


}
