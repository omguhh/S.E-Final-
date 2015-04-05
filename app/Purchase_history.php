<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase_history extends \Eloquent {

    protected $table = 'purchase_history';
    public $timestamps = false;
	protected $fillable = [];

    public function Registered_Client()
    {
        return $this->belongsTo('Registered_Client','client_name');
    }

    public function FA()
    {
        return $this->belongsTo('FinancialAdvisor','fa_name');
    }
}
