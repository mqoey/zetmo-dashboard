<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\TokenResource;
use App\Models\Client;
use App\Models\Token;
use Illuminate\Http\Request;

class TokenController extends Controller
{
    public function getTokens(Request $request)
    {
        $email = $request->email;
        $client = Client::where('email', $email)->first();
        $tokens = Token::where('client_id', $client->id)->where('status', '0')->get();
        if ($tokens->count() > 0) {
            // return response()->json($tokens, 200);
            return TokenResource::collection($tokens);
        } else {
            return response()->json(['failed' => 'No purchased tokens'], 202);
        }
    }

    public function useToken(Request $request)
    {
        $token_id = $request->token_id;
        $token = Token::find($token_id);
        if ($token->update([
            'status' => '1',
        ])) {
            // return TokenResource::collection($token);
        } else {
            return response()->json(['failed' => 'Electricity did\'nt topup'], 202);
        }
    }
}
