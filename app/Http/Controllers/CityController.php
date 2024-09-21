<?php

namespace App\Http\Controllers;

use App\Http\Requests\CityRequest;
use App\Services\CityService;

class CityController extends Controller
{
    public function index()
    {
        $cities = CityService::index();
        return response()->json($cities);
    }

    public function show($id)
    {
        $city = CityService::show($id);
        return response()->json($city);
    }

    public function store(CityRequest $request)
    {

        $city = CityService::store($request);
        return response()->json($city, 201);
    }

    public function update(CityRequest $request, $id)
    {

        $city = CityService::update($request,$id);

        return response()->json($city,200);
    }

    public function destroy($id)
    {
        CityService::delete($id);
        return response()->json(null, 204);
    }
}
