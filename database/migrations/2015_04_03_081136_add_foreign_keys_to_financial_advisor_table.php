<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFinancialAdvisorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('financial_advisor', function(Blueprint $table)
		{
			$table->foreign('user_id', 'financial_advisor_ibfk_1')->references('user_id')->on('user_id')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('financial_advisor', function(Blueprint $table)
		{
			$table->dropForeign('financial_advisor_ibfk_1');
		});
	}

}
