@extends('layout.master')

@section('content')
    <div class="row">
        <div class="col-md align-self-center mx-md-5 order-1" dir="rtl" style="white-space: break-spaces">
            <h1 class="text-right">تیتر ۱</h1>
            <p class="text-justify">
                ولی چیزی که مرا با «اسپینوزا» پیوند داده، بی علاقگی بی کرانی است که از هر جمله نور می گیرد. این عبارت حیرت آور: «او که به
                راستی عاشق خدا بود، ولی تمایلی نداشت که خدا هم عاشق او باشد»، با همه مقدمات و نتایجش، همه ظرفیت فکری مرا اشغال کرده است.
                <strong class="text-danger float-left mt-2">یوهان ولفگانگ گوته</strong>
            </p>
        </div>
        <div class="col-md align-self-center mx-md-5 order-1">
            <img src="{{asset("img/main.png")}}" alt="">
        </div>
    </div>

    <div class="row mt-5">
        <div class="col text-center">
            <h2 id="worksamples" class="px-2">نمونه کار ها</h2>
        </div>
    </div>
    @foreach($portfolios as $portfolio)
        <application title="{{$portfolio->title}}" des="{{$portfolio->description}}" img="{{asset("img/upload/".$portfolio->image)}}"
                     link="{{route("blog.show",$portfolio->slug)}}"></application>
    @endforeach
@endsection
