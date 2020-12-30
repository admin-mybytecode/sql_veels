<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartnerUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for($i=0; $i<=100; $i++):
            DB::table('partner_users')
                ->insert([
                    'fullname' => $faker->name,
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
