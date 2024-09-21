<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientRequest;
use App\Models\Client;
use App\Services\ClientSevice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::with('person')->get();
        return response()->json($clients);
    }

    public function show($id)
    {
        $client = Client::with('person')->findOrFail($id);
        return response()->json($client);
    }

    public function store(ClientRequest $request)
    {

        $client = ClientSevice::store($request);
        return response()->json($client, 201);
    }

    public function update(ClientRequest $request, $id)
    {
        $client = Client::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'person_id' => 'sometimes|required|exists:people,id',
            'city_id' => 'sometimes|required|exists:cities,id',
            'address' => 'sometimes|required|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $client->update($request->all());
        return response()->json($client);
    }

    public function destroy($id)
    {
        $client = Client::findOrFail($id);
        $client->delete();
        return response()->json(null, 204);
    }
}
