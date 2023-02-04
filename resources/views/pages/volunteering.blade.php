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

<div class="container" style="margin-top:3rem;margin-bottom:3rem">
    <h4>Volunteering</h4>
    <div class="row row-cols-1 row-cols-sm-2" style="margin-top:3rem">
        <div class="col">
            <div class="card shadow-sm" style="border:transparent">
                <img class="card-img-top" width="100%" height="100%" src="assets/images/imgvolunteering.png" alt="Card image cap" focusable="false">
                <div class="card-body" style="background-color: #ececec">
                    <p class="card-text" style="text-align: justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in neque venenatis, tincidunt libero et, porta lectus. Nam dictum ultrices vulputate. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce semper non tellus a mollis. In ultricies est sed maximus lobortis. Nam tellus magna, aliquam at nisl ac, malesuada molestie ante. Sed quis pretium dolor. Vivamus luctus velit erat, at placerat magna dictum sed. Interdum et malesuada fames ac ante ipsum primis in.</p>
                    <button type="button" class="btn btn-primary btn-modal" style="background-color: transparent;border:transparent;color:black;font-weight: bold;padding-left:0">Read More...</button>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card shadow-sm" style="border:transparent">
                <img class="card-img-top" width="100%" height="100%" src="assets/images/partnership.jpg" alt="Card image cap" focusable="false">
                <div class="card-body" style="background-color: #ececec">
                    <p class="card-text" style="text-align: justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in neque venenatis, tincidunt libero et, porta lectus. Nam dictum ultrices vulputate. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce semper non tellus a mollis. In ultricies est sed maximus lobortis. Nam tellus magna, aliquam at nisl ac, malesuada molestie ante. Sed quis pretium dolor. Vivamus luctus velit erat, at placerat magna dictum sed. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque lacinia quam vel sapien lobortis, sit amet vehicula lectus ultricies.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="myModal" class="modal fade">
    <div class="modal-dialog  modal-lg modal-dialog-centered">
        <div class="modal-content" style="border-radius:0">
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8">
                            <img width="100%" height="100%" src="assets/images/volunteering.jpg" focusable="false">
                        </div>
                        <div class="col-sm-4">
                            <img width="100%" height="100%" src="assets/images/volunteering2.jpg" focusable="false">
                        </div>
                    </div>
                    <div class="col-sm-12" style="text-align: justify">
                        <p>We are currently looking for graduates and entry-level associate consultants who are keen to be a part of the future of our
                            market-leading team. You'll have the opportunity to work with an established team of industry experts</p>
                        <br>
                        <h6>What are we looking for?</h6>
                        <br>
                        <u1>
                            <li style="list-style-type: disc!important">
                                Graduate with a degree from a top university or a candidate who can demonstrate academic excellence in another way
                            </li>
                            <br>
                            <li style="list-style-type: disc!important">
                                Experience working in a sales-based environment such as fundraising, business development, telesales, retail etc. is
                                helpful, but not essential
                            </li>
                            <br>
                            <li style="list-style-type: disc!important">
                                Self-motivated and resilient personality
                            </li>
                            <br>
                            <li style="list-style-type: disc!important">
                                Relationship builder with a confident, 'can-do' attitude
                            </li>
                            <br>
                            <li style="list-style-type: disc!important">
                                Candidates who can demonstrate extracurricular activities and interests such as sports, music, or entrepreneurial
                                pursuits
                            </li>
                        </u1>
                        <br>
                        <h6>What do we offer?</h6>
                        <br>
                        <p>
                            We offer career tracks into high-billing desks or broader management (depending on your aspirations), underpinned by
                            market-leading compensation and a commitment to learning and development. There are also opportunities to move
                            internationally within the global Pure network- think New York, Hong Kong, and Europe.
                            We offer on-the-job training within a supportive, collaborative environment where our team genuinely enjoy what they do.
                        </p>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('jquery')
<script>
    $(".btn-modal").click(function () {
        $("#myModal").modal('show');
    });
</script>
@endsection