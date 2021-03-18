@extends('layout.master')

@section('content')
    @foreach($portfolios as $portfolio)
        <application title="{{$portfolio->title}}" des="{{$portfolio->description}}" img="{{asset("img/upload/".$portfolio->image)}}" link="{{route("blog.show",$portfolio->slug)}}"></application>
    @endforeach
@endsection
