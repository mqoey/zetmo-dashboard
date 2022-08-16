<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\TokenResource;
use App\Models\Client;
use App\Models\Tarrif;
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

    public function purchaseToken(Request $request){

        // dd($request->all());
        $current_tarrif = Tarrif::where('update_id', 1)->pluck('price')->first();

        $client_id = $request->client_id;
        $amount_paid = $request->amount_paid;
        $power_bought = floatval($amount_paid) / floatval($current_tarrif) ;
        $token_number = "4567" . random_int(100000,999999) . "0673";

        $token = Token::create([
            'client_id' => $client_id,
            'amount_paid' => $amount_paid,
            'power_bought' => $power_bought,
            'token_number' => $token_number,
        ]);
        return response()->json($token, 200);
    }

    public function useToken(Request $request)
    {
        $tokens = Token::where('id', $request->token_id)->get();
        $token_id = $request->token_id;
        $token = Token::find($token_id);
        if ($token->update([
            'status' => '1',
        ])) {
            // return response()->json($token, 200);
            return TokenResource::collection($tokens);
        } else {
            return response()->json(['failed' => 'Electricity did\'nt topup'], 202);
        }
    }
}
