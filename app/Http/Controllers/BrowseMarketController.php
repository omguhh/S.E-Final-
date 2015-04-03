<?php namespace App\Http\Controllers;

use App\Purchase_history;
use Illuminate\Support\Facades\View;

class BrowseMarketController extends Controller
{

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
        curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
        $json = curl_exec($session);
        $phpObj = json_decode($json);
        $i = 0;
        $someArray = [];

        if (!is_null($phpObj->query->results)) {
            foreach ($phpObj->query->results as $quotes) {
                while ($i < count($quotes)) {
                    array_push($someArray, [
                        'Symbol' => $quotes[$i]->Symbol,
                        'Change' => $quotes[$i]->Change,
                        'Open' => $quotes[$i]->Open,
                        'DaysHigh' => $quotes[$i]->DaysHigh,
                        'DaysLow' => $quotes[$i]->DaysLow,
//						'Change' => $quotes[$i]->Change,
                        'LastTradePriceOnly' => $quotes[$i]->LastTradePriceOnly

                    ]);
                    $i++;

                }

            }

        }

        //return View('browsemarket')->with('test', $someArray);
        return view('browsemarket/display')->with('test', $someArray);
        //return View::make('index');

    }

    public function getwiki($stkname){
//               var wiki="/w/api.php?action=query&prop=extracts&format=json&exchars=186&exintro=&explaintext=&exsectionformat=plain&titles="+stkname+"&redirects=&converttitles=";

}

    public function search_stock()
    {
        $data = \Request::input('stockname');

        $yql_base_url = "http://query.yahooapis.com/v1/public/yql";
        $yql_query = "select * from yahoo.finance.quotes  where symbol in". "('" .$data . "')";
        $yql_query_url = $yql_base_url . "?q=" . urlencode($yql_query) . "&env=store://datatables.org/alltableswithkeys";
        $yql_query_url .= "&format=json";

        $session = curl_init($yql_query_url);
        curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
        $json = curl_exec($session);
        $phpObj = json_decode($json);
        $i = 0;
        $someArray = [];

        if (!is_null($phpObj->query->results)) {
            foreach ($phpObj->query->results as $quote) {
                while ($i < count($quote)) {
                    array_push($someArray, [
                        'Symbol' => $quote->symbol,
                        'Name' => $quote->Name,
                        'Change' => $quote->Change,

                        'DaysLow' => $quote->DaysLow,
                        'DaysHigh' => $quote->DaysHigh,

                        'Ask' => $quote->Ask,
                        'Bid' => $quote->Bid,
                        'AverageDailyVolume ' => $quote->AverageDailyVolume ,
                        'Open' => $quote->Open,
                        'PreviousClose' => $quote->PreviousClose,

                        'OneyrTargetPrice' => $quote->OneyrTargetPrice,
                        'EarningsShare' => $quote->EarningsShare,
                        'DaysRange' => $quote->DaysRange,
                        'FiftydayMovingAverage' => $quote->FiftydayMovingAverage,

                        'AverageDailyVolume' => $quote->AverageDailyVolume,
                        'MarketCapitalization' => $quote->MarketCapitalization,

                        'LastTradeWithTime' => $quote->LastTradeWithTime,
                        'LastTradePriceOnly' => $quote->LastTradePriceOnly,
                        'Volume' => $quote->Volume,
                        'StockExchange' => $quote->StockExchange

                    ]);
                    $i++;

                }

            }

        }

        return \View::make('browsemarket/search')->with('test', $someArray);
    }

    public function stock_buy()
    {
    //insert into the stock database lke this
        $rc_user= new stocks;
        $rc_user->stock_id= 69;
        $rc_user->stock_name= "msft";
        $rc_user->stock_price= 420;
        $rc_user->no_of_stocks= 2;
        $rc_user->fa_id= 111;


        $rc_user->save();

        //insert into the purchase history database lke this
        $rc_user= new purchase_history;
        $rc_user->client_name= "clientdude";
        $rc_user->fa_name= "sonia santa";
        $rc_user->stock_name= "msft";
        $rc_user->date_brought= 2015-02-27;
        $rc_user->save();
        $rc_money=new Registered_Client;
        $rc_money->cash_balance;
        return view('buysell/buy_stock');


    }


}