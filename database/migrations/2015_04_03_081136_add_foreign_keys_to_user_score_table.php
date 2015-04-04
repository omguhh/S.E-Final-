<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUserScoreTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('user_score', function(Blueprint $table)
		{
			$table->foreign('client_name', 'user_score_ibfk_1')->references('client_name')->on('purchase_history')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('user_score', function(Blueprint $table)
		{
			$table->dropForeign('user_score_ibfk_1');
		});
	}

}
