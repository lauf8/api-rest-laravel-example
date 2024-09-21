<?php

namespace App\Services;

use App\Models\Person;
use App\Models\Seller;

class SellerService

{
    public static function index()
    {
        return Seller::with('person')
            ->paginate(10);
    }

    public static function show($id)
    {
        return Seller::with('person')
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
        return Seller::create([
            'person_id' => $person->id,
            'nickname' => $request->nickname,
        ]);
    }

    public static function delete($id)
    {
        $seller = Seller::findOrFail($id);
        $seller->delete();
    }

    public static function update($request, $id)
    {
        $seller = Seller::findOrFail($id);
        $seller->nickname = $request->nickname;
        $seller->save();
        $person = Person::findOrFail($seller->person->id);
        $person->name = $request->name;
        $person->cpf = $request->cpf;
        $person->birth_date = $request->birth_date;
        $person->phone = $request->phone;
        $person->sex = $request->sex;
        $person->save();
        return $seller;
    }
}
