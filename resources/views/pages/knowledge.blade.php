@extends('layouts.master')

@section('content')
<div class="main-banner" style="background-image: url(assets/images/bannerknowledge.jpg); padding: 120px 0px 300px 0px;">

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
            <div class="row" style="margin-top:3rem;margin-bottom:3rem">
                <div class="col-sm-4">
                    <div class="card" style="width: 25rem;background-color:#ececec;border:transparent">
                        <a href="/news"><img class="card-img-top" src="assets/images/imgnews.jpg" alt="Card image cap"></a>
                        <div class="card-body">
                            <p class="card-text" style="font-weight:bolder">News</p>
                            <p class="card-text" style="text-align: justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in neque venenatis, tincidunt libero et, porta lectus. Nam dictum ultrices vulputate. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce semper non tellus a mollis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card" style="width: 25rem;background-color:#ececec;border:transparent">
                        <a href="/thoughtleadership"><img class="card-img-top" src="assets/images/leader.jpg" alt="Card image cap"></a>
                        <div class="card-body">
                            <p class="card-text" style="font-weight:bolder">Thought Leadership</p>
                            <p class="card-text" style="text-align: justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in neque venenatis, tincidunt libero et, porta lectus. Nam dictum ultrices vulputate. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce semper non tellus a mollis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card" style="width: 25rem;background-color:#ececec;border:transparent">
                        <img class="card-img-top" src="assets/images/salary.jpg" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text" style="font-weight:bolder">Salary Surveys</p>
                            <p class="card-text" style="text-align: justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in neque venenatis, tincidunt libero et, porta lectus. Nam dictum ultrices vulputate. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac</p>
                            <a href="/salarysurveys" class="btn btn-primary center" style="background-color:#19337f;border:transparent ">Download Report</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('jquery')