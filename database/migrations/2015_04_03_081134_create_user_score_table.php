<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserScoreTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_score', function(Blueprint $table)
		{
			$table->string('client_name', 45)->index('client_name');
			$table->timestamp('time_of_score')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->integer('user_score')->nullable();
			$table->primary(['client_name','time_of_score']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_score');
	}

}
