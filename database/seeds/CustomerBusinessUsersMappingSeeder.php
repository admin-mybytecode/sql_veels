<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerBusinessUsersMappingSeeder extends Seeder
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

            DB::table('customer_business_users_mapping')
                ->insert([
                    'customer_business_id' => rand(1, 99),
                    'customer_user_id' => rand(1, 99),
                    'role' => $faker->randomElement(['operator', 'admin', 'manager']),
                    'added_by' => rand(1, 99),
                    'role_updated_on' => $faker->dateTime($max = 'now', $timezone = null),
                    'role_updated_by' => rand(1, 99),
                ]);
        endfor;
    }
}
