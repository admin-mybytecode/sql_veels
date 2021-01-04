<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartnerBusinessCustomerBusinessPaymentsSeeder extends Seeder
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

            DB::table('p_business_c_business_payments')
                ->insert([
                    'p_c_mapping_id' => rand(1, 99),
                    'added_by' => rand(1, 99),
                    'edit_updated_on' => $faker->dateTime($max = 'now', $timezone = null),
                    'edit_updated_by' => rand(1, 99),
                    'payment_date' => $faker->dateTime($max = 'now', $timezone = null),
                    'payment_mode' => $faker->randomElement(['cash', 'upi', 'credit', 'netbanking']),
                    'payment_amount' => rand(200, 500),
                ]);
        endfor;
    }
}
