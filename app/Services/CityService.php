<?php

namespace App\Services;

use App\Models\City;


class CityService

{
    public static function index()
    {
        return City::with('state')
            ->paginate(10);
    }

    public static function show($id)
    {
        return City::with('state')
            ->findOrFail($id);
    }

    public static function store($request)
    {
        return City::create([
            'state_id' => $request->state_id,
            'name' => $request->name,
            'cod_ibge' => $request->cod_ibge,
            'ddd' => $request->ddd,
        ]);
    }

    public static function delete($id)
    {
        $city = City::findOrFail($id);
        $city->delete();
    }

    public static function update($request, $id)
    {
        $city = City::findOrFail($id);
        $city->state_id = $request->state_id;
        $city->name = $request->name;
        $city->cod_ibge = $request->cod_ibge;
        $city->ddd = $request->ddd;
        $city->save();

        return $city;
    }

}
