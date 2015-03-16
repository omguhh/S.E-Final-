<?php namespace App\Http\Controllers;

use App\Admin;
use App\FinancialAdvisor;

class AdminController extends Controller
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
    public function index()
    {

        $admin = FinancialAdvisor::all()->toJson();
//      $admin = FinancialAdvisor::find('fa_name','hakim moti');
        // $admin = FinancialAdvisor::all()->get('fa_id');
        $test = json_decode($admin,true);
        $i = 0;
        $someArray = [];
        var_dump($test);

        foreach ($test->fa_id as $test) {

            while ($i < count($test)) {
                array_push($someArray, [
                    'FA_ID' => $test[$i]->fa_id,
                    'Fa_Name' => $test[$i]->fa_name

                ]);
                $i++;

            }
                return \View::make('admindashboard')->with('admin', $someArray);
            }

        }

}
