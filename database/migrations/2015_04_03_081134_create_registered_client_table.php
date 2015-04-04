<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRegisteredClientTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('registered_client', function(Blueprint $table)
		{
			$table->string('rc_id', 12)->primary();
			$table->string('rc_name', 45)->index('rc_name');
			$table->string('rc_email', 45);
			$table->string('rc_address', 65);
			$table->integer('rc_phone');
			$table->integer('cash_balance')->unique('wallet_id');
			$table->string('fa_name_fk', 45)->index('fa_name_fk');
			$table->integer('user_id')->index('user_id');
			$table->string('client_password', 18);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('registered_client');
	}

}
