@extends('layouts.master')

@section('content')

<div class="main-banner" style="background-image: url({{isset($banner) ? $urlBackend.$banner->services : asset('assets/images/bannerservices.jpg')}}); padding: 120px 0px 300px 0px;">
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
    <div class="row" style="margin-top:3rem;margin-bottom:3rem;text-align: justify">
        <div class="col-sm-12">
            <h4>Services</h4>
            {!! (isset($modelDescription) ? $modelDescription->description : '') !!}
        </div>
    </div>
</div>

<?php if (isset($model)) { ?>
    <?php foreach ($model as $row => $value) { ?>
        <div class="container">           
            <div class="row" style="margin-bottom:3rem;">               
                <div class="col-sm-6" style="background-color:#ececec;margin-top:0px;padding: 0px!important;">
                    <div class="row">
                        <div class="col-sm-12" style="width:fit-content;margin:3rem 1rem 3rem 1rem;text-align: justify">
                            <h5>{{ $value->name }}</h5>
                            {!! $value->description !!}
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 no-padding" style="margin-top:0px;padding: 0px!important;">
                    <img style='height: 100%; width: 100%; object-fit: contain' src="{{ $urlBackend.$value->image }}" class="rounded float-right">
                </div>
            </div>
        </div>
    <?php } ?>
<?php } ?>

@endsection


@section('jquery')