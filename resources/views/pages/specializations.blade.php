@extends('layouts.master')

@section('content')

<div class="main-banner" style="background-image: url({{asset('assets/images/bannerspecial.jpg')}}); padding: 120px 0px 300px 0px;">
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
        <div class="col-sm-12" style="margin-bottom:3rem; margin-top:3rem">
            <h4>Specializations</h4>
            <div class="row">
                <div class="col-sm-12" style="background-color:#ececec;margin-top:50px;padding-bottom: 10px;padding-top:1rem;">
                    <h5><img style="margin:0px 30px 0px 30px;inline-size:auto" src="assets/images/imglegal.png">Legal</h5>
                    <p style="margin:30px; text-align: justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in neque venenatis, tincidunt libero et, porta lectus. Nam dictum ultrices vulputate. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce semper non tellus a mollis. In ultricies est sed maximus lobortis. Nam tellus magna, aliquam at nisl ac, malesuada molestie ante. Sed quis pretium dolor. Vivamus luctus velit erat, at placerat magna dictum sed. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque lacinia quam vel sapien lobortis, sit amet vehicula lectus ultricies.</p>
                </div>
                <div class="col-sm-12" style="background-color:#ececec;margin-top:50px;padding-bottom: 10px;padding-top:1rem;">
                    <h5><img style="margin:0px 30px 0px 30px;inline-size:auto" src="assets/images/imgtech.png">Technology</h5>
                    <p style="margin:30px; text-align: justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in neque venenatis, tincidunt libero et, porta lectus. Nam dictum ultrices vulputate. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce semper non tellus a mollis. In ultricies est sed maximus lobortis. Nam tellus magna, aliquam at nisl ac, malesuada molestie ante. Sed quis pretium dolor. Vivamus luctus velit erat, at placerat magna dictum sed. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque lacinia quam vel sapien lobortis, sit amet vehicula lectus ultricies.</p>
                </div>
                <div class="col-sm-12" style="background-color:#ececec;margin-top:50px;padding-bottom: 10px;padding-top:1rem;">
                    <h5><img style="margin:0px 30px 0px 30px;inline-size:auto" src="assets/images/imgHR.png">Human Resources</h5>
                    <p style="margin:30px; text-align: justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in neque venenatis, tincidunt libero et, porta lectus. Nam dictum ultrices vulputate. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce semper non tellus a mollis. In ultricies est sed maximus lobortis. Nam tellus magna, aliquam at nisl ac, malesuada molestie ante. Sed quis pretium dolor. Vivamus luctus velit erat, at placerat magna dictum sed. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque lacinia quam vel sapien lobortis, sit amet vehicula lectus ultricies.</p>
                </div>
            </div>       
        </div>
    </div>
</div>

@endsection


@section('jquery')