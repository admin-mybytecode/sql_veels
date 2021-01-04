<?php

use Illuminate\Database\Seeder;

class CustomerUsersSeeder extends Seeder
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
            DB::table('customer_users')
                ->insert([
                    'full_name' => $faker->name,
                    'email_id' => $faker->email,
                    'phone_number' => $faker->phoneNumber,
                    'password' => $faker->password,
                    'added_by' => $faker->phoneNumber,
                    'pan_number' => $faker->bankAccountNumber,
                    'aadhar_number' => $faker->bankAccountNumber
                ]);
        endfor;
    }
}
