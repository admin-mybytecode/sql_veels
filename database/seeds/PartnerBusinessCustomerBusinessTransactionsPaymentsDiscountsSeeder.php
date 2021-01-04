<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartnerBusinessCustomerBusinessTransactionsPaymentsDiscountsSeeder extends Seeder
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
            DB::table('p_b_c_b_transactions_payments_discounts')
                ->insert([
                    'p_c_mapping_id' => rand(1, 99),
                    'type' => rand(1, 5),
                    'entry_id' => rand(1, 99),
                    'entry_date' => $faker->dateTime($max = 'now', $timezone = null),
                    'edit_updated_on' => $faker->dateTime($max = 'now', $timezone = null),
                    'edit_updated_by' => rand(1, 99),
                    'entry_amount' => rand(299, 599),
                    'balance_amount' => rand(299, 599)
                ]);
        endfor;
    }
}
