<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartnerBusinessUsersMappingSeeder extends Seeder
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

            DB::table('partner_business_users_mapping')
                ->insert([
                    'partner_business_id' => rand(1, 99),
                    'partner_user_id' => rand(1, 99),
                    'role' => $faker->randomElement(['operator', 'admin', 'manager']),
                    'added_by' => rand(1, 99),
                    'role_updated_on' => $faker->dateTime($max = 'now', $timezone = null),
                    'role_updated_by' => rand(1, 99),
                ]);
        endfor;
    }
}
