<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::orderBy('created_at', 'desc')
            ->get();

        return response()->json([
            'clients' => $clients,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:255',
            'address' => 'required|string|max:255',
        ]);

        $client = Client::where('phone_number', $request->phone_number)->first();

        if ($client) {
            return response()->json([
                'status' => 409,
                'message' => 'Le client avec ce numéro de téléphone existe déjà!'
            ]);
        } else {

            $client = Client::create($request->all());

            return response()->json([
                'status' => 201,
                'message' => 'Client créé avec succès!',
                'client' => $client,
            ]);
        }
    }

    public function show(Request $id)
    {
        $client = Client::where('id', $id)->first();

        if (!$client) {
            return response()->json([
                'status' => 404,
                'message' => "Ce client n'existe pas",
            ]);
        } else {
            return response()->json([
                'status' => 200,
                'client' => $client,
            ]);
        }
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'phone_number' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors(),
            ]);
        }

        $client = Client::find($request->id);

        if (!$client) {
            return response()->json([
                'status' => 404,
                'message' => 'Client not found'
            ]);
        } else {

            $client->update($request->all());

            return response()->json([
                'status' => 200,
                'client' => $client
            ]);
        }
    }

    public function destroy($id)
    {
         $client = Client::find($id);

        if (!$client) {
            return response()->json([
                'status' => 404,
                'message' => 'Client not found'
            ]);
        } else {

            $client->delete();
    
            return response()->json([
                'status' => 200,
                'message' => 'Client supprimé avec succès'
            ]);
        }


    }
}
