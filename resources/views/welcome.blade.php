<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env("APP_NAME")}}</title>
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
</head>
<body>
    <div class="container-fluid">
        <div class="row" style="height: 506px">
            <x-mobile img="/img/spider.jpg"/>
            <x-mobile img="/img/spider.jpg" phone="ios" />
            <x-mobile img="/img/spider.jpg"/>
            <x-mobile img="/img/spider.jpg" phone="ios" />
            <x-mobile img="/img/spider.jpg"/>
        </div>
        <div class="row"><h1>reza</h1></div>
    </div>
</body>
</html>