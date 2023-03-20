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

<div class="container" style="margin-bottom:0px; margin-top:3rem">
    <h4 style="margin-bottom: 0px">Community</h4>
    <br>
    <p>Through collaboration with local and international partners and employee volunteers, we work on deliverables, focusing on improving communities</p>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3" style="margin-top:3rem;margin-bottom:3rem">
        <div class="col">
            <div class="card shadow-sm" style="border:transparent">
                <a href="/partnership"><img class="card-img-top" width="100%" height="100%" src="assets/images/community.jpg" alt="Card image cap" focusable="false"></a>
                <div class="card-body" style="background-color: #ececec">
                    <h6 class="card-text" style="text-align: center">Charity &amp; Industry Partnerships</h6>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow-sm" style="border:transparent">
                <a href="/volunteering"><img class="card-img-top" width="100%" height="100%" src="assets/images/partnership_1.jpg" alt="Card image cap" focusable="false"></a>
                <div class="card-body" style="background-color: #ececec">
                    <h6 class="card-text" style="text-align: center">Volunteering</h6>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow-sm" style="width:100%;background-color:#ececec;border:transparent">
                <a href="/diversityandinclusion"><img class="card-img-top" width="100%" height="100%" src="assets/images/diversity.jpg" alt="Card image cap" focusable="false"></a>
                <div class="card-body" style="background-color: #ececec">
                    <h6 class="card-text" style="text-align: center">Diversity &amp; Inclusion</h6>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection

@section('jquery')