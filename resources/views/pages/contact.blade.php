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
                    <form  action="/action_page.php">
                        <input style="width: fit-content;margin-bottom: 10px; height: 35px; background: linear-gradient(to bottom,#e7e5e5,white); border-style: ridge;border-radius: 10px;border-color:transparent"
                               type="text" id="fname" name="firstname" placeholder="Your Name">                                
                        <input style="width: fit-content;margin-bottom: 10px; height: 35px; background: linear-gradient(to bottom,#e7e5e5,white); border-style: ridge;border-radius: 10px;border-color:transparent" 
                               type="text" id="lname" name="lastname" placeholder="Your Email">
                        <textarea style="width: fit-content;margin-bottom: 10px;height: 100px; background: linear-gradient(to bottom,#e7e5e5,white); border-style: ridge;border-radius: 10px;border-color:transparent" 
                                  id="w3review" name="w3review" rows="4" cols="50" placeholder="Messages to us..."></textarea>
                        <input style="width:100px;background-color:#0f64b6; color:white;border-radius:10px;border-color: transparent; border-style:none" type="submit" value="Submit">
                    </form>
                </div>
                <div class="col-sm-1">
                </div>
                <div class="col-sm-5">
                    <h6>Our Locations</h6>
                    <h6>Singapore</h6>
                    <p style="font-size:10pt; margin-top:0px">#08-08C Vertex Building, Singapore 408868</p>
                    <h6>Jakarta</h6>
                    <p style="font-size:10pt; margin-top:0px; margin-right:0px">Belleza BSA, 1st Floor Unit 106, Jl. Letjen Soepeno, RT 004/ RW 002, Kelurahan Grogol Utara, Kecamatan Kebayoran Lama, Jakarta Selatan 12210</p>
                    <h6>Philippines</h6>
                    <p style="font-size:10pt; margin-top:0px">Lorem ipsum dolor sit amet,</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('jquery')