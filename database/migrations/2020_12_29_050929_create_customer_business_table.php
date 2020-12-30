<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomerBusinessTable extends Migration {

	public function up()
	{
		Schema::create('customer_business', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('business_name')->nullable();
			$table->string('address')->nullable();
			$table->string('city')->nullable();
			$table->string('district')->nullable();
			$table->string('state')->nullable();
			$table->string('country')->nullable();
			$table->string('pin_code')->nullable();
			$table->string('geo_lat')->nullable();
			$table->string('geo_long')->nullable();
			$table->integer('partner_user_id')->unsigned();
			$table->integer('partner_business_id')->unsigned()->nullable();
			$table->string('customer_gst_number')->nullable();
			$table->string('cusomer_pan_number')->nullable();
			$table->string('customer_image_gst')->nullable();
			$table->string('customer_image_business_logo')->nullable();
			$table->string('status')->nullable();
			$table->string('status_updated_by')->nullable();
			$table->string('status_updated_on')->nullable();
			$table->string('geo_location')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('customer_business');
	}
}