@extends('layouts.master')

@section('content')

<div class="main-banner" style="background-image: none;color:transparent!important; padding: 0px 0px 0px 0px;">
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
    <div class="row" style="margin-bottom:3rem; margin-top:3rem">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-6">
                    <h5 style="margin: 0px 0px 0px 0px">{{ $model->position }} ({{ $model->place }})</h5>
                    <h4>{{ $model->role }}</h4>
                </div>
                <div class="col-sm-6" style="text-align: right!important">
                    <h4 style="margin: 0px 0px 0px 0px">{{ $model->place }}</h4>
                    <p style="margin: 0px 0px 0px 0px;font-size:14pt;text-align:right">Posted {{ $model->updated_at }}</p>
                </div>
            </div>
        </div>
        <div class="col-sm-12">
            {!! $model->description !!}
            <br>
            <form  action="#" style="margin:1.5rem 0 0 0;">
                <input style="width:200px;height:40px;background-color:#19337f; color:white;border-color: transparent;float:left" class="center" type="submit" value="Apply">
            </form>
        </div>
    </div>
</div>

@endsection

@section('jquery')