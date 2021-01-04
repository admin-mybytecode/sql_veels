<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PartnerBusinessSeeder extends Seeder
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
            DB::table('partner_businesses')
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
                    'geo_location' => $faker->secondaryAddress,
                    'partner_user_id' => rand(1, 10),
                    'highway' => $faker->boolean(),
                    'highway_type' => $faker->name,
                    'highway_number' => 1,
                    'partner_gst_number' => $faker->bankAccountNumber,
                    'partner_pan_number' => $faker->bankAccountNumber,
                    'partner_image_gst' => $faker->uuid,
                    'p_image_oil_co_receipt' => $faker->md5,
                    'p_image_business_logo' => $faker->imageUrl($width = 640, $height = 480),
                    'status' => $faker->boolean(),
                    'status_updated_by' => $faker->dateTime($max = 'now', $timezone = null),
                    'status_updated_on' => $faker->dateTime($max = 'now', $timezone = null),
                ]);
        endfor;
    }
}
