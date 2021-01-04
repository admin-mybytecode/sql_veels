<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CustomerBusinessSeeder extends Seeder
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
            DB::table('customer_business')
                ->insert([
                    'business_name' => $faker->name . '-business',
                    'address' => $faker->address,
                    'city' => $faker->city,
                    'district' => $faker->state,
                    'state' => $faker->state,
                    'country' => $faker->country,
                    'pin_code' => $faker->countryISOAlpha3,
                    'geo_lat' => $faker->latitude,
                    'geo_long' => $faker->longitude,
                    'partner_user_id' => rand(1, 10),
                    'partner_business_id' => rand(1, 10),
                    'customer_gst_number' => rand(1, 10),
                    'cusomer_pan_number' => rand(1, 10),
                    'customer_image_gst' => rand(1, 10),
                    'customer_image_business_logo' => $faker->imageUrl($width = 640, $height = 480),
                    'status' => $faker->randomElement(['disabled', 'enabled']),
                    'status_updated_by' => rand(1, 99),
                    'status_updated_on' => $faker->dateTime($max = 'now', $timezone = null),
                    'geo_location' => $faker->secondaryAddress,
                ]);
        endfor;
    }
}
