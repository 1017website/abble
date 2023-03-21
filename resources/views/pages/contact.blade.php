@extends('layouts.master')

@section('content')

<div class="main-banner" style="background-image: url(assets/images/banner-bg8.jpg); padding: 300px 0px 0px 0px;">
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
    <div class="row" style="margin-left:1rem;margin-right:1rem">
        <div class="col-sm-12" style="margin-bottom:3rem; margin-top:3rem">
            <h4>Contact Us</h4>
            <h6 style="font-weight: normal">All messages received will be treated with the utmost confidentiality</h6>
        </div>
    </div>
</div>

<div class="container">
    <div class="row" style="margin-left:1rem;margin-right:1rem">
        <div class="col-sm-12" style="margin-bottom:5rem; margin-top:0px;">
            <div class="row">
                <div class="col-sm-5">
                    <div class="row">
                        <div class="col-sm-12">
                            @if ($message = Session::get('success'))
                            <div class="alert alert-success" role="alert">
                                {!! $message !!}
                            </div>
                            @endif
                        </div>

                        <form action="/contactemail" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <input style="width: 100%;margin-bottom: 10px; height: 35px; background: linear-gradient(to bottom,#e7e5e5,white); border-style: ridge;border-radius: 10px;border-color:transparent"
                                           type="text" id="name" name="name" placeholder="Your Name" required="true">
                                </div>
                                <div class="col-sm-6">
                                    <input style="width: 100%;margin-bottom: 10px; height: 35px; background: linear-gradient(to bottom,#e7e5e5,white); border-style: ridge;border-radius: 10px;border-color:transparent" 
                                           type="email" id="email" name="email" placeholder="Your Email" required="true">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <textarea style="width: 100%;margin-bottom: 10px;height: 100px; background: linear-gradient(to bottom,#e7e5e5,white); border-style: ridge;border-radius: 10px;border-color:transparent" 
                                          id="description" name="description" rows="4" cols="50" placeholder="Messages to us..."  required="true"></textarea>
                            </div>
                            <button style="width: auto;height:40px;background-color:#19337f; color:white;border-color: transparent;float:left" class="btn center btn-apply" type="submit">Submit</button>
                        </form>
                    </div>
                </div>
                <div class="col-sm-1"></div>
                <div class="col-sm-5">
                    <h6>Our Locations</h6>
                    <?php if (isset($model)) { ?>
                        <?php foreach ($model as $row => $value) { ?>
                            <h6>{{ $value->name }}</h6>
                            <p style="font-size:10pt; margin-top:0px">{!! strip_tags($value->description) !!}</p>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('jquery')