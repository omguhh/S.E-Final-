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
        FinancialAdvisor::all()->first()->where('fa_name','=',$id)->delete();
        return \View::make('home');
    }

    public function show_insert_form(){

        return view('admindashboard/add');
    }

    public function show_FA_insert_form(){
        return view('admindashboard/addFA');
    }

    public function insert_FA(){

        $fa_input_id = \Request::input('fa_id');
        $fa_input_name = \Request::input('fa_name');
        $fa_input_email = \Request::input('fa_email');
        $fa_input_address = \Request::input('fa_address');
        $fa_input_rating = \Request::input('fa_rating');
        $fa_years_experience = \Request::input('years_experience');
        $fa_certificate= \Request::input('certificate');
        $fa_user_id = \Request::input('user_id');
        $fa_password = \Request::input('fa_password');

        $fa_user= new FinancialAdvisor();
        $fa_user->fa_id= $fa_input_id;
        $fa_user->fa_name= $fa_input_name;
        $fa_user->fa_email= $fa_input_email;
        $fa_user->fa_address= $fa_input_address;
        $fa_user->fa_rating= $fa_input_rating;
        $fa_user->years_experience= $fa_years_experience;
        $fa_user->certificate= $fa_certificate;
        $fa_user->user_id= $fa_user_id;
        $fa_user->fa_password= $fa_password;
        // $fa_user->email= "vc@email.com";
        $fa_user->save();
        return \View::make('home');

    }

    public function insert_user(){
        $rc_input_id = \Request::input('rc_id');
        $rc_input_name = \Request::input('rc_name');
        $rc_input_email = \Request::input('rc_email');
        $rc_input_address = \Request::input('rc_address');
        $rc_input_phone = \Request::input('rc_phone');
        $rc_input_cash_balance = \Request::input('cash_balance');
        $rc_input_fa_name= \Request::input('fa_name_fk');
        $rc_input_user_id = \Request::input('user_id');
        $rc_input_password = \Request::input('client_password');

        $rc_user= new Registered_Client;
        $rc_user->rc_id= $rc_input_id;
        $rc_user->rc_name= $rc_input_name;
        $rc_user->rc_email= $rc_input_email;
        $rc_user->rc_address= $rc_input_address;
        $rc_user->rc_phone= $rc_input_phone;
        $rc_user->cash_balance= $rc_input_cash_balance;
        $rc_user->fa_name_fk= $rc_input_fa_name;
        $rc_user->user_id= $rc_input_user_id;
        $rc_user->client_password= $rc_input_password;
       // $rc_user->email= "vc@email.com";
        $rc_user->save();
        return \View::make('home');

    }

}
