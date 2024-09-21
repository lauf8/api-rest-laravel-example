<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientsTableSeeder extends Seeder
{
    public static function run()
    {
        $clients = [
            [
                'person_id' => 1,
                'city_id' => 1,
                'address' => 'Avenida Paulista, 1578',
            ],
            [
                'person_id' => 2,
                'city_id' => 2,
                'address' => 'Rua do Porto, 34',
            ],
            [
                'person_id' => 3,
                'city_id' => 3,
                'address' => 'Praça da Árvore, 10',
            ],
            [
                'person_id' => 4,
                'city_id' => 4,
                'address' => 'Rua Goiás, 123',
            ],
            [
                'person_id' => 5,
                'city_id' => 5,
                'address' => 'Avenida Getúlio Vargas, 90',
            ],
            [
                'person_id' => 6,
                'city_id' => 6,
                'address' => 'Rua Francisco de Morato, 56',
            ],
            [
                'person_id' => 7,
                'city_id' => 7,
                'address' => 'Avenida Doutor Roberto Mario Requião, 210',
            ],
            [
                'person_id' => 8,
                'city_id' => 8,
                'address' => 'Rua São Paulo, 77',
            ],

        ];

        DB::table('clients')->insert($clients);
    }
}
