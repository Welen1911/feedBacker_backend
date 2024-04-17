<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function me()
    {
        $user = auth()->user();
        $user->apikey;

        return $user;
    }

    public function apikey()
    {
        $apikey = new ApiKeyController();

        return response(['apikey' => $apikey->store()], 201);
    }
}
