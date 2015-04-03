<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFinancialAdvisorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('financial_advisor', function(Blueprint $table)
		{
			$table->string('fa_id', 12)->index('fa_id');
			$table->string('fa_name', 45)->index('fa_name');
			$table->string('fa_email', 45);
			$table->string('fa_address', 65);
			$table->integer('fa_phone');
			$table->simple_array('fa_rating');
			$table->integer('years_experience');
			$table->string('certificate', 65);
			$table->integer('user_id')->index('user_id');
			$table->string('fa_password', 18);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('financial_advisor');
	}

}
