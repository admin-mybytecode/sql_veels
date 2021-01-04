<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartnerBusinessCustomerBusinessMappingSeeder extends Seeder
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

            DB::table('p_business_c_business_mapping')
                ->insert([
                    'partner_business_id' => rand(1, 99),
                    'customer_business_id' => rand(1, 99),
                    'status' => $faker->randomElement(['enabled,disabled']),
                    'added_by' => rand(1, 99),
                    'edit_updated_on' => $faker->dateTime($max = 'now', $timezone = null),
                    'edit_updated_by' => rand(1, 99),
                    'credit_limit_assigned' => rand(1, 99),
                    'credit_limit_addded_edited_on' => $faker->dateTime($max = 'now', $timezone = null),
                    'credit_limit_assigned_by' => rand(1, 99),
                    'status_updated_on' => $faker->dateTime($max = 'now', $timezone = null),
                    'status_updated_by' => $faker->dateTime($max = 'now', $timezone = null),
                ]);
        endfor;
    }
}
