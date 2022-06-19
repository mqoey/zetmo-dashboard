@extends('layouts.app')
@section('title', 'Tokens')
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
                                    <h5>Sale Token</h5>
                                </div>

                                <div class="card-block">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="wizard">
                                                <section>
                                                    <form class="wizard-form" id="example-advanced-form"
                                                          action="{{route('tokens.store')}}" method="POST">
                                                        @csrf
                                                        <fieldset>
                                                            <div class="form-group row">
                                                                <div class="col-md-4 col-lg-2">
                                                                    <label for="userName-2" class="block">Client name
                                                                        *</label>
                                                                </div>
                                                                <div class="col-md-8 col-lg-10">
                                                                    <div class="col-sm-12 col-xl-4 m-b-30">
                                                                        <select name="client_id"
                                                                                class="js-example-basic-multiple col-sm-12 required form-control">
                                                                            @foreach($clients as $client)
                                                                                {
                                                                                <option
                                                                                    value="{{$client->id}}">{{$client->name}}</option>
                                                                                }
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-md-4 col-lg-2">
                                                                    <label for="userName-2" class="block">Amount paid
                                                                        *</label>
                                                                </div>
                                                                <div class="col-md-8 col-lg-10">
                                                                    <input id="userName-2" required name="amount_paid"
                                                                           type="text"
                                                                           class="required form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-md-4 col-lg-2">
                                                                </div>
                                                                <div class="col-md-8 col-lg-10">
                                                                    <button type="submit" class="btn btn-primary"> Sale
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
@section('scripts')

    <script type="text/javascript" src="{{ asset('files/bower_components/modernizr/js/modernizr.js') }}"></script>
    <script type="text/javascript" src="{{ asset('files/bower_components/modernizr/js/css-scrollbars.js') }}"></script>

    <script type="text/javascript" src="{{ asset('files/bower_components/select2/js/select2.full.min.js') }}"></script>

    <script type="text/javascript"
            src="{{ asset('files/bower_components/bootstrap-multiselect/js/bootstrap-multiselect.js') }}">
    </script>
    <script type="text/javascript"
            src="{{ asset('files/bower_components/multiselect/js/jquery.multi-select.js') }}"></script>
    <script type="text/javascript" src="{{ asset('files/assets/js/jquery.quicksearch.js') }}"></script>

    <script type="text/javascript" src="{{ asset('files/assets/pages/advance-elements/select2-custom.js') }}"></script>
    <script src="{{ asset('files/assets/js/pcoded.min.js') }}"></script>
    <script src="{{ asset('files/assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
@endsection
@endsection
