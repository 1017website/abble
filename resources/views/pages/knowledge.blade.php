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
    <h4 style="margin-bottom: 0px; text-align: center;margin-top:3rem">News, Insights &amp; Analysis on the talent market and trends</h4>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3" style="margin-top:3rem;margin-bottom:3rem">
        <div class="col">
            <div class="card shadow-sm" style="border:transparent">
                <a href="/news"><img class="card-img-top" width="100%" height="100%" src="assets/images/imgnews.jpg" alt="Card image cap" focusable="false"></a>
                <div class="card-body" style="background-color: #ececec">
                    <p class="card-text" style="font-weight:bolder">News</p>
                    <p class="card-text" style="text-align: justify">{{ strip_tags(substr($modelNews->description, 0, 210)) }}</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow-sm" style="border:transparent">
                <a href="/thoughtleadership"><img class="card-img-top" width="100%" height="100%" src="assets/images/leader.jpg" alt="Card image cap" focusable="false"></a>
                <div class="card-body" style="background-color: #ececec">
                    <p class="card-text" style="font-weight:bolder">Thought Leadership</p>
                    <p class="card-text" style="text-align: justify">{{ strip_tags(substr($modelThought->description, 0, 210)) }}</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow-sm" style="border:transparent">
                <a href="/salarysurveys"><img class="card-img-top" width="100%" height="100%" src="assets/images/salary.jpg" alt="Card image cap" focusable="false"></a>
                <div class="card-body" style="background-color: #ececec">
                    <p class="card-text" style="font-weight:bolder">Salary Surveys</p>
                    <p class="card-text" style="text-align: justify">{{ strip_tags(substr($modelSalary->description, 0, 150)) }}</p>
                    <a href="/salarysurveys" class="btn btn-primary center" style="background-color:#19337f;border:transparent ">Download Report</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('jquery')