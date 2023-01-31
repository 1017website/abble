@extends('layouts.master')

@section('content')
<div class="main-banner" style="background-image: url({{asset('assets/images/bannerknowledge.jpg')}}); padding: 120px 0px 300px 0px;">

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
    <h4 style="margin-bottom: 0px;; text-align: center;margin-top:3rem">News, Insights &amp; Analysis on the talent market and trends</h4>
    <div class="row">
        <div class="col-sm-12" style="margin-bottom:0px; ">

            <div class="col-sm-12">
                <div class="row" style="margin-top:3rem;margin-bottom:3rem">
                    <div class="col-sm-3" style="background-color:#ececec;margin-bottom:auto;padding-bottom: 2rem;">
                        <a href="/news"><img style="width:108%; margin-left:-12px;position:relative" src="assets/images/imgnews.jpg">
                            <h5 style="font-weight: bold;margin-top:2rem;text-align: justify;color:black">News</h5></a>
                        <p style="margin:0 0 0 0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in neque venenatis, tincidunt libero et, porta lectus. Nam dictum ultrices vulputate. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce semper non tellus a mollis. 
                        </p>
                    </div>
                    <div class="col-sm-1" style="margin:-2rem -2rem -2rem -2rem">
                    </div>
                    <div class="col-sm-3" style="background-color:#ececec;margin-bottom:auto;padding-bottom: 2rem">
                        <a href="/thoughtleadership"><img style="width:108%; margin-left:-12px" src="assets/images/leader.jpg">
                            <h5 style="font-weight: bold;margin-top:2rem;text-align: justify;color:black">Thought Leadership</h5></a>
                        <p style="margin:0 0 0 0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in neque venenatis, tincidunt libero et, porta lectus. Nam dictum ultrices vulputate. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce semper non tellus a mollis. 
                        </p>
                    </div>
                    <div class="col-sm-1" style="margin:-2rem -2rem -2rem -2rem">
                    </div>
                    <div class="col-sm-3" style="background-color:#ececec;margin-bottom:auto;padding-bottom: 2rem">
                        <a href="/salarysurveys"><img style="width:108%; margin-left:-12px" src="assets/images/salary.jpg">
                            <h5 style="font-weight: bold;margin-top:2rem;text-align: justify;color:black">Salary Surveys</h5></a>
                        <p style="margin:0 0 0 0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in neque venenatis, tincidunt libero et, porta lectus. Nam dictum ultrices vulputate. Pellentesque habitant morbi tristique senectus et
                        </p>
                        <form  action="/salarysurveys" style="margin:1.5rem 0 0 0;">
                            <input style="width:auto;height:auto;background-color:#0f64b6; color:white;border-radius:0;border-color: transparent; border-style:none;" type="submit" value="Download Report">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('jquery')