<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePartnerBusinessCustomerBusinessCreditTransactionsTable extends Migration {

	public function up()
	{
		Schema::create('p_business_c_business_credit_transactions', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('p_c_mapping_id')->unsigned()->nullable();
			$table->string('added_by')->nullable();
			$table->timestamp('edit_updated_on')->nullable();
			$table->string('edit_updated_by')->nullable();
			$table->timestamp('transaction_date')->nullable();
			$table->string('p_ref_number1')->nullable();
			$table->string('c_ref_number2')->nullable();
			$table->string('vehicle_number')->nullable();
			$table->string('product')->nullable();
			$table->string('product_rsp')->nullable();
			$table->string('product_quantity')->nullable();
			$table->string('product_amount')->nullable();
			$table->boolean('discount_given')->nullable();
			$table->float('discount_amount')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('partner_business_customer_business_credit_transactions');
	}
}