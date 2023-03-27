@extends('layouts.master')

@section('content')

<div class="main-banner" style="background-image: url({{isset($banner) ? $urlBackend.$banner->people : asset('assets/images/bannerpeople.jpg')}}); padding: 120px 0px 300px 0px;">
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
    <div class="row" style="margin-bottom:3rem;">
        <h4 style=" margin-top:3rem;"> Directors</h4>

        <?php if (isset($model)) { ?>
            <?php foreach ($model as $row => $value) { ?>
                <div class="col-sm-12" style="margin-bottom:0px; margin-top:3rem">
                    <div class="row">
                        <div class="col-lg-4" style="margin-bottom: 2rem">
                            <img src="{{ $urlBackend.$value->image }}"> 
                        </div>
                        <div class="col-lg-8">
                            <h4 style="font-size:13pt;"> {{ $value->name }} - {{ $value->role }}</h4>
                            <p style="text-align: justify">{{ strip_tags($value->description) }}</p>
                            <h6>{{ (!empty($value->email) ? 'Email: '.$value->email : '') }}</h6>
                            <h6>{{ (!empty($value->phone) ? 'Contact: '.$value->phone : '') }}</h6>
                        </div>
                    </div>   
                </div>
            <?php } ?>
        <?php } ?>

    </div>
</div>

@endsection


@section('jquery')