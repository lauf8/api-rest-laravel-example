<?php

namespace App\Services;

use App\Models\Client;
use App\Models\Person;

class ClientSevice

{

    public static function store($request)
    {
        $person = Person::create([
            'name' => $request->name,
            'cpf' => $request->cpf,
            'birth_date' => $request->birth_date,
            'phone' => $request->phone,
            'sex' => $request->sex,
        ]);

        return Client::create([
            'person_id' => $person->id,
            'city_id'=> $request->city_id,
            'address' => $request->address,
        ]);
    }
}
