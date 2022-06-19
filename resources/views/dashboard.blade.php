@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">
                <div class="row">
                    <div class="col-xl-4 col-md-6">
                        <div class="card prod-p-card card-red">
                            <div class="card-body">
                                <div class="row align-items-center m-b-30">
                                    <div class="col">
                                        <h6 class="m-b-5 text-white">Total Clients</h6>
                                        <h3 class="m-b-0 f-w-700 text-white">{{ $clients }}</h3>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-users text-c-red f-18"></i>
                                    </div>
                                </div>
                                <a href="{{route('clients.index')}}">
                                    <p class="m-b-0 text-white">View More<span class="label label-danger m-r-10">CLIENTS</span></p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="card prod-p-card card-blue">
                            <div class="card-body">
                                <div class="row align-items-center m-b-30">
                                    <div class="col">
                                        <h6 class="m-b-5 text-white">Total Users</h6>
                                        <h3 class="m-b-0 f-w-700 text-white">{{ $users }}</h3>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-user text-c-blue f-18"></i>
                                    </div>
                                </div>
                                <a href="{{route('users')}}">
                                    <p class="m-b-0 text-white">View More<span class="label label-primary m-r-10">USERS</span></p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="card prod-p-card card-green">
                            <div class="card-body">
                                <div class="row align-items-center m-b-30">
                                    <div class="col">
                                        <h6 class="m-b-5 text-white">Tokens sold</h6>
                                        <h3 class="m-b-0 f-w-700 text-white">{{ $tokens }}</h3>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-money-bill-alt text-c-green f-18"></i>
                                    </div>
                                </div>
                                <a href="{{route('tokens.index')}}">
                                    <p class="m-b-0 text-white">View More<span class="label label-success m-r-10">TOKENS</span></p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
