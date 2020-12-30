<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomerUsersTable extends Migration {

	public function up()
	{
		Schema::create('customer_users', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('full_name')->nullable();
			$table->string('email_id')->unique()->nullable();
			$table->string('phone_number')->unique()->nullable();
			$table->string('password')->nullable();
			$table->string('added_by')->nullable();
			$table->string('pan_number')->unique()->nullable();
			$table->string('aadhar_number')->unique()->nullable();
		});
	}

	public function down()
	{
		Schema::drop('customer_users');
	}
}