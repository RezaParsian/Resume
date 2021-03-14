<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }} @yield('ex-title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="container" id="app">
        <nav class="navbar navbar-expand-sm navbar-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Brand/logo -->
            <a class="navbar-brand ml2" href="#">
                <img src="{{ asset('/img/logo.png') }}" alt="{{ env('APP_NAME') }}" style="width:5rem;" class="rounded">
            </a>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav mr-3">
                    <li class="mx-2 nav-item cool-link active">
                        <a class="nav-link" href="#">خانه</a>
                    </li>
                    <li class="mx-2 nav-item cool-link">
                        <a class="nav-link" href="#">تماس با من</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="row mx-auto">
            <div class="col align-self-center mx-5">
                <h1 class="text-right">ایران بدن</h1>
                <p class="text-right ml-5 mt-2">محتوای به‌روز و سامانه قدرتمند برای مدیران و مربیان باشگاه‌های بدنسازی و
                    فیتنس،
                    مربیان آنلاین،
                    کلینیک‌های ورزش و تغذیه، و ورزشکاران</p>
                <div class="col-md mx-auto">
                    <div class="col-md d-flex justify-content-center my-1">
                        <button class="btn btn-success rounded-pill col-md-4">بیشتر</button>
                    </div>
                </div>
            </div>
            <div class="col d-flex p-0 position-relative">
                <img src="{{ asset('img/Sohrab_3.png') }}" alt="Sohrab_3" class="img-fluid mx-auto">
            </div>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
