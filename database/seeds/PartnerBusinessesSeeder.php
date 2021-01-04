<?php

use Illuminate\Database\Seeder;

class PartnerBusinessesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        DB::table('partner_businesses')
                ->insert([
                    'business_name'=> $faker->name,
                    'address' => $faker->address,
                    'city' => $faker->city,
                    'district' => $faker->state,
                    'state'=> $faker->state,
                    'country'=> $faker->country,
                    'pin_code'=> $faker->countryISOAlpha3, 
                    'geo_lat'=>$faker->latitude, 
                    'geo_long'=>$faker->longitude, 
                    'geo_location'=>$faker->secondaryAddress, 
                    'partner_user_id'=> rand(1,10), 
                    'highway' => $faker->boolean(), 
                    'highway_type'=>$faker->name, 
                    'highway_number'=>1, 
                    'partner_gst_number',
                    'partner_pan_number', 
                    'partner_image_gst', 
                    'p_image_oil_co_receipt', 
                    'p_image_business_logo', 
                    'status', 
                    'status_updated_by', 
                    'status_updated_on'
                ]);
    }
}
