@extends('layouts.master')

@section('content')
<div class="main-banner" style="background-image: url({{asset('assets/images/bannercommunity.jpg')}}); padding: 120px 0px 300px 0px;">

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
        <div class="col-sm-12" style="margin-bottom:0px; margin-top:3rem">
            <h4 style="margin-bottom: 0px">Community</h4>
            <br>
            <p>Through collaboration with local and international partners and employee volunteers, we work on deliverables, focusing on improving communities</p>
            <div class="row" style="margin-top:3rem;margin-bottom:3rem">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-3" style="background-color:#ececec;margin-bottom:auto;padding-bottom: 2rem;">
                            <a href="/partnership"><img style="width:108%; margin-left:-12px" src="assets/images/community.jpg">
                                <h5 style="font-weight: bold;margin-top:2rem;text-align: center;color:black">Partnerships</h5></a>
                        </div>
                        <div class="col-sm-2" style="margin:-2rem -2rem -2rem -2rem">
                        </div>
                        <div class="col-sm-3" style="background-color:#ececec;margin-bottom:auto;padding-bottom: 2rem">
                            <a href="/volunteering"><img style="width:108%; margin-left:-12px" src="assets/images/partnership_1.jpg">
                                <h5 style="font-weight: bold;margin-top:2rem;text-align: center;color:black">Volunteering</h5></a>
                        </div>
                        <div class="col-sm-2" style="margin:-2rem -2rem -2rem -2rem">
                        </div>
                        <div class="col-sm-3" style="background-color:#ececec;margin-bottom:auto;padding-bottom: 2rem">
                            <a href="/diversityandinclusion"><img style="width:108%; margin-left:-12px" src="assets/images/diversity.jpg">
                                <h5 style="font-weight: bold;margin-top:2rem;text-align: center;color:black">Diversity &amp; Inclusion</h5></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('jquery')