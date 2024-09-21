<?php

namespace App\Services;

use App\Models\Client;
use App\Models\Person;

class ClientSevice

{
    public static function index()
    {
        return Client::with('person')
            ->paginate(10);
    }

    public static function show($id)
    {
        return Client::with('person')
            ->findOrFail($id);
    }

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

    public static function delete($id)
    {
        $client = Client::findOrFail($id);
        $client->delete();
    }

    public static function update($request, $id)
    {
        $client = Client::findOrFail($id);
        $client->city_id = $request->city_id;
        $client->address = $request->address;
        $client->save();

        $person = Person::findOrFail($client->person->id);
        $person->name = $request->name;
        $person->cpf = $request->cpf;
        $person->birth_date = $request->birth_date;
        $person->phone = $request->phone;
        $person->sex = $request->sex;
        $person->save();
        return $client;
    }

}
