<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientUpdateRequest;
use App\Http\Requests\SellerRequest;
use App\Http\Requests\SellerUpdateRequest;
use App\Services\SellerService;

class SellerController extends Controller
{
    public function index()
    {
        $sellers = SellerService::index();
        return response()->json($sellers);
    }

    public function show($id)
    {
        $seller = SellerService::show($id);
        return response()->json($seller);
    }

    public function store(SellerRequest $request)
    {
        $seller = SellerService::store($request);
        return response()->json($seller, 201);
    }

    public function update(SellerUpdateRequest $request, $id)
    {
        $seller = SellerService::update($request,$id);
        return response()->json($seller,200);
    }

    public function destroy($id)
    {
        SellerService::delete($id);
        return response()->json(null, 204);
    }
}
