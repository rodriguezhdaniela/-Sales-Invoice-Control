<?php

use Illuminate\Database\Seeder;
use App\Seller;

class SellerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Seller::class,10)->create();
    }
}