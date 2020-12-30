<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePartnerBusinessCustomerBusinessDiscountsTable extends Migration {

	public function up()
	{
		Schema::create('p_business_c_business_discounts', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('p_c_mapping_id')->unsigned();
			$table->integer('p_c_transaction_id')->unsigned();
			$table->string('added_by')->nullable();
			$table->timestamp('edit_updated_on')->nullable();
			$table->string('edit_updated_by')->nullable();
			$table->timestamp('discount_date')->nullable();
			$table->float('discount_amount')->nullable();
			$table->string('discount_rate')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('partner_business_customer_business_discounts');
	}
}