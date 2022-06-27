@extends('layouts.app')
@section('title', 'Stages')
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('files/assets/icon/themify-icons/themify-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('files/assets/icon/icofont/css/icofont.css') }}">
    <link rel="stylesheet" href="{{ asset('files/bower_components/select2/css/select2.min.css') }}"/>
    <link rel="stylesheet" type="text/css"
          href="{{ asset('files/bower_components/bootstrap-multiselect/css/bootstrap-multiselect.css') }}"/>
    <link rel="stylesheet" type="text/css"
          href="{{ asset('files/bower_components/multiselect/css/multi-select.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('files/assets/css/pages.css') }}">
@endsection
@section('content')
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">@if (session()->has('success'))
                                    <div class="alert alert-success background-success">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <i class="icofont icofont-close-line-circled text-white"></i>
                                        </button>
                                        <strong>Success!</strong> {{ session()->get('success') }}
                                    </div>
                                @endif
                                @if (session()->has('failed'))
                                    <div class="alert alert-danger background-danger">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <i class="icofont icofont-close-line-circled text-white"></i>
                                        </button>
                                        <strong>Failed!</strong> {{ session()->get('failed') }}
                                    </div>
                                @endif
                                <div class="card-header">
                                    <h5>Add Stage</h5>
                                </div>
                                <div class="card-block">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="wizard">
                                                <section>
                                                    <form class="wizard-form" id="example-advanced-form"
                                                          action="{{route('stages.store')}}" method="POST">
                                                        @csrf
                                                        <fieldset>
                                                            <div class="form-group row">
                                                                <div class="col-md-4 col-lg-2">
                                                                    <label for="userName-2" class="block">Stage Number
                                                                        *</label>
                                                                </div>
                                                                <div class="col-md-8 col-lg-10">
                                                                    <input id="userName-2" required name="name"
                                                                           type="number"
                                                                           class="required form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-md-4 col-lg-2">
                                                                    <label for="userName-2" class="block">Hours
                                                                        *</label>
                                                                </div>
                                                                <div class="col-md-8 col-lg-10">
                                                                    <input id="userName-2" required name="hours"
                                                                           type="number"
                                                                           class="required form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-md-4 col-lg-2">
                                                                </div>
                                                                <div class="col-md-8 col-lg-10">
                                                                    <button type="submit" class="btn btn-primary"> Add Stage
                                                                    </button>
                                                                    <br>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                    </form>
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
