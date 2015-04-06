<?php namespace App\Http\Controllers;

use App\Admin;
use App\FinancialAdvisor;
use App\Registered_Client;
use Illuminate\Support\Facades\View;
class CheckerController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | Welcome Controller
    |--------------------------------------------------------------------------
    |
    | This controller renders the "marketing page" for the application and
    | is configured to only allow guests. Like most of the other sample
    | controllers, you are free to modify or remove it as you desire.
    |
    */

    /**
     * Create a new controller instance.
     *
     * @return void
     */


    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show the application welcome screen to the user.
     *
     * @return Response
     */

    public function checker()
    {

        $quantity = \Request::input('username');

        if ($quantity == 'admin') {
            return redirect()->route('admin_dashboard');
        }

        if ($quantity == 'naiyarah hussain') {
            return redirect()->route('clientport/display/');
        }

        if ($quantity == 'ayesha sheriff') {
            return redirect()->route('/FADashboard');
        }

        return redirect()->route('home');

    }
}
