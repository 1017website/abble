@extends('layouts.master')

@section('content')

<div class="main-banner" style="background-image: url({{asset('assets/images/bannerpeople.jpg')}}); padding: 120px 0px 300px 0px;">
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
        <div class="col-sm-12" style="margin-bottom:0px; margin-top:3rem">
            <h4 style="margin-bottom: 3rem; margin-left: 3rem;"> Directors</h4>
            <div class="row" style="margin-bottom: 0px; margin-left: 2rem">
                <div class="col-lg-4" style="margin-bottom:2rem">
                    <img src="assets/images/ourdirectors1_1.jpg"> 
                </div>
                <div class="col-lg-8">
                    <h4 style="font-size:13pt;"> James Lim - Managing Director</h4>
                    <p>James specialises ir the placement of lawyers, covering both private practice and specific in-house mandates across Asia.Having focused on legal searches for more than ten years, James has an in depth understanding of the market, having managed assignments spanning multiple disciplines for global law firms (including partner mandates, team moves, targeted partner representations, office launches, step-up moves and lift-outs), financial services and technology companies.Outside of work, James enjoys travelling, reading, kayaking and hiking. </p>
                    <h6>Email: james@abblesearch.com
                    </h6>
                    <h6>Contact: +65 91893918
                    </h6>
                </div>
            </div>   
        </div>
        <div class="col-sm-12" style="margin-bottom:0px; margin-top:3rem">
            <div class="row" style="margin-bottom: 0px; margin-left: 2rem">
                <div class="col-lg-4" style="margin-bottom:2rem">
                    <img src="assets/images/ourdirectors2.jpg"> 
                </div>
                <div class="col-lg-8">
                    <h4 style="font-size:13pt;"> Oliver - Managing Director, China</h4>
                    <p>Oliver brings more than 10 years of industry experience working in leading private equity houses, financial institutions and global real estate firms. He has led and delivered successfully on multiple C-level hires for clients in China and Hong Kong and is one of the rare recruiters who is well connected to senior managers across various industries. He enjoys a game of tennis and travelling to exotic destinations. </p>
                    <h6>Email: oliver.lin@abblesearch.com
                    </h6>
                    <h6>Contact: +8615906638572
                    </h6>
                </div>
            </div>   
        </div>
    </div>
</div>

@endsection


@section('jquery')