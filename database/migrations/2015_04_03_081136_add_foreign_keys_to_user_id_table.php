<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUserIdTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('user_id', function(Blueprint $table)
		{
			$table->foreign('role', 'user_id_ibfk_1')->references('role_name')->on('roles')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('user_id', function(Blueprint $table)
		{
			$table->dropForeign('user_id_ibfk_1');
		});
	}

}
