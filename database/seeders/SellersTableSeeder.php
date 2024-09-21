<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SellersTableSeeder extends Seeder
{
    public static function run()
    {
        $sellers = [
            [
                'person_id' => 9,
                'nickname' => 'Roberto_Ferreira',
            ],
            [
                'person_id' => 10,
                'nickname' => 'Juliana_Rocha',
            ],
        ];

        DB::table('sellers')->insert($sellers);
    }
}
