<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePartnerUsersTable extends Migration {

	public function up()
	{
		Schema::create('partner_users', function(Blueprint $table) {
			$table->increments('id');
			$table->string('fullname', 50)->nullable();
			$table->string('email_id')->unique()->nullable();
			$table->string('phone_number')->unique()->nullable();
			$table->string('password')->nullable();
			$table->string('added_by')->nullable();
			$table->string('pan_number')->nullable();
			$table->string('aadhar_number')->unique()->nullable();
			$table->softDeletes();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('partner_users');
	}
}