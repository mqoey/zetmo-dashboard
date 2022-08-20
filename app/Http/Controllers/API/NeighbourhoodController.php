<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\ClientNeighbourhoodResource;
use App\Http\Resources\NeighbourhoodResource;
use App\Models\ClientNeighbourhood;
use App\Models\Loadshedding;
use App\Models\Neighbourhood;
use App\Models\Stage;
use Illuminate\Http\Request;

class NeighbourhoodController extends Controller
{
    public function index()
    {
        return NeighbourhoodResource::collection(Neighbourhood::all());
    }

    public function search(Request $request){
        $name = $request->name;
        $neighbourhood = Neighbourhood::where('name', 'like', '%' . $name . '%')->get();
        dd($neighbourhood);
    }

    public function store(Request $request){
        if($client=ClientNeighbourhood::create($request->all())){
            return response()->json(['client_id' => $client->client_id, 'neighbourhood_id' => $client->neighbourhood_id],200);
        }
        else{
            return response()->json(['status' => 'failed'],400);

        }
    }

    public function client(Request $request)
    {
        $client_id = $request->client_id;
        $neighbourhood = ClientNeighbourhood::where('client_id', $client_id)->get();
        // dd($neighbourhood->neighbourhood_id);

        // return response()->json([$neighbourhood],200);

        return ClientNeighbourhoodResource::collection($neighbourhood);
    }

    public function stage(Request $request)
    {
        $neighbourhood_id = $request->neighbourhood_id;
        $area = Neighbourhood::where('id', $neighbourhood_id)->pluck('area_id')->first();
        $stage = Loadshedding::where('area_id', $area)->first();
        return response()->json($stage, 200);
    }
}
