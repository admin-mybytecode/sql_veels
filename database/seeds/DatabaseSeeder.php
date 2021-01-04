<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CustomerUsersSeeder::class,
            PartnerUserSeeder::class,
            PartnerBusinessSeeder::class,
            CustomerBusinessSeeder::class,
            CustomerBusinessUsersMappingSeeder::class,
            PartnerBusinessCustomerBusinessMappingSeeder::class,
            PartnerBusinessCustomerBusinessCreditTransactionsSeeder::class,
            PartnerBusinessCustomerBusinessDiscountsSeeder::class,
            PartnerBusinessCustomerBusinessPaymentsSeeder::class,
            PartnerBusinessCustomerBusinessTransactionsPaymentsDiscountsSeeder::class,
            PartnerBusinessUsersMappingSeeder::class,
        ]);
    }
}
