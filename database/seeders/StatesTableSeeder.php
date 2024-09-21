<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public static function run()
    {
        DB::table('states')->insert([
            ['cod_uf' => '12', 'uf' => 'AC', 'name' => 'Acre', 'region' => 'Norte'],
            ['cod_uf' => '27', 'uf' => 'AL', 'name' => 'Alagoas', 'region' => 'Nordeste'],
            ['cod_uf' => '13', 'uf' => 'AM', 'name' => 'Amazonas', 'region' => 'Norte'],
            ['cod_uf' => '29', 'uf' => 'BA', 'name' => 'Bahia', 'region' => 'Nordeste'],
            ['cod_uf' => '23', 'uf' => 'CE', 'name' => 'Ceará', 'region' => 'Nordeste'],
            ['cod_uf' => '53', 'uf' => 'DF', 'name' => 'Distrito Federal', 'region' => 'Centro-Oeste'],
            ['cod_uf' => '32', 'uf' => 'ES', 'name' => 'Espírito Santo', 'region' => 'Sudeste'],
            ['cod_uf' => '52', 'uf' => 'GO', 'name' => 'Goiás', 'region' => 'Centro-Oeste'],
            ['cod_uf' => '21', 'uf' => 'MA', 'name' => 'Maranhão', 'region' => 'Nordeste'],
            ['cod_uf' => '51', 'uf' => 'MT', 'name' => 'Mato Grosso', 'region' => 'Centro-Oeste'],
            ['cod_uf' => '50', 'uf' => 'MS', 'name' => 'Mato Grosso do Sul', 'region' => 'Centro-Oeste'],
            ['cod_uf' => '31', 'uf' => 'MG', 'name' => 'Minas Gerais', 'region' => 'Sudeste'],
            ['cod_uf' => '15', 'uf' => 'PA', 'name' => 'Pará', 'region' => 'Norte'],
            ['cod_uf' => '25', 'uf' => 'PB', 'name' => 'Paraíba', 'region' => 'Nordeste'],
            ['cod_uf' => '41', 'uf' => 'PR', 'name' => 'Paraná', 'region' => 'Sul'],
            ['cod_uf' => '26', 'uf' => 'PE', 'name' => 'Pernambuco', 'region' => 'Nordeste'],
            ['cod_uf' => '22', 'uf' => 'PI', 'name' => 'Piauí', 'region' => 'Nordeste'],
            ['cod_uf' => '33', 'uf' => 'RJ', 'name' => 'Rio de Janeiro', 'region' => 'Sudeste'],
            ['cod_uf' => '24', 'uf' => 'RN', 'name' => 'Rio Grande do Norte', 'region' => 'Nordeste'],
            ['cod_uf' => '43', 'uf' => 'RS', 'name' => 'Rio Grande do Sul', 'region' => 'Sul'],
            ['cod_uf' => '11', 'uf' => 'RO', 'name' => 'Rondônia', 'region' => 'Norte'],
            ['cod_uf' => '14', 'uf' => 'RR', 'name' => 'Roraima', 'region' => 'Norte'],
            ['cod_uf' => '42', 'uf' => 'SC', 'name' => 'Santa Catarina', 'region' => 'Sul'],
            ['cod_uf' => '35', 'uf' => 'SP', 'name' => 'São Paulo', 'region' => 'Sudeste'],
            ['cod_uf' => '28', 'uf' => 'SE', 'name' => 'Sergipe', 'region' => 'Nordeste'],
            ['cod_uf' => '17', 'uf' => 'TO', 'name' => 'Tocantins', 'region' => 'Norte'],
        ]);
    }
}
