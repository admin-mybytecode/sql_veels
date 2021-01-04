<?php

use Illuminate\Database\Seeder;

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
        DB::table('customer_business_users_mapping')
            ->insert([
                'customer_business_id' => $faker->md5,
                'customer_user_id' => $faker->bankAccountNumber,
                'role' => $faker->randomElement(['operator', 'admin', 'manager']),
                'added_by' => $faker->bankAccountNumber,
                'role_updated_on' => $faker->dateTime($max = 'now', $timezone = null),
                'role_updated_by' => $faker->bankAccountNumber,
            ]);
    }
}
