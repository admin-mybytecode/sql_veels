<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PartnerBusinessCustomerBusinessDiscountsSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i <= 100; $i++) :
            DB::table('p_business_c_business_discounts')
                ->insert([
                    'p_c_mapping_id' => rand(1,99),
                    'p_c_transaction_id' => rand(1,99),
                    'added_by' => rand(1, 99),
                    'edit_updated_on' => $faker->dateTime($max = 'now', $timezone = null),
                    'edit_updated_by' => $faker->dateTime($max = 'now', $timezone = null),
                    'discount_date' => $faker->dateTime($max = 'now', $timezone = null),
                    'discount_amount' => rand(200, 400),
                    'discount_rate' => rand(1, 66),
                ]);
        endfor;
    }
}
