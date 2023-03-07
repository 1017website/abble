@extends('layouts.master')

@section('content')
<div class="main-banner" style="background-image: url({{asset('assets/images/bannerdiversity2.jpg')}}); padding: 120px 0px 300px 0px;">

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
            <h4 style="margin-bottom: 0px;padding-bottom: 2rem;"> Diversity &amp; Conclusion</h4>
            {!! isset($model) ? $model->description : '' !!}
        </div>
    </div>
</div>

@endsection

@section('jquery')