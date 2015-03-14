<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Registered_Client extends \Eloquent {

    protected $table = 'registered_client';
	protected $fillable = [];

//    one client has one purchase history..
    public function purchase_history()
    {
        return $this->hasOne('Purchase_history','rc_name');
    }

     public function calendar()
    {
        return $this->hasOne('Calendar_meeting','rc_id');
    }

    public function FA()
    {
        return $this->hasOne('FinancialAdvisor','fa_id');
    }

    public function userid()
    {
        return $this->hasOne('User_ID','user_id');
    }



}
