<!DOCTYPE html>
<html lang="en-us" class="no-js">
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <title>ZETMO | Page not found</title>

    <link rel="shortcut icon" href="{{ asset('files/assets/images/favicon.ico') }}">

    <link rel="stylesheet" type="text/css" href="{{asset('files/extra-pages/404/1/css/style.css')}}"/>
</head>
<body class="bubble">
<canvas id="canvasbg"></canvas>
<canvas id="canvas"></canvas>
<div class="content">
    <div class="content-box">

        <div class="big-content">

            <div class="list-square">
                <span class="square"></span>
                <span class="square"></span>
                <span class="square"></span>
            </div>

            <div class="list-line">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </div>

            <i class="fa fa-search color" aria-hidden="true"></i>

            <div class="clear"></div>

        </div>

        <h1>Oops! Error 404 not found.</h1>
        <p>The page you were looking for doesn't exist.
            <br> We think the page may have moved.</p>
    </div>
</div>
<a href="{{ url()->previous() }}" class="logo-link" title="back home">
    <button class="btn btn-primary"> Return back </button>
</a>
<footer class="light">
    <ul>
        <li><a href="#">Support</a></li>
        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
    </ul>
</footer>
<script src="{{asset('files/extra-pages/404/1/js/jquery.min.js"')}}></script>
<script src="{{asset('files/extra-pages/404/1/js/bootstrap.min.js"')}}></script>

<script src="{{asset('files/extra-pages/404/1/js/bubble.js')}}"></script>
</body>

</html>
