<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserIdToArticlesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('articles', function ($table) {
    		$table->integer('user_id')->unsigned();

   			$table->foreign('user_id')->references('id')->on('users');
	});;
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('articles', function(Blueprint $table)
		{
			$table->foreign('user_id')
      		->references('id')->on('users')
      		->onDelete('cascade');

      		$table->dropForeign('posts_user_id_foreign');
		});
	}

}
