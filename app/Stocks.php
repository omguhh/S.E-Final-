<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Stocks extends \Eloquent {

    protected $table = 'stocks';

	protected $fillable = [];

    public function FA()
    {
        return $this->belongsTo('FinancialAdvisor','fa_name');
    }

}
?>
