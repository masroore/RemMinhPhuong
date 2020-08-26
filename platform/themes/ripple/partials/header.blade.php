<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7" lang="{{ app()->getLocale() }}"><![endif]-->
<!--[if IE 8]><html class="ie ie8" lang="{{ app()->getLocale() }}"><![endif]-->
<!--[if IE 9]><html class="ie ie9" lang="{{ app()->getLocale() }}"><![endif]-->
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="format-detection" content="telephone=no">
        <meta name="apple-mobile-web-app-capable" content="yes">

        <!-- Fonts-->
        <link href="https://fonts.googleapis.com/css?family={{ theme_option('primary_font', 'Roboto') }}" rel="stylesheet" type="text/css">
        <!-- CSS Library-->

        <style>
            body {font-family: '{{ theme_option('primary_font', 'Roboto') }}', sans-serif !important;}
        </style>

        {!! Theme::header() !!}

        <!--HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
        <!--WARNING: Respond.js doesn't work if you view the page via file://-->
        <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->
    </head>
    <!--[if IE 7]><body class="ie7 lt-ie8 lt-ie9 lt-ie10"><![endif]-->
    <!--[if IE 8]><body class="ie8 lt-ie9 lt-ie10"><![endif]-->
    <!--[if IE 9]><body class="ie9 lt-ie10"><![endif]-->
    <body>
    <header class="header" id="header">
        <div class="container">
            <div class="row">
                <div>
                    <i class="fas fa-phone-volume"></i>
                    <a href="tel:1900 1009">
                        <p>Hotline</p>
                        <span>1900 1009</span>
                    </a>
                </div>
                <div>
                    <img src="{{ Theme::asset()->url('images/logo.png') }}">
                </div>
                <div>
                    <ul>
                        <li>
                            <i class="fas fa-envelope"></i>
                            <span>Email: minhphuong@gmail.com</span>
                        </li>
                        <li>
                            <i class="fas fa-phone-volume"></i>
                            <span>CSKH: 036661287</span>
                        </li>
                        <li>
                            <i class="fas fa-cube"></i>
                            <span><i class="fab fa-facebook-square"></i></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <div id="page-wrap">
