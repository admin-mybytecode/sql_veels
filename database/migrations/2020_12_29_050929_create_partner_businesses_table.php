<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePartnerBusinessesTable extends Migration {

	public function up()
	{
		Schema::create('partner_businesses', function(Blueprint $table) {
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
			$table->string('geo_location')->nullable();
			$table->integer('partner_user_id')->unsigned()->nullable();
			$table->boolean('highway')->nullable();
			$table->string('highway_type')->nullable();
			$table->string('highway_number')->nullable();
			$table->string('partner_gst_number')->unique()->nullable();
			$table->string('partner_pan_number')->unique()->nullable();
			$table->string('partner_image_gst')->nullable();
			$table->string('p_image_oil_co_receipt')->nullable();
			$table->string('p_image_business_logo')->nullable();
			$table->boolean('status')->nullable();
			$table->string('status_updated_by');
			$table->timestamp('status_updated_on')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('partner_businesses');
	}
}