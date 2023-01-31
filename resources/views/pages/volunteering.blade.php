@extends('layouts.master')

@section('content')

<div class="main-banner" style="background-image: url({{asset('assets/images/bannervolunteering.jpg')}}); padding: 120px 0px 300px 0px;">
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
        <div class="col-sm-12" style="margin-bottom:0px; margin-top:3rem">
            <h4 style="margin-bottom: 0px; margin-left: 3rem">Volunteering</h4>
            <div class="row">
                <div class="col-sm-5" style="margin-top:50px;margin-bottom:100px;background-color:#ececec">
                    <img style="width:104%; margin-left:-10px;height:fit-content" src="assets/images/volunteering.jpg">
                    <p style="font-size:12pt;margin-right:0px;padding:15px 15px 15px 15px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in neque venenatis, tincidunt libero et, porta lectus.
                        Nam dictum ultrices vulputate. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce semper non tellus a mollis. In ultricies est sed maximus lobortis.
                        Nam tellus magna, aliquam at nisl ac, malesuada molestie ante. Sed quis pretium dolor.
                        <span id="dots">...</span><span id="more"> Vivamus luctus velit erat, at placerat magna dictum sed. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque lacinia quam vel sapien lobortis, sit amet vehicula lectus ultricies.</span></p>
                    <button style="font-weight: bold;padding-left: 15px; border-color: transparent" onclick="myFunction()" id="myBtn">Read more...</button>
                </div>
                <div class="col-sm-2">
                </div>
                <div class="col-sm-5" style="margin-top:50px;margin-bottom:100px;background-color:#ececec">
                    <img style="width:104%; margin-left:-10px;height:fit-content" src="assets/images/partnership.jpg">
                    <p style="font-size:12pt;margin-right:0px;padding:15px 15px 15px 15px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in neque venenatis, tincidunt libero et, porta lectus. Nam dictum ultrices vulputate. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce semper non tellus a mollis. In ultricies est sed maximus lobortis. Nam tellus magna, aliquam at nisl ac, malesuada molestie ante. Sed quis pretium dolor. Vivamus luctus velit erat, at placerat magna dictum sed. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque lacinia quam vel sapien lobortis, sit amet vehicula lectus ultricies.</p>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
@section('jquery')
<script>
    function myFunction() {
        var dots = document.getElementById("dots");
        var moreText = document.getElementById("more");
        var btnText = document.getElementById("myBtn");

        if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Read more";
            moreText.style.display = "none";
        } else {
            dots.style.display = "none";
            btnText.innerHTML = "Read less";
            moreText.style.display = "inline";
        }
    }
</script>
@endsection