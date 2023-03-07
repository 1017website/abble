@extends('layouts.master')

@section('content')

<div class="main-banner" style="background-image: none; padding-top: 0px; padding-bottom:0px">
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
        <div class="col-sm-12" style="margin-bottom:3rem; margin-top:3rem">
            <h4 style="margin-bottom: 0px; ">News</h4>
            <h6 style="font-weight: 400; font-style: italic; color:grey;margin-bottom: 1rem;margin-bottom: 0px;font-size: 10pt ">{{ isset($model) ? $model->created_at : '' }}</h6>
            <img src="{{ isset($model) ? $urlBackend.$model->image : '' }}" style="height:fit-content; width: 100%;margin-top: 1rem; ">
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-12" style="margin-bottom:3rem;text-align: justify">
            {!! isset($model) ? $model->description : '' !!}
        </div>
    </div>
</div>

@endsection

@section('jquery')