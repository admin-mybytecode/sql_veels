<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartnerBusinessCustomerBusinessCreditTransactionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i <= 100; $i++) :
            DB::table('p_business_c_business_credit_transactions')
                ->insert([
                    'p_c_mapping_id' => rand(1, 99),
                    'added_by' => rand(1, 99),
                    'edit_updated_on' => $faker->dateTime($max = 'now', $timezone = null),
                    'edit_updated_by' => rand(1, 99),
                    'transaction_date' => $faker->dateTime($max = 'now', $timezone = null),
                    'p_ref_number1' => $faker->bankAccountNumber,
                    'c_ref_number2' => $faker->bankAccountNumber,
                    'vehicle_number' => $faker->randomElement(['MH',"NH"]).rand(20,90),
                    'product' => rand(1, 99),
                    'product_rsp' => rand(1, 99),
                    'product_quantity' => rand(1, 99),
                    'product_amount' => rand(1, 99),
                    'discount_given' => $faker->boolean(),
                    'discount_amount' => rand(1, 99),
                ]);
        endfor;
    }
}
