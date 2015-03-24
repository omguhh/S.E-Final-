<?php namespace App\Http\Controllers;

use App\Stocks;
use Illuminate\Routing\Controller;

class CalendarController extends Controller {


    public function calendar()
    {
        return view('calendar');
    }

}
