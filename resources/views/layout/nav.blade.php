<nav class="navbar navbar-expand-sm navbar-light mb-4 sticky-top" style="background: #f8fafc">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Brand/logo -->
    <a class="navbar-brand ml2" href="{{route("blog.index")}}">
        <img src="{{ asset('/img/logo.png') }}" alt="{{ env('APP_NAME') }}" style="width:5rem;" class="rounded">
    </a>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav mr-3">
            <li class="mx-2 nav-item cool-link active text-center">
                <a class="nav-link" href="{{route("blog.index")}}">خانه</a>
            </li>
            <li class="mx-2 nav-item cool-link text-center">
                <a class="nav-link" href="#">روزمه</a>
            </li>
            <li class="mx-2 nav-item cool-link text-center">
                <a class="nav-link" href="#">تماس با من</a>
            </li>
        </ul>
    </div>
</nav>
