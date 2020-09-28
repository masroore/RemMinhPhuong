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
    <!-- {{-- <link href="https://fonts.googleapis.com/css?family={{ theme_option('primary_font', 'Roboto') }}"
    rel="stylesheet" type="text/css">--}} -->
    <!-- CSS Library-->

    <!-- {{--        <style>--}}
{{--            body {font-family: '{{ theme_option('primary_font', 'Roboto') }}', sans-serif !important;}--}}
{{--        </style>--}} -->

    {!! Theme::header() !!}

    <!--HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--WARNING: Respond.js doesn't work if you view the page via file://-->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!--[if IE 7]>
<body class="ie7 lt-ie8 lt-ie9 lt-ie10"><![endif]-->
<!--[if IE 8]>
<body class="ie8 lt-ie9 lt-ie10"><![endif]-->
<!--[if IE 9]>
<body class="ie9 lt-ie10"><![endif]-->

<body>
    <header class="header" id="header">
        <div class="header-top">
            <div class="container">
                <div class="row d-flex align-items-center justify-content-between py-4">
                    <div class="d-flex align-items-center">
                        <i class="icon-phone icon-border"></i>
                        <a class="pl-4" href="tel:1900 1009">
                            <p class="mb-1">Hotline</p>
                            <strong>1900 1009</strong>
                        </a>
                    </div>
                    <div>
                        <img src="{{ Theme::asset()->url('images/logo.png') }}">
                    </div>
                    <div>
                        <ul class="contact">
                            <li>
                                <i class="icon-email font-20"></i>
                                <span>Email: minhphuong@gmail.com</span>
                            </li>
                            <li>
                                <i class="icon-phone font-20"></i>
                                <span>CSKH: 036661287</span>
                            </li>
                            <li>
                                <i class="fas fa-cube font-19"></i>
                                <span><i class="fab fa-facebook-square"></i></span>
                                <span><i class="fab fa-youtube"></i></span>
                                <span><i class="fab fa-google-plus-square"></i></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-menu">
            <div class="container">
                <div class="row">
                    <nav class="navbar navbar-expand-lg navbar-light mb-0 w-100">
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav w-100 d-flex align-items-center justify-content-center">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">Trang Chủ</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Giới Thiệu</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Danh Mục
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#">Rèm vải</a>
                                        <a class="dropdown-item" href="#">Rèm tâm cổ điển</a>
                                        <a class="dropdown-item" href="#">Rèm sáo gỗ</a>
                                        <a class="dropdown-item" href="#">Rèm sáo gỗ</a>
                                        <a class="dropdown-item" href="#">Rèm cầu vồng</a>
                                        <a class="dropdown-item" href="#">Rèm cửa sổ</a>
                                        <a class="dropdown-item" href="#">Rèm cửa sổ</a>
                                        <a class="dropdown-item" href="#">Rèm cửa sổ</a>
                                        <a class="dropdown-item" href="#">Rèm cửa sổ</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Dự Án</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Tư Vấn</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Liên Hệ</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>


    <div id="page-wrap">