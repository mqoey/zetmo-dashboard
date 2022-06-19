<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Token;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('dashboard')
        ->with('users', User::all()->count())
        ->with('clients', Client::all()->count())
        ->with('tokens', Token::all()->count());
    }
}
