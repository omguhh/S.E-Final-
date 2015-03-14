<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class FinancialAdvisor extends \Eloquent {

    protected $table = 'financial_advisor';
    protected $primaryKey= 'fa_id';
	protected $fillable = [];
    public $timestamps = false;

    public function users()
    {
        return $this->belongsTo('user_id','user_id');
    }

    public function facl_relations()
    {
        return $this->hasMany('App\Registered_Client');
    }

    public function calendar_meeting()
    {
        return $this->hasMany('App\Calendar_meeting');
    }

    public function purch_history()
    {
        return $this->hasMany('App\Purchase_history');
    }

    public function stocks()
    {
        return $this->hasMany('App\Stocks');
    }
    /** RELATIONS AHEAD ENDS **/


}
