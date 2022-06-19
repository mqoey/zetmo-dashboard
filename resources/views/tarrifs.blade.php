@extends('layouts.app')
@section('title', 'Tariffs')
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('files/bower_components/sweetalert/css/sweetalert.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('files/assets/icon/themify-icons/themify-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('files/assets/icon/icofont/css/icofont.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('files/assets/css/component.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('files/assets/css/pages.css')}}">
@endsection
@section('content')
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">
                <div class="row">
                    <div class="col-xl-4 col-md-6">
                        <div class="">
                            <div class="card-body">
                                <div class="row align-items-center m-b-30">
                                    <div class="col">
                                    </div>
                                    <div class="col-auto">
                                        <i class=""></i>
                                    </div>
                                </div>
                                <p class="m-b-0 text-white"><span></span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="card prod-p-card card-blue">
                            <div class="card-body">
                                @if (session()->has('success'))
                                    <div class="alert alert-success background-success">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <i class="icofont icofont-close-line-circled text-white"></i>
                                        </button>
                                        <strong>Success!</strong> {{ session()->get('success') }}
                                        <br>
                                    </div>
                                @endif
                                @if (session()->has('failed'))
                                    <div class="alert alert-danger background-danger">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <i class="icofont icofont-close-line-circled text-white"></i>
                                        </button>
                                        <strong>Failed!</strong> {{ session()->get('failed') }}
                                        <br>
                                    </div>
                                @endif
                                <div class="row align-items-center m-b-30">
                                    <div class="col">
                                        <h6 class="m-b-5 text-white">Current Tarrifs</h6>
                                        <h3 class="m-b-0 f-w-700 text-white">${{$new_tarrif->price}} - 1kw\h</h3>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-money-bill-alt text-c-blue f-18"></i>
                                    </div>
                                </div>
                                <p class="m-b-0 text-white">Previous Tarrifs<span class="label label-primary m-r-10">${{$old_tarrif->price}} - 1kw\h</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="">
                            <div class="card-body">
                                <div class="row align-items-center m-b-30">
                                    <div class="col">
                                    </div>
                                    <div class="col-auto">
                                        <i class=""></i>
                                    </div>
                                </div>
                                <p class="m-b-0 text-white"><span></span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-md-6">
                        <div class="">
                            <div class="card-body">
                                <div class="row align-items-center m-b-30">
                                    <div class="col">
                                    </div>
                                    <div class="col-auto">
                                        <i class=""></i>
                                    </div>
                                </div>
                                <p class="m-b-0 text-white"><span></span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="text-center col">
                            <button type="button" class="btn btn-primary waves-effect md-trigger"
                                    data-modal="modal"> Update
                            </button>
                            <div class="md-modal md-effect-4" id="modal">
                                <div class="md-content">
                                    <h3>Update Tarrif</h3>
                                    <div>
                                        <p>Enter the new price:</p>
                                        <form action="{{route('tarrifs')}}" method="POST">
                                            @csrf
                                            <div class="row form-group">
                                                <div class="col-sm-3">
                                                    <label class="col-form-label">Tarrif ( $\1kw )</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="number" name="price" required class="form-control autonumber" data-a-sign="$">
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary waves-effect ">Update</button>
                                            <button type="button" class="btn btn-danger waves-effect md-close">Close
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="">
                            <div class="card-body">
                                <div class="row align-items-center m-b-30">
                                    <div class="col">
                                    </div>
                                    <div class="col-auto">
                                        <i class=""></i>
                                    </div>
                                </div>
                                <p class="m-b-0 text-white"><span></span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@section('scripts')

    <script type="text/javascript" src="{{ asset('files/bower_components/modernizr/js/modernizr.js')}}"></script>
    <script type="text/javascript" src="{{ asset('files/bower_components/modernizr/js/css-scrollbars.js')}}"></script>

    <script type="text/javascript" src="{{ asset('files/bower_components/sweetalert/js/sweetalert.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('files/assets/js/modal.js')}}"></script>


    <script src="{{ asset('files/assets/js/classie.js')}}"></script>
    <script type="text/javascript" src="{{ asset('files/assets/js/modalEffects.js')}}"></script>
    <script src="{{ asset('files/assets/js/pcoded.min.js')}}"></script>
    <script src="{{ asset('files/assets/js/vertical/vertical-layout.min.js')}}"></script>
    <script src="{{ asset('files/assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>

@endsection
@endsection
