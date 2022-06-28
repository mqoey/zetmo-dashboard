<?php

namespace App\Http\Controllers;

use App\Models\Tarrif;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class TarrifController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $old_tarrif = Tarrif::where('update_id', 2)->first();
        $new_tarrif = Tarrif::where('update_id', 1)->first();
        return view('tarrifs')
            ->with('old_tarrif', $old_tarrif)
            ->with('new_tarrif', $new_tarrif);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        if(Tarrif::create($request->all())){
            DB::table('tarrifs')->increment('update_id', 1);
            return back()->with('success',"Tarrif has been updated!!");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param Tarrif $tarrif
     * @return Response
     */
    public function show(Tarrif $tarrif)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Tarrif $tarrif
     * @return Response
     */
    public function edit(Tarrif $tarrif)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Tarrif $tarrif
     * @return Response
     */
    public function update(Request $request, Tarrif $tarrif)
    {
        dd($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Tarrif $tarrif
     * @return Response
     */
    public function destroy(Tarrif $tarrif)
    {
        //
    }
}
