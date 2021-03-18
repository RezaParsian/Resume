@extends('layout.master')

@section('content')
    <div class="col mx-auto my-5">
        <div class="row">
            <div class="col-lg d-flex p-0">
                <img src="{{asset("img/upload/".$portfolio->imagej)}}" alt="{{$portfolio->title}}" class="img-fluid mx-auto">
            </div>
            <div class="col-lg align-self-center mx-md-5 d-flex  justify-content-right">
                <ul>
                    @foreach(json_decode($portfolio->properties) as $item)
                        <li class="text-right">{{$item}}</li>
                    @endforeach
                </ul>
            </div>
        </div>

        @php
        $links=json_decode($portfolio->links);
        @endphp
        <div class="col-lg-8 d-flex mx-auto">
            <a class="mx-2" href="{{$links[0]}}" target="_blank">
                <img
                    class="img-fluid"
                    src="{{asset("img/bazaar.png")}}"
                    title="دانلود از بازار"
                    alt="دانلود از بازار"
                >
            </a>

            <a class="mx-2" href="{{$links[1]}}" target="_blank">
                <img
                    class="img-fluid"
                    src="{{asset("img/google-play-badge.png")}}"
                    title="دانلود از گوگل‌پلی"
                    alt="دانلود از گوگل‌پلی"
                >
            </a>
            <a class="mx-2" href="{{$links[2]}}" target="_blank">
                <img
                    class="img-fluid"
                    src="{{asset("img/direct.png")}}"
                    title="دانلود مستقیم"
                    alt="دانلود مستقیم"
                >
            </a>
            <a class="mx-2" href="{{$links[3]}}" target="_blank">
                <img
                    class="img-fluid"
                    src="{{asset("img/appstore.png")}}"
                    title="دانلود از app store"
                    alt="دانلود از app store"
                >
            </a>
        </div>
    </div>
@endsection
