<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Calendar_meeting extends \Eloquent {

    protected $table = 'calendar_meeting';
	protected $fillable = [];

    public function FinancialAdvisor()
    {
        return $this->belongsTo('FinancialAdvisor','fa_name');
    }

    public function RegisteredClient()
    {
        return $this->belongsTo('Registered_Client','rc_id');
    }

}