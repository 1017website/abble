@extends('layouts.master')

@section('content')

<div class="main-banner" style="background-image: url({{isset($banner) ? $urlBackend.$banner->about : asset('assets/images/bannerabout.jpg')}}); padding: 0px 0px 669px 0px; ">
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
            <h4 style="margin-bottom: 0px;padding-bottom: 2rem;"> About Us</h4>
            {!! isset($model) ? $model->description : '' !!}
        </div>
    </div>
</div>

@endsection


@section('jquery')