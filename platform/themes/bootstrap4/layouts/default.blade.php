<!DOCTYPE html>
<!--[if IE 8]>
<html lang="{{ app()->getLocale() }}" class="ie8 no-js" class="h-100"> <![endif]-->
<!--[if IE 9]>
<html lang="{{ app()->getLocale() }}" class="ie9 no-js" class="h-100"> <![endif]-->
<!--[if !IE]><!-->
<html lang="{{ app()->getLocale() }}" class="h-100">
<!--<![endif]-->
<head>
    <meta charset="utf-8">

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-language" content="{{ config('app.locale') }}">

    @if (!empty($additional_meta['canonical']))
        <link rel="canonical" href="{{ $additional_meta['canonical'] }}"/>
    @else
        <link rel="canonical" href="{{ url()->current() }}"/>
    @endif
    <meta name="keywords" content="@yield('keywords')">
    @if (!empty($additional_meta['pagination']))
        {!! $additional_meta['pagination'] !!}
    @endif

    <!-- LD JSON -->
    @if (!empty($additional_meta['local_business']))
        {!! $additional_meta['local_business'] !!}
    @else
        {!! local_business() !!}
    @endif

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap&subset=vietnamese" rel="stylesheet">

    {!! Theme::header() !!}
    <style>
        <?php include(public_path() . '/themes/' . Theme::getThemeName() . '/css/app.css'); ?>
    </style>
</head>
<body class="@if (Request::url() == url('/')) homepage @endif">
<!-- ##### Header Area Start ##### -->
{!! Theme::partial('header') !!}

{!! Theme::content() !!}

{!! Theme::partial('footer') !!}

{{--{!! Theme::footer() !!}--}}
</body>
</html>
