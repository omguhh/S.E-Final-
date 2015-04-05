<?php namespace App\Http\Controllers;

use App\Purchase_history;
use App\Registered_Client;
use App\Stocks;
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


    public function show_stock_buy($price,$name){
        $buystockinfo=[];
        array_push($buystockinfo,[
                "price"=>$price,
                "name"=>$name      ]);
        return \View::make('browsemarket/buy_stock')->with('test',$buystockinfo);
    }
    public function stock_buy()
    {
        $quantity = \Request::input('quantity');
        $price = \Request::input('price');
        $name = \Request::input('name');

        $final_price=$quantity * $price;
        $rc_user= new purchase_history();

        $checker  = purchase_history::all(['client_name'])->first()
            ->select('client_name','fa_name','stock_name','time_purchased','quantity')
            ->where('client_name','=', 'naiyarah hussain')
            ->where('stock_name','=',$name)
            ->get();

            $killmeplz= $checker->toArray();

            $yourbalance  = Registered_Client::all(['rc_name'])->first()
            ->select('cash_balance')
            ->where('rc_name','=', 'naiyarah hussain')
            ->get();

       // echo $name;
       // echo $checker;
        $checker = array_filter($killmeplz);
        if($yourbalance[0]['cash_balance'] < $final_price){
            return view('clientport.holdings');
    }

        if(!empty($checker)){

          \DB::update("update purchase_history set quantity = quantity+ $quantity  where client_name = 'naiyarah hussain' AND stock_name='$name'");
          \DB::update("update registered_client set cash_balance = cash_balance - $final_price  where rc_name = 'naiyarah hussain'"); //dis works
            return view('clientport.holdings');
      }
else {
    $rc_user->client_name = "naiyarah hussain";
    $rc_user->fa_name = "sonia santa";
    $rc_user->stock_name = $name;
    $rc_user->time_purchased = "2015-02-27 20:53:99";
    $rc_user->quantity = $quantity;
    $rc_user->save();

    \DB::update("update registered_client set cash_balance = cash_balance - $final_price  where rc_name = 'naiyarah hussain'");
    return view('clientport.holdings');


}

    }

    public function show_stock_sell($symb){

        $sellstockinfo=[];

        echo $symb;
        $yql_base_url = "http://query.yahooapis.com/v1/public/yql";
        $yql_query = "select * from yahoo.finance.quotes  where symbol in". "('" .$symb . "')";
        $yql_query_url = $yql_base_url . "?q=" . urlencode($yql_query) . "&env=store://datatables.org/alltableswithkeys";
        $yql_query_url .= "&format=json";

        $session = curl_init($yql_query_url);
        curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
        $json = curl_exec($session);
        $phpObj = json_decode($json);
        $i = 0;
        $sellstockinfo=[];

        if (!is_null($phpObj->query->results)) {
            foreach ($phpObj->query->results as $quote) {
                while ($i < count($quote)) {
                    array_push($sellstockinfo, [
                        'Ask' => $quote->Ask,
                        'Name'=>$quote->Name,
                        'name'=>$symb]);
                    $i++;

                }

            }

        }

        return \View::make('browsemarket/sell_stock')->with('test',$sellstockinfo);


    }
    public function stock_sell()
    {
        $quantity = \Request::input('quantity');
        $price = \Request::input('price');
        $name = \Request::input('name');

        $final_price=$quantity * $price;
        $rc_user= new purchase_history();

        $checker  = purchase_history::all(['client_name'])->first()
            ->select('client_name','fa_name','stock_name','time_purchased','quantity')
            ->where('client_name','=', 'naiyarah hussain')
            ->where('stock_name','=', $name)
            ->get();

        $yourbalance  = Registered_Client::all(['rc_name'])->first()
            ->select('cash_balance')
            ->where('rc_name','=', 'naiyarah hussain')
            ->get();

   // echo $checker;
        if($checker[0]['quantity']>1){

            \DB::update("update purchase_history set quantity = quantity- $quantity  where client_name = 'naiyarah hussain' AND stock_name='$name'");
            \DB::update("update registered_client set cash_balance = cash_balance + $final_price  where rc_name = 'naiyarah hussain'"); //dis works
            return view('clientport/display');
        }

        elseif($checker[0]['quantity']=1){

            purchase_history::all()->first()->where('client_name','=','naiyarah hussain')->where('stock_name','=','$name')->delete();
            \DB::update("update registered_client set cash_balance = cash_balance + $final_price  where rc_name = 'naiyarah hussain'");
            return view('clientport/display');
        }

        elseif($yourbalance[0]['cash_balance'] < $final_price){
            return view('clientport/display');
        }

    }



}