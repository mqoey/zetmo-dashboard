<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Token;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard')
        ->with('users', User::all()->count())
        ->with('clients', Client::all()->count())
        ->with('tokens', Token::all()->count());
    }
}
