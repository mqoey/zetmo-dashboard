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
        $check_email = Client::where('email', $email)->get();
        $check_meter_number = Client::where('meter_number', $meter_number)->get();

        if ($check_email->count() > 0) {
            return response()->json(
                [
                    'status' => 'Error',
                    'message' => 'Email already exist!'
                ],
                401
            );
        } elseif ($check_meter_number->count() > 0) {
            return response()->json(
                [
                    'status' => 'Error',
                    'message' => 'Meter number already exist!'
                ],
                401
            );
        } else {
            if ($client = Client::create(
                [
                    'name' => $name,
                    'email' => $email,
                    'password' => $password,
                    'address' => $address,
                    'meter_number' => $meter_number,
                ]
            )) {
                return response()->json(
                    [
                        'success' => 'User Registered',
                        $client
                    ],
                    200
                );
            } else {
                return response()->json(
                    [
                        'status' => 'Error',
                        'message' => 'Meter number already exist!'
                    ],
                    401
                );
            }
        }
    }

    public function registerhome(Request $request)
    {
        $name = $request->first_name . " " . $request->last_name;
        $email = $request->email;
        $password = md5($request->password);
        $address = $request->address;
        $meter_number = $request->meter_number;
        $check_email = Client::where('email', $email)->get();
        $check_meter_number = Client::where('meter_number', $meter_number)->get();

        if ($check_email->count() > 0) {
            return response()->json(
                [
                    'status' => 'Error',
                    'message' => 'Email already exist!'
                ],
                401
            );
        } elseif ($check_meter_number->count() > 0) {
            return response()->json(
                [
                    'status' => 'Error',
                    'message' => 'Meter number already exist!'
                ],
                401
            );
        } else {
            if ($client = Client::create(
                [
                    'name' => $name,
                    'email' => $email,
                    'password' => $password,
                    'address' => $address,
                    'meter_number' => $meter_number,
                ]
            )) {
                return response()->json(
                    [
                        'success' => 'User Registered',
                        $client
                    ],
                    200
                );
            } else {
                return response()->json(
                    [
                        'status' => 'Error',
                        'message' => 'Meter number already exist!'
                    ],
                    401
                );
            }
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
                return response()->json($client, 200);
            } else {
                return response()->json(
                    [
                        'status' => 'Error',
                        'message' => 'Wrong password!'
                    ],
                    401
                );
            }
        } else {
            return response()->json(
                [
                    'status' => 'Error',
                    'message' => 'Wrong meter number!'
                ],
                401
            );
        }
    }
}
