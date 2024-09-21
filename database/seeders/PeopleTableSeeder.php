<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleTableSeeder extends Seeder
{
    public static function run()
    {
        $people = [
            [
                'name' => 'João Silva',
                'cpf' => '123.456.789-00',
                'birth_date' => '1990-01-01',
                'sex' => 'M',
                'phone' => '11987654321',
            ],
            [
                'name' => 'Maria Oliveira',
                'cpf' => '987.654.321-00',
                'birth_date' => '1985-05-15',
                'sex' => 'F',
                'phone' => '11876543210',
            ],
            [
                'name' => 'Carlos Pereira',
                'cpf' => '123.123.123-45',
                'birth_date' => '1992-03-20',
                'sex' => 'M',
                'phone' => '11912345678',
            ],
            [
                'name' => 'Ana Costa',
                'cpf' => '456.456.456-78',
                'birth_date' => '1995-12-30',
                'sex' => 'F',
                'phone' => '11865432109',
            ],
            [
                'name' => 'Pedro Santos',
                'cpf' => '789.789.789-01',
                'birth_date' => '1988-07-25',
                'sex' => 'M',
                'phone' => '11998765432',
            ],
            [
                'name' => 'Laura Almeida',
                'cpf' => '321.321.321-00',
                'birth_date' => '1993-08-10',
                'sex' => 'F',
                'phone' => '1176543210',
            ],
            [
                'name' => 'Fernando Lima',
                'cpf' => '654.654.654-33',
                'birth_date' => '1987-11-05',
                'sex' => 'M',
                'phone' => '11987654321',
            ],
            [
                'name' => 'Bianca Nascimento',
                'cpf' => '852.852.852-22',
                'birth_date' => '1991-02-14',
                'sex' => 'F',
                'phone' => '11876543210',
            ],
            [
                'name' => 'Roberto Ferreira',
                'cpf' => '963.963.963-11',
                'birth_date' => '1989-09-12',
                'sex' => 'M',
                'phone' => '11912345678',
            ],
            [
                'name' => 'Juliana Rocha',
                'cpf' => '147.147.147-00',
                'birth_date' => '1994-06-30',
                'sex' => 'F',
                'phone' => '11865432109',
            ],
            [
                'name' => 'Tiago Martins',
                'cpf' => '258.258.258-77',
                'birth_date' => '1996-04-20',
                'sex' => 'M',
                'phone' => '11998765432',
            ],
        ];

        DB::table('people')->insert($people);
    }
}
