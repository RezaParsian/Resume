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
    {{-- <nav class="navbar navbar-expand-sm navbar-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
        <!-- Brand/logo -->
        <a class="navbar-brand ml2" href="#">
            <img src="{{ asset('/img/sohrab.png') }}" alt="logo" style="width:40px;" class="rounded">
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
    </nav> --}}
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>    
          </ul>
        </div>  
      </nav>

    {{-- <div class="container-fluid mt-3">
        <div class="row px-5" style="height: 506px;direction:ltr">
            <x-mobile img="/img/sohrab.png" zindex="-7" />
            <x-mobile img="/img/46934941.jpg" phone="ios" />
            <div class="col ml-5 px-5 text-dark">
                <div class="col">
                    <div class="col mt-5"><h1>Title Here</h1></div>
                    <div class="col mt-5">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit ullam quis numquam ad nisi voluptates fuga, obcaecati alias recusandae corrupti non dolores mollitia voluptate consectetur natus! Eaque, optio quia. Repudiandae.</div>
                    <div class="col mt-5">
                        <div class="col mt-2">
                            <button class="btn col-4 btn-outline-success">Btn 1</button>
                        </div>
                        <div class="col mt-2">
                            <button class="btn col-4 btn-outline-danger">Btn 2</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="box">
                <h1>reza</h1>
            </div>
        </div>
    </div> --}}
</body>

</html>
