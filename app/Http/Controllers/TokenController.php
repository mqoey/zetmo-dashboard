<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Tarrif;
use App\Models\Token;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TokenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('tokens.index')
        ->with('tokens', Token::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('tokens.create')
            ->with('clients', Client::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $current_tarrif = Tarrif::where('update_id', 1)->pluck('price')->first();

        $client_id = $request->client_id;
        $amount_paid = $request->amount_paid;
        $power_bought = floatval($amount_paid) / floatval($current_tarrif) ;
        $token_number = "4567" . random_int(100000,999999) . "0673";

        Token::create([
            'client_id' => $client_id,
            'amount_paid' => $amount_paid,
            'power_bought' => $power_bought,
            'token_number' => $token_number,
        ]);
        return back()->with('success',"Token has been purchased!!");
    }

    /**
     * Display the specified resource.
     *
     * @param Token $token
     * @return Response
     */
    public function show(Token $token)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Token $token
     * @return Response
     */
    public function edit(Token $token)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Token $token
     * @return Response
     */
    public function update(Request $request, Token $token)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Token $token
     * @return Response
     */
    public function destroy(Token $token)
    {
        //
    }
}
