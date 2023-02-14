@extends('layouts.master')

@section('content')

<div class="main-banner" style="background-image: url({{asset('assets/images/bannerabout.jpg')}}); padding: 400px 0px 100px 0px;">
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
        <div class="col-sm-12">
            <h4 style="margin-top: 3rem;margin-bottom:3rem"> Our Values</h4>
            <div class="row" style="background-color:black; margin-bottom: 3rem;padding-bottom:1rem;text-align: justify">
                <div class="col-sm-3" style="padding:0;">
                    <img style="width:100%" src="assets/images/enabling.jpg"> 
                    <p style="padding:10px; color:white">We work with our clients to facilitate their growth. We invest in people and offer opportunities for learning and growth.</p>
                </div>
                <div class="col-sm-3" style="padding:0;">
                    <img style="width:100%" src="assets/images/inclusion.jpg"> 
                    <p style="padding:10px; color:white">We work with our clients to facilitate their growth. We invest in people and offer opportunities for learning and growth.</p>
                </div>
                <div class="col-sm-3" style="padding:0;">
                    <img style="width:100%" src="assets/images/trust.jpg"> 
                    <p style="padding:10px; color:white">We work with our clients to facilitate their growth. We invest in people and offer opportunities for learning and growth.</p>
                </div>
                <div class="col-sm-3" style="padding:0;">
                    <img style="width:100%" src="assets/images/commitment.jpg"> 
                    <p style="padding:10px; color:white">We work with our clients to facilitate their growth. We invest in people and offer opportunities for learning and growth.</p>
                </div>
            </div>
        </div>   
    </div>
</div>

@endsection


@section('jquery')