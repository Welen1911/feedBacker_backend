<?php

namespace App\Http\Controllers;

use App\Models\ApiKey;
use Illuminate\Http\Request;

class ApiKeyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request = null)
    {
        $user = auth()->user();
        $oldApiKey = $user->apiKey;
        if ($oldApiKey) {
            ApiKey::destroy($oldApiKey->id);
        }
        $apikey = ApiKey::create([
            'user_id' => auth()->user()->id,
        ]);

        return $apikey;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function checkIfApiKeyExists(string $apikey)
    {
        $exists = ApiKey::find($apikey);

        if ($exists) {
            return response('', 200);
        }

        return response('', 404);
    }
}
