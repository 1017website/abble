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
            <h4 style="margin-bottom: 0px; margin-left: 3rem">Community</h4>
            <br>
            <p style="margin-left:3rem">Through collaboration with local and international partners and employee volunteers, we work on deliverables, focusing on improving communities</p>
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-3" style="background-color:#ececec;margin-bottom:auto;padding-bottom: 2rem;">
                            <img style="width:108%; margin-left:-12px;height:fit-content" src="assets/images/bannercommunity.jpg">
                            <h5 style="font-weight: bold;margin-top:2rem;text-align: center">Partnerships</h5>
                        </div>
                        <div class="col-1" style="margin:-2rem -2rem -2rem -2rem">
                        </div>
                        <div class="col-3" style="background-color:#ececec;margin-bottom:auto;padding-bottom: 2rem">
                            <img style="width:108%; margin-left:-12px;height:fit-content" src="assets/images/imgpartnership.jpg">
                            <h5 style="font-weight: bold;margin-top:2rem;text-align: center">Volunteering</h5>
                        </div>
                        <div class="col-1" style="margin:-2rem -2rem -2rem -2rem">
                        </div>
                        <div class="col-3" style="background-color:#ececec;margin-bottom:auto;padding-bottom: 2rem">
                            <img style="width:108%; margin-left:-12px;height:fit-content" src="assets/images/imgdiversity.jpg">
                            <h5 style="font-weight: bold;margin-top:2rem;text-align: center">Diversity &amp; Inclusion</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('jquery')