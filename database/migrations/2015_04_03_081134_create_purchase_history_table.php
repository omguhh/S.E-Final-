<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePurchaseHistoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('purchase_history', function(Blueprint $table)
		{
			$table->string('client_name', 45);
			$table->string('fa_name', 45)->index('fa_name');
			$table->string('stock_name', 15)->index('stock_id_fk');
			$table->timestamp('time_purchased')->default(DB::raw('CURRENT_TIMESTAMP'))->index('date_brought_2');
			$table->integer('quantity');
			$table->primary(['client_name','fa_name','stock_name']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('purchase_history');
	}

}
