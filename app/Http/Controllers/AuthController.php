<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function createUser(Request $request) {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        $user->apiKeys()->create([]);

        $user['api_keys'] = $user->apiKeys;

        return $user;
    }


    public function login(Request $request) {

        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $data['email'], 'password' => $data['password']])) {
            $token = auth()->user()->createToken('user_login');

            return ['token' => $token->plainTextToken];
        }

        return response('', 404);
    }
}
