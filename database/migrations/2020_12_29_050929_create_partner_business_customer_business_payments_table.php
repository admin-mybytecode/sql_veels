<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePartnerBusinessCustomerBusinessPaymentsTable extends Migration {

	public function up()
	{
		Schema::create('p_business_c_business_payments', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('p_c_mapping_id')->unsigned();
			$table->string('added_by')->nullable();
			$table->timestamp('edit_updated_on')->nullable();
			$table->string('edit_updated_by')->nullable();
			$table->timestamp('payment_date')->nullable();
			$table->string('payment_mode')->nullable();
			$table->decimal('payment_amount');
		});
	}

	public function down()
	{
		Schema::drop('partner_business_customer_business_payments');
	}
}