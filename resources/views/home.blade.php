@extends('layouts.app')

@section('content')
    <div id="template" hidden>
        <div class="form-group">
            <label for="title">خصوصیات : </label>
            <input type="text" class="form-control" name="properties[]">
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if(session()->has("msg"))
                    <div class="alert alert-success text-center">
                        {{session()->get("msg")}}
                    </div>
                @endif
                <form action="{{route("portfolio.store")}}" method="post" class="text-right" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">نام برنامه : </label>
                        <input type="text" class="form-control" placeholder="نام برنامه" name="title" required>
                    </div>

                    <div class="form-group">
                        <label for="title">توضیحات : </label>
                        <textarea name="description" class="form-control" required placeholder="توضیحات"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="title">عکس اصلی : </label>
                        <input type="file" class="form-control" name="image" required>
                    </div>

                    <div class="form-group">
                        <label for="title">عکس جزئیات : </label>
                        <input type="file" class="form-control" name="imagej" required>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <label for="title">لینک بازار : </label>
                                <input dir="ltr" type="url" class="form-control" name="links[]" required>
                            </div>
                            <div class="col">
                                <label for="title">لینک گوگل : </label>
                                <input dir="ltr" type="url" class="form-control" name="links[]" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <label for="title">لینک مستقیم : </label>
                                <input dir="ltr" type="url" class="form-control" name="links[]" required>
                            </div>
                            <div class="col">
                                <label for="title">لینک اپل : </label>
                                <input dir="ltr" type="url" class="form-control" name="links[]" required>
                            </div>
                        </div>
                    </div>
                    <div id="rp76">
                        <div class="form-group">
                            <label for="title">خصوصیات : </label>
                            <button type="button" onclick="makeProperty()" class="btn float-left btn-warning"
                                    title="اضافه کردن خصوصیت">+
                            </button>
                            <input type="text" class="form-control" name="properties[]">
                        </div>
                    </div>
                    <input type="submit" value="ثبت" class="btn btn-success">
                </form>
            </div>
        </div>
    </div>
@endsection

@section("ex-js")
    <script>
        $(document).ready(function () {
            noLink();
        });

        function makeProperty() {
            var element=$("#rp76");
            $(element).html($(element).html()+$("#template").html());
        }
    </script>
@endsection
