<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="title" content="اندرویدنویسان">
    <meta name="description" content="اندرویدنویسان">
    <meta name="keywords"
          content="برنامه نویسی,رضا پارسیان,سهراب فلاح زاده,سورس,کیبورد ازاد,api,برنامه ازاد,open sorce,خون قلم,سیشارپ,php,C#,جاوا اسکریپت,افزونه,MQL,فارکس,forex,sql,دیتابیس,داده کاوی">
    <meta name="robots" content="index, follow">
    <meta name="language" content="English">
    <meta name="author" content="رضا پارسیان و سهراب فلاح زاده">

    <meta property="og:title" content="اندرویدنویسان">
    <meta property="og:description" content="اندرویدنویسان">
    <meta property="og:image" content="https://androidnevisan.ir/favicon.ico">
    <meta property="og:url" content="https://androidnevisan.ir/">

    <meta name="twitter:title" content="اندرویدنویسان">
    <meta name="twitter:description" content="اندرویدنویسان">
    <meta name="twitter:image" content="https://androidnevisan.ir/favicon.ico">

    <link rel="shortcut icon" href="{{asset("favicon.ico")}}">

    <title>{{ env('APP_NAME') }} @yield('ex-title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
<div class="container" id="app">
    @include('layout.nav')

    @yield('content')
</div>

<script src="{{ asset('js/app.js') }}"></script>
@yield("ex-js")
</body>
</html>
