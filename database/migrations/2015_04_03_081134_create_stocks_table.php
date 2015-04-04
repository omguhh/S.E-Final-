<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStocksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('stocks', function(Blueprint $table)
		{
			$table->string('stock_name', 15);
			$table->integer('stock_price');
			$table->string('fa_name', 45)->unique('fa_id');
			$table->date('date_bookmarked');
			$table->primary(['stock_name','fa_name','date_bookmarked']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('stocks');
	}

}
