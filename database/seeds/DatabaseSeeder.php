<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
class DatabaseSeeder extends Seeder
{
    public function run()
{
    $this->call([
        CustomerUsersSeeder::class,
        CustomerBusinessSeeder::class,
        CustomerBusinessUsersMappingSeeder::class,
        PartnerBusinessCustomerBusinessCreditTransactionsSeeder::class,
        PartnerBusinessCustomerBusinessMappingSeeder::class,
        PartnerBusinessCustomerBusinessDiscountsSeeder::class,
        PartnerBusinessCustomeerBusinessPaymentsSeeder::class,
        PartnerBusinessCustomerBusinessTransactionsPaymentDiscountsSeeder::class,
        PartnerBusinessSeeder::class,
        PartnerBusinessUsersMappingSeeder::class,
        PartnerUserSeeder::class,
    ]);
}
}
