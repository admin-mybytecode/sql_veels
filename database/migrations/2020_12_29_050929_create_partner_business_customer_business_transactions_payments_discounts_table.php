<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePartnerBusinessCustomerBusinessTransactionsPaymentsDiscountsTable extends Migration {

	public function up()
	{
		Schema::create('p_b_c_b_transactions_payments_discounts', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('p_c_mapping_id')->unsigned();
			$table->string('type')->nullable();
			$table->integer('entry_id');
			$table->timestamp('entry_date')->nullable();
			$table->timestamp('edit_updated_on')->nullable();
			$table->string('edit_updated_by')->nullable();
			$table->float('entry_amount');
			$table->float('balance_amount')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('partner_business_customer_business_transactions_payments_discounts');
	}
}