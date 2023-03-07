@extends('layouts.master')

@section('content')

<div class="main-banner" style="background-image: url(assets/images/banner-bg6-1.jpg); padding: 300px 0px 0px 0px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="top-text header-text">
                    <h6 style="color:transparent">a</h6>
                    <h2 style="color:transparent">a</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-12" style="margin-bottom:3rem; margin-top:3rem;text-align: justify">
            <h4>Join Abblesearch</h4>
            {!! isset($modelDescription) ? $modelDescription->description : '' !!}
        </div>
    </div>
</div>

<div class="main-banner-bg" style="background-color:#ececec; height:auto; padding-top: 2rem">
    <div class="container">
        <div class="row">
            <div class ="col-sm-12">
                <div class="row">
                    <?php if (isset($modelBenefit)) { ?>
                        <?php foreach ($modelBenefit as $row => $value) { ?>
                            <div class="col-sm-6" style="margin-bottom: 2rem;">
                                <img style="margin-bottom: 1rem;inline-size:auto" class="center" src="{{ $urlBackend.$value->image }}">   
                                <p style="text-align: center;margin-bottom: 1rem" class="center">{{ $value->name }}</p>
                                <p style="text-align: center;margin-bottom: 1rem" class="center2">{{ strip_tags($value->description) }}</p>
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-12" style="margin-bottom:3rem; margin-top:3rem">
            <h4>Latest Job</h4>

            <?php if (isset($modelJob)) { ?>
                <?php foreach ($modelJob as $row => $value) { ?>
                    <div class="row" style="margin-bottom:2rem">
                        <div class="col-sm-6">
                            <a href="jobdetail/{{ $value->id }}" style="color:black"><p>{{ $value->position }} ({{ $value->place }})<p>
                                <h6>{{ $value->role }}</h6></a>
                        </div>
                        <div class="col-sm-3">
                            <h6>{{ $value->place }}</h6>
                        </div>
                        <div class="col-sm-3">
                            <p style="float:right">Posted {{ $value->updated_at }}</p>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>

        </div>
    </div>
</div>

@endsection

@section('jquery')