<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <title>ZETMO | @yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="icon" href="{{ asset('files/assets/images/favicon.ico') }}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('files/bower_components/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('files/assets/pages/waves/css/waves.min.css') }}" type="text/css"
        media="all">
    <link rel="stylesheet" type="text/css" href="{{ asset('files/assets/icon/feather/css/feather.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('files/assets/css/font-awesome-n.min.css') }}">
    <link rel="stylesheet" href="{{ asset('files/bower_components/chartist/css/chartist.css') }}" type="text/css"
        media="all">
    <link rel="stylesheet" type="text/css" href="{{ asset('files/assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('files/assets/css/widget.css') }}">
    @yield('styles')
</head>

<body>
    <div class="loader-bg">
        <div class="loader-bar"></div>
    </div>
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            @include('navs.header')
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    @include('navs.nav_list')
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @yield('scripts')
    <script type="text/javascript" src="{{ asset('files/bower_components/jquery/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('files/bower_components/jquery-ui/js/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('files/bower_components/popper.js/js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('files/bower_components/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('files/assets/pages/waves/js/waves.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js') }}">
    </script>
    <script src="{{ asset('files/assets/pages/chart/float/jquery.flot.js') }}"></script>
    <script src="{{ asset('files/assets/pages/chart/float/jquery.flot.categories.js') }}"></script>
    <script src="{{ asset('files/assets/pages/chart/float/curvedLines.js') }}"></script>
    <script src="{{ asset('files/assets/pages/chart/float/jquery.flot.tooltip.min.js') }}"></script>
    <script src="{{ asset('files/assets/pages/widget/amchart/amcharts.js') }}"></script>
    <script src="{{ asset('files/assets/pages/widget/amchart/serial.js') }}"></script>
    <script src="{{ asset('files/assets/pages/widget/amchart/light.js') }}"></script>
    <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="{{ asset('files/assets/pages/google-maps/gmaps.js') }}"></script>
    <script src="{{ asset('files/assets/js/pcoded.min.js') }}"></script>
    <script src="{{ asset('files/assets/js/vertical/vertical-layout.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('files/assets/pages/dashboard/crm-dashboard.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('files/assets/js/script.min.js') }}"></script>
</body>

</html>
