<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Roles extends \Eloquent {

    protected $table = 'roles';

	protected $fillable = [];

    public function users()
    {
        return $this->hasMany('user_id','user_id');
    }

}
