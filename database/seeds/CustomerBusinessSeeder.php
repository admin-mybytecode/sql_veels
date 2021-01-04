<?php

use Illuminate\Database\Seeder;

class CustomerBusinessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        DB::table('customer_business')
            ->insert([
                'business_name' => $faker->name,
                'address' => $faker->address,
                'city' => $faker->city,
                'district' => $faker->state,
                'state' => $faker->state,
                'country' => $faker->country,
                'pin_code' => $faker->countryISOAlpha3,
                'geo_lat' => $faker->latitude,
                'geo_long' => $faker->longitude,
                'partner_user_id' => $faker->rand(1, 10),
                'partner_business_id' => $faker->rand(1, 10),
                'customer_gst_number' => $faker->md5,
                'customer_pan_number' => $faker->md5,
                'customer_image_gst' => $faker->$faker->imageUrl($width = 640, $height = 480),
                'customer_image_business_logo' => $faker->$faker->imageUrl($width = 640, $height = 480),
                'status' => $faker->randomElement(['operator', 'admin', 'manager']),
                'status_updated_by' => $faker->dateTime($max = 'now', $timezone = null),
                'status_updated_on' => $faker->dateTime($max = 'now', $timezone = null),
                'geo_location' => $faker->secondaryAddress,
            ]);
    }
}
