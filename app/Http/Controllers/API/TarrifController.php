<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Tarrif;
use Illuminate\Http\Request;

class TarrifController extends Controller
{
    public function index()
    {
        $new_tarrif = Tarrif::where('update_id', 1)->pluck('price')->first();
        $new_date = Tarrif::where('update_id', 1)->pluck('updated_at')->first();
        $id = Tarrif::where('update_id', 1)->pluck('id')->first();
        return response()->json(
            [
                'id' => $id,
                'price' => $new_tarrif,
                'date' => $new_date->toDateString()
            ],
            200
        );
    }
}
