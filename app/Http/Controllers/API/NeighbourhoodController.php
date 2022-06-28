<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\NeighbourhoodResource;
use App\Models\Neighbourhood;
use Illuminate\Http\Request;

class NeighbourhoodController extends Controller
{
    public function index()
    {
        // return response()->json(Neighbourhood::all());
        return NeighbourhoodResource::collection(Neighbourhood::all());
    }
}
