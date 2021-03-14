<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-sm navbar-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Brand/logo -->
            <a class="navbar-brand ml2" href="#">
                <img src="{{ asset('/img/logo.png') }}" alt="logo" style="width:40px;" class="rounded">
            </a>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav mr-3">
                    <li class="nav-item cool-link">
                        <a class="nav-link" href="#">خانه</a>
                    </li>
                    <li class="nav-item cool-link">
                        <a class="nav-link" href="#">تماس با من</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="row mx-auto">
            <div class="col align-self-center mx-5">
                <h1>ایران بدن</h1>
                <p class="ml-5 mt-2">محتوای به‌روز و سامانه قدرتمند برای مدیران و مربیان باشگاه‌های بدنسازی و فیتنس،
                    مربیان آنلاین،
                    کلینیک‌های ورزش و تغذیه، و ورزشکاران</p>
                <div class="col-md mx-auto">
                    <div class="col-md d-flex justify-content-center my-1">
                        <button class="btn btn-outline-success col-md-4">Button 1</button>
                    </div>
                    <div class="col-md d-flex justify-content-center my-1">
                        <button class="btn btn-outline-danger col-md-4">Button 2</button>
                    </div>
                </div>
            </div>
            <div class="col d-flex p-0 position-relative">
                <img src="{{ asset('img/Sohrab_3.png') }}" alt="Sohrab_3" class="img-fluid mx-auto">
            </div>
        </div>

        <div class="row mx-auto">
            <div class="deb_service_block ">
                <i class="fa fa-eye"></i>
                <h4>مدیر و مربی باشگاه</h4>
                <p>دیگه وقتشه خدماتت رو بصورت آنلاین و مدرن ارائه بدی!</p>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
