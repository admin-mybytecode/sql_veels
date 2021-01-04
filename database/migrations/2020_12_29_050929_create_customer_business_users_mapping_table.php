<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomerBusinessUsersMappingTable extends Migration
{

    public function up()
    {
        Schema::create('customer_business_users_mapping', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->softDeletes();
            $table->integer('customer_business_id')->unsigned()->nullable();
            $table->integer('customer_user_id')->unsigned()->nullable();
            $table->string('role')->nullable();
            $table->string('added_by')->nullable();
            $table->timestamp('role_updated_on')->nullable();
            $table->string('role_updated_by')->nullable();
        });
    }

    public function down()
    {
        Schema::drop('customer_business_users_mapping');
    }
}
