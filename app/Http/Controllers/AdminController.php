<?php namespace App\Http\Controllers;

use App\Admin;
use App\FinancialAdvisor;
use App\Registered_Client;
use Illuminate\Support\Facades\Redirect;

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

        $admin = FinancialAdvisor::all(['fa_id','fa_name']);
        return \View::make('admindashboard.index')->with('admin', $admin);
    }

    public function view_clients($id){

//  SELECT rc_name FROM registered_client,financial_advisor WHERE registered_client.fa_name_fk = financial_advisor.fa_name GROUP BY rc_name

            $clients  = Registered_Client::all(['rc_name'])->first()
            ->select('rc_id','rc_name')
            ->join('financial_advisor', 'registered_client.fa_name_fk', '=', 'financial_advisor.fa_name')
            ->where('fa_name_fk','=', $id)
            ->get();

        return \View::make('admindashboard.view')->with('clients',$clients);
    }

    public function delete_user($id){
        Registered_Client::all()->first()->where('rc_id','=',$id)->delete();
        return \View::make('home');
    }

    public function insert_user(){
        $rc_user= new Registered_Client;
        $rc_user->rc_id= "myid";
        $rc_user->user_id="1005";
        $rc_user->rc_email= "vc@email.com";
        $rc_user->rc_address= "vc@email.com";
        $rc_user->rc_phone= "819812";
        $rc_user->cash_balance= "3821313391";
        $rc_user->fa_name_fk= "sonia santa";
        $rc_user->user_id= "vc@email.com";
        $rc_user->client_password= "vc@email.com";
       // $rc_user->email= "vc@email.com";

        $rc_user->save();


    }

}
