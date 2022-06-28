<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\NeighbourhoodResource;
use App\Models\ClientNeighbourhood;
use App\Models\Neighbourhood;
use Illuminate\Http\Request;

class NeighbourhoodController extends Controller
{
    public function index()
    {
        return NeighbourhoodResource::collection(Neighbourhood::all());
    }

    public function store(Request $request){
        ClientNeighbourhood::create($request->all());
    }
}
