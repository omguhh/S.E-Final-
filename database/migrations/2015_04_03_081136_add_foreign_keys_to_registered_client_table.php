<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToRegisteredClientTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('registered_client', function(Blueprint $table)
		{
			$table->foreign('fa_name_fk', 'registered_client_ibfk_1')->references('fa_name')->on('financial_advisor')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('user_id', 'registered_client_ibfk_2')->references('user_id')->on('user_id')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('registered_client', function(Blueprint $table)
		{
			$table->dropForeign('registered_client_ibfk_1');
			$table->dropForeign('registered_client_ibfk_2');
		});
	}

}
