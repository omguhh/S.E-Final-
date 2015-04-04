<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPurchaseHistoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('purchase_history', function(Blueprint $table)
		{
			$table->foreign('client_name', 'purchase_history_ibfk_1')->references('rc_name')->on('registered_client')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('fa_name', 'purchase_history_ibfk_2')->references('fa_name')->on('financial_advisor')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('purchase_history', function(Blueprint $table)
		{
			$table->dropForeign('purchase_history_ibfk_1');
			$table->dropForeign('purchase_history_ibfk_2');
		});
	}

}
