<?php

use Illuminate\Database\Seeder;

class CustomerUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        DB::table('customer_users')
            ->insert([
                'full_name' => $faker->name,
                'email_id' => $faker->email,
                'phone_number' => $faker->mobileNumber,
                'password' => $faker->password,
                'added_by' => $faker->bankAccountNumber,
                'pan_number' => $faker->bankAccountNumber,
                'aadhar_number' => $faker->bankAccountNumber,
            ]);
    }
}
