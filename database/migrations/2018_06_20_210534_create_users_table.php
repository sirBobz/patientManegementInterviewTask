<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('email', 191)->unique();
			$table->unsignedInteger('depart_id');
			$table->foreign('depart_id')->references('id')->on('departments');
			$table->string('password', 191)->nullable();
			$table->dateTime('last_login')->nullable();
			$table->string('first_name', 191)->nullable();
			$table->string('last_name', 191)->nullable();
			$table->dateTime('last_login_at')->nullable();
			$table->string('last_login_ip', 191)->nullable();
			$table->string('remember_token', 100)->nullable();
			$table->boolean('verified')->default(0);
			$table->string('verification_token', 191)->nullable();
			$table->softDeletes();
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
