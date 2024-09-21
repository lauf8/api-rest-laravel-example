<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitiesTableSeeder extends Seeder
{
    public static function run()
    {
        $cities = [
            ['state_id' => 24, 'name' => 'São Paulo', 'cod_ibge' => '3550308', 'ddd' => '11'],
            ['state_id' => 24, 'name' => 'Guarulhos', 'cod_ibge' => '3518800', 'ddd' => '11'],
            ['state_id' => 24, 'name' => 'São Bernardo do Campo', 'cod_ibge' => '3548708', 'ddd' => '11'],
            ['state_id' => 24, 'name' => 'São Caetano do Sul', 'cod_ibge' => '3548807', 'ddd' => '11'],
            ['state_id' => 24, 'name' => 'Diadema', 'cod_ibge' => '3514003', 'ddd' => '11'],
            ['state_id' => 24, 'name' => 'Osasco', 'cod_ibge' => '3549004', 'ddd' => '11'],
            ['state_id' => 24, 'name' => 'Barueri', 'cod_ibge' => '3506003', 'ddd' => '11'],
            ['state_id' => 24, 'name' => 'Mauá', 'cod_ibge' => '3532800', 'ddd' => '11'],
            ['state_id' => 24, 'name' => 'Ribeirão Pires', 'cod_ibge' => '3541407', 'ddd' => '11'],
            ['state_id' => 24, 'name' => 'Rio Grande da Serra', 'cod_ibge' => '3533709', 'ddd' => '11'],
            ['state_id' => 24, 'name' => 'Cotia', 'cod_ibge' => '3513505', 'ddd' => '11'],
            ['state_id' => 24, 'name' => 'Itapevi', 'cod_ibge' => '3522405', 'ddd' => '11'],
        ];

        DB::table('cities')->insert($cities);
    }
}
