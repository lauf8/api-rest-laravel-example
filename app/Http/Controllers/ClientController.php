<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientRequest;
use App\Http\Requests\ClientUpdateRequest;
use App\Models\Client;
use App\Services\ClientSevice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ClientController extends Controller
{
    public function index()
    {
        $clients = ClientSevice::index();
        return response()->json($clients);
    }

    public function show($id)
    {
        $client = ClientSevice::show($id);
        return response()->json($client);
    }

    public function store(ClientRequest $request)
    {

        $client = ClientSevice::store($request);
        return response()->json($client, 201);
    }

    public function update(ClientUpdateRequest $request, $id)
    {

        $client = ClientSevice::update($request,$id);

        return response()->json($client,200);
    }

    public function destroy($id)
    {
        ClientSevice::delete($id);
        return response()->json(null, 204);
    }
}
