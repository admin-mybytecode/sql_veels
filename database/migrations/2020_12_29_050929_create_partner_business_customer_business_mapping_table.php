<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePartnerBusinessCustomerBusinessMappingTable extends Migration {

	public function up()
	{
		Schema::create('p_business_c_business_mapping', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('partner_business_id')->unsigned();
			$table->integer('customer_business_id')->unsigned();
			$table->string('status')->nullable();
			$table->string('added_by')->nullable();
			$table->timestamp('edit_updated_on')->nullable();
			$table->string('edit_updated_by')->nullable();
			$table->string('credit_limit_assigned')->nullable();
			$table->timestamp('credit_limit_addded_edited_on')->nullable();
			$table->string('credit_limit_assigned_by')->nullable();
			$table->timestamp('status_updated_on')->nullable();
			$table->timestamp('status_updated_by')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('partner_business_customer_business_mapping');
	}
}