<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Municipality;
use App\Models\Neighbourhood;
use Illuminate\Http\Request;

class NeighbourhoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('neighbourhoods.index')
            ->with('neighbourhoods', Neighbourhood::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('neighbourhoods.create')
            ->with('areas', "")
            ->with('municipalities', Municipality::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $area_id = $request->area_id;
        $municipality_id = $request->municipality_id;

        if (!$area_id) {
            $areas = Area::where('municipality_id', $municipality_id)->get();
            $municipality = Municipality::where('id', $municipality_id)->first();
            return view('neighbourhoods.create')
                ->with('municipality', $municipality)
                ->with('areas', $areas);
        }

        if (Neighbourhood::create($request->all())) {
            return back()->with('success', "Neighbourhood has been added!!");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Neighbourhood  $neighbourhood
     * @return \Illuminate\Http\Response
     */
    public function show(Neighbourhood $neighbourhood)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Neighbourhood  $neighbourhood
     * @return \Illuminate\Http\Response
     */
    public function edit(Neighbourhood $neighbourhood)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Neighbourhood  $neighbourhood
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Neighbourhood $neighbourhood)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Neighbourhood  $neighbourhood
     * @return \Illuminate\Http\Response
     */
    public function destroy(Neighbourhood $neighbourhood)
    {
        //
    }
}
