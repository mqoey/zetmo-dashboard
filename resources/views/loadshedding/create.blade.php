@extends('layouts.app')
@section('title', 'Load shedding')
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('files/assets/icon/themify-icons/themify-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('files/assets/icon/icofont/css/icofont.css') }}">
    <link rel="stylesheet" href="{{ asset('files/bower_components/select2/css/select2.min.css') }}" />
    <link rel="stylesheet" type="text/css"
        href="{{ asset('files/bower_components/bootstrap-multiselect/css/bootstrap-multiselect.css') }}" />
    <link rel="stylesheet" type="text/css"
        href="{{ asset('files/bower_components/multiselect/css/multi-select.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('files/assets/css/pages.css') }}">
@endsection
@section('content')
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                @if (session()->has('success'))
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
                                    <h5>Add Load shedding</h5>
                                </div>
                                <div class="card-block">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="wizard">
                                                <section>
                                                    <form class="wizard-form" id="example-advanced-form"
                                                        action="{{ route('loadsheddings.store') }}" method="POST">
                                                        @csrf
                                                        @if (!$areas)
                                                            <fieldset>
                                                                <div class="form-group row">
                                                                    <div class="col-md-4 col-lg-2">
                                                                        <label for="userName-2" class="block">Select
                                                                            Municipality
                                                                            *</label>
                                                                    </div>
                                                                    <div class="col-md-8 col-lg-10">
                                                                        <div class="col-sm-12 col-xl-4 m-b-30">
                                                                            <select name="municipality_id"
                                                                                class="js-example-basic-multiple col-sm-12 required form-control">
                                                                                @foreach ($municipalities as $municipality)
                                                                                    {
                                                                                    <option
                                                                                        value="{{ $municipality->id }}">
                                                                                        {{ $municipality->name }}
                                                                                    </option>
                                                                                    }
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <div class="col-md-4 col-lg-2">
                                                                    </div>
                                                                    <div class="col-md-8 col-lg-10">
                                                                        <button type="submit" class="btn btn-primary">
                                                                            Select Municipality
                                                                        </button>
                                                                        <br>
                                                                    </div>
                                                                </div>
                                                            </fieldset>
                                                        @else
                                                            <fieldset>
                                                                <div class="form-group row">
                                                                    <div class="col-md-4 col-lg-2">
                                                                        <label for="userName-2" class="block">Municipality
                                                                            *</label>
                                                                    </div>
                                                                    <div class="col-md-8 col-lg-10">
                                                                        <div class="col-sm-12 col-xl-4 m-b-30">
                                                                            {{ $municipality->name }}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <div class="col-md-4 col-lg-2">
                                                                        <label for="userName-2" class="block">Area name
                                                                            *</label>
                                                                    </div>
                                                                    <div class="col-md-8 col-lg-10">
                                                                        <div class="col-sm-12 col-xl-4 m-b-30">
                                                                            <select name="area_id"
                                                                                class="js-example-basic-multiple col-sm-12 required form-control">
                                                                                @foreach ($areas as $area)
                                                                                    {
                                                                                    <option value="{{ $area->id }}">
                                                                                        {{ $area->name }}</option>
                                                                                    }
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <div class="col-md-4 col-lg-2">
                                                                        <label for="userName-2" class="block">Stage number
                                                                            *</label>
                                                                    </div>
                                                                    <div class="col-md-8 col-lg-10">
                                                                        <div class="col-sm-12 col-xl-4 m-b-30">
                                                                            <select name="stage_id"
                                                                                class="js-example-basic-multiple col-sm-12 required form-control">
                                                                                @foreach ($stages as $stage)
                                                                                    {
                                                                                    <option value="{{ $stage->id }}">
                                                                                        Stage: {{ $stage->name }} -------
                                                                                        Hours: {{ $stage->hours }}</option>
                                                                                    }
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <div class="col-md-4 col-lg-2">
                                                                        <label for="userName-2" class="block">Day name
                                                                            *</label>
                                                                    </div>
                                                                    <div class="col-md-8 col-lg-10">
                                                                        <div class="col-sm-12 col-xl-4 m-b-30">
                                                                            <select name="day"
                                                                                class="js-example-basic-multiple col-sm-12 required form-control">
                                                                                <option value="Sunday">Sunday</option>
                                                                                <option value="Monday">Monday</option>
                                                                                <option value="Tuesday">Tuesday</option>
                                                                                <option value="Wednesday">Wednesday</option>
                                                                                <option value="Thursday">Thursday</option>
                                                                                <option value="Friday">Friday</option>
                                                                                <option value="Saturday">Saturday</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <div class="col-md-4 col-lg-2">
                                                                        <label for="userName-2" class="block">Switch off
                                                                            </label>
                                                                    </div>
                                                                    <div class="col-md-4 col-lg-4">
                                                                        <input id="userName-2" required name="off"
                                                                            type="time" class="required form-control">
                                                                    </div>
                                                                    <div class="col-md-4 col-lg-2">
                                                                        <label for="userName-2" class="block">Switch on</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-lg-4">
                                                                        <input id="userName-2" required name="on"
                                                                            type="time" class="required form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <div class="col-md-4 col-lg-2">
                                                                    </div>
                                                                    <div class="col-md-8 col-lg-10">
                                                                        <button type="submit" class="btn btn-primary">
                                                                            Add
                                                                            Load Shed
                                                                        </button>
                                                                        <br>
                                                                    </div>
                                                                </div>
                                                            </fieldset>
                                                        @endif
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
