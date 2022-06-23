<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $name = $request->first_name . " " . $request->last_name;
        $email = $request->email;
        $password = md5($request->password);
        $address = $request->address;
        $meter_number = $request->meter_number;

        if (Client::create([
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'address' => $address,
            'meter_number' => $meter_number,
        ])) {
            return response()->json(['success' => 'User Created'], 200);
        } else {
            return response()->json(['message' => 'Error.....'], 401);
        }
    }

    public function login(Request $request)
    {
        $meter_number = $request->meter_number;
        $password = $request->password;

        $clients = Client::where('meter_number', $meter_number)->get();
        $client = Client::where('meter_number', $meter_number)->first();

        if ($clients->count() > 0) {
            $encrypted = md5($password);
            if ($client->password == $encrypted) {
                return response()->json(['success' => 'User Authenticated'], 200);
            } else {
                return response()->json(['failed' => 'Wrong password'], 401);
            }
        } else {
            return response()->json(['failed' => 'Wrong meter number address'], 401);
        }
    }
}
