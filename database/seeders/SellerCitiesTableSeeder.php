<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SellerCitiesTableSeeder extends Seeder
{
    public static function run()
    {
        $sellerCities = [
            ['city_id' => 1,  'seller_id' => 1],
            ['city_id' => 2,  'seller_id' => 1],
            ['city_id' => 3,  'seller_id' => 2],
            ['city_id' => 4,  'seller_id' => 2],
            ['city_id' => 5,  'seller_id' => 1],
            ['city_id' => 6,  'seller_id' => 2],
            ['city_id' => 7,  'seller_id' => 1],
            ['city_id' => 8,  'seller_id' => 2],
            ['city_id' => 9,  'seller_id' => 1],
            ['city_id' => 1, 'seller_id' => 2],
            ['city_id' => 3, 'seller_id' => 1],
            ['city_id' => 5, 'seller_id' => 2],
            ['city_id' => 9, 'seller_id' => 2],

        ];

        DB::table('seller_cities')->insert($sellerCities);
    }
}
