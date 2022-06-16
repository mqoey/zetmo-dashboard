<?php

namespace App\Http\Controllers;

use App\Models\Tarrif;
use Illuminate\Http\Request;

class TarrifController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tarrifs');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tarrif  $tarrif
     * @return \Illuminate\Http\Response
     */
    public function show(Tarrif $tarrif)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tarrif  $tarrif
     * @return \Illuminate\Http\Response
     */
    public function edit(Tarrif $tarrif)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tarrif  $tarrif
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tarrif $tarrif)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tarrif  $tarrif
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tarrif $tarrif)
    {
        //
    }
}
