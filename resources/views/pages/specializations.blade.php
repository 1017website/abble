@extends('layouts.master')

@section('content')

<div class="main-banner" style="background-image: url({{asset('assets/images/bannerspecial.jpg')}}); padding: 120px 0px 300px 0px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="top-text header-text">
                    <h6 style="color:transparent">...</h6>
                    <h2 style="color:transparent">..</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-12" style="margin-bottom:3rem; margin-top:3rem">
            <h4>Specializations</h4>
            <div class="row">

                <?php if (isset($model)) { ?>
                    <?php foreach ($model as $row => $value) { ?>
                        <div class="col-sm-12" style="background-color:#ececec;margin-top:50px;padding-bottom: 10px">
                            <h5><img style="margin:0px 30px 0px 30px;inline-size:auto" src="{{ $urlBackend.$value->image }}">{{ $value->name }}</h5>
                            <p style="margin:30px; text-align: justify">{{ strip_tags($value->description) }}</p>
                        </div>
                    <?php } ?>
                <?php } ?>

            </div>       
        </div>
    </div>
</div>

@endsection


@section('jquery')