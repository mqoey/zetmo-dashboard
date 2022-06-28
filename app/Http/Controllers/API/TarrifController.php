<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Tarrif;
use Illuminate\Http\Request;

class TarrifController extends Controller
{
    public function index()
    {
        return response()->json(Tarrif::all(), 200);
    }
}
