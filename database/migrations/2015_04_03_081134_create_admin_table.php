<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdminTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('admin', function(Blueprint $table)
		{
			$table->string('admin_id', 12)->primary();
			$table->string('admin_name', 35)->unique('admin_name');
			$table->integer('admin_phone');
			$table->string('admin_email', 35);
			$table->integer('user_id')->index('user_id');
			$table->string('admin_password', 18);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('admin');
	}

}
