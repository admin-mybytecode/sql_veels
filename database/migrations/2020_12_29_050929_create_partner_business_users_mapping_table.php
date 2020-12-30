<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePartnerBusinessUsersMappingTable extends Migration {

	public function up()
	{
		Schema::create('partner_business_users_mapping', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('partner_business_id')->unsigned()->nullable();
			$table->integer('partner_user_id')->unsigned();
			$table->string('role')->nullable();
			$table->string('added_by')->nullable();
			$table->string('role_updated_on')->nullable();
			$table->string('role_updated_by')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('partner_business_users_mapping');
	}
}