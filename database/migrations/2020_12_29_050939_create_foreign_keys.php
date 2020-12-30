<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('partner_business_users_mapping', function(Blueprint $table) {
			$table->foreign('partner_business_id')->references('id')->on('partner_businesses')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('partner_business_users_mapping', function(Blueprint $table) {
			$table->foreign('partner_user_id')->references('id')->on('partner_users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('partner_businesses', function(Blueprint $table) {
			$table->foreign('partner_user_id')->references('id')->on('partner_users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('customer_business', function(Blueprint $table) {
			$table->foreign('partner_user_id')->references('id')->on('partner_users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('customer_business', function(Blueprint $table) {
			$table->foreign('partner_business_id')->references('id')->on('partner_businesses')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('customer_business_users_mapping', function(Blueprint $table) {
			$table->foreign('customer_business_id')->references('id')->on('customer_business')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('customer_business_users_mapping', function(Blueprint $table) {
			$table->foreign('customer_user_id')->references('id')->on('customer_users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('p_business_c_business_mapping', function(Blueprint $table) {
			$table->foreign('partner_business_id')->references('id')->on('partner_businesses')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('p_business_c_business_mapping', function(Blueprint $table) {
			$table->foreign('customer_business_id')->references('id')->on('customer_business')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('p_business_c_business_credit_transactions', function(Blueprint $table) {
			$table->foreign('p_c_mapping_id')->references('id')->on('p_business_c_business_mapping')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('p_business_c_business_payments', function(Blueprint $table) {
			$table->foreign('p_c_mapping_id')->references('id')->on('p_business_c_business_mapping')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('p_business_c_business_discounts', function(Blueprint $table) {
			$table->foreign('p_c_mapping_id')->references('id')->on('p_business_c_business_mapping')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('p_business_c_business_discounts', function(Blueprint $table) {
			$table->foreign('p_c_transaction_id')->references('id')->on('p_business_c_business_credit_transactions')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('p_b_c_b_transactions_payments_discounts', function(Blueprint $table) {
			$table->foreign('p_c_mapping_id')->references('id')->on('p_business_c_business_mapping')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('partner_business_users_mapping', function(Blueprint $table) {
			$table->dropForeign('partner_business_users_mapping_partner_business_id_foreign');
		});
		Schema::table('partner_business_users_mapping', function(Blueprint $table) {
			$table->dropForeign('partner_business_users_mapping_partner_user_id_foreign');
		});
		Schema::table('partner_businesses', function(Blueprint $table) {
			$table->dropForeign('partner_businesses_partner_user_id_foreign');
		});
		Schema::table('customer_business', function(Blueprint $table) {
			$table->dropForeign('customer_business_partner_user_id_foreign');
		});
		Schema::table('customer_business', function(Blueprint $table) {
			$table->dropForeign('customer_business_partner_business_id_foreign');
		});
		Schema::table('customer_business_users_mapping', function(Blueprint $table) {
			$table->dropForeign('customer_business_users_mapping_customer_business_id_foreign');
		});
		Schema::table('customer_business_users_mapping', function(Blueprint $table) {
			$table->dropForeign('customer_business_users_mapping_customer_user_id_foreign');
		});
		Schema::table('partner_business_customer_business_mapping', function(Blueprint $table) {
			$table->dropForeign('partner_business_customer_business_mapping_partner_business_id_foreign');
		});
		Schema::table('partner_business_customer_business_mapping', function(Blueprint $table) {
			$table->dropForeign('partner_business_customer_business_mapping_customer_business_id_foreign');
		});
		Schema::table('partner_business_customer_business_credit_transactions', function(Blueprint $table) {
			$table->dropForeign('partner_business_customer_business_credit_transactions_p_c_mapping_id_foreign');
		});
		Schema::table('partner_business_customer_business_payments', function(Blueprint $table) {
			$table->dropForeign('partner_business_customer_business_payments_p_c_mapping_id_foreign');
		});
		Schema::table('partner_business_customer_business_discounts', function(Blueprint $table) {
			$table->dropForeign('partner_business_customer_business_discounts_p_c_mapping_id_foreign');
		});
		Schema::table('partner_business_customer_business_discounts', function(Blueprint $table) {
			$table->dropForeign('partner_business_customer_business_discounts_p_c_transaction_id_foreign');
		});
		Schema::table('partner_business_customer_business_transactions_payments_discounts', function(Blueprint $table) {
			$table->dropForeign('partner_business_customer_business_transactions_payments_discounts_p_c_mapping_id_foreign');
		});
	}
}