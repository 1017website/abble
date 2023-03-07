@extends('layouts.master')

@section('content')

<div class="main-banner" style="background-image: url(assets/images/banner-bg7.jpg); padding: 300px 0px 0px 0px;">
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


<div class="main-banner-bg" style="background-image:none; background-color:white;">
    <div class="container">
        <div id="myModal" class="modal fade">
            <div class="modal-dialog  modal-lg modal-dialog-centered">
                <div class="modal-content" style="border-radius:1.5rem!important">
                    <div class="modal-header" style="border:transparent">
                        <h5 class="modal-title" style="padding:0rem 3rem 0 3rem">Download Salary Surveys</h5>
                    </div>
                    <div class="modal-body" style="padding:1rem 3rem 3rem 3rem">
                        <div class="container">
                            <form action="#">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input class="d1" type="text" id="fname" name="firstname" placeholder="First Name">
                                    </div>
                                    <div class="col-sm-6">
                                        <input class="d1" type="text" id="fname" name="lastname" placeholder="Last Name">
                                    </div>
                                </div>

                                <div class="row">                                
                                    <div class="col-sm-12" style="margin-top:2rem">
                                        <input class="d1" type="text" id="lname" name="email" placeholder="Your Email">
                                    </div>
                                </div>
                                <div class="row mt2">  
                                    <div class="col-sm-2">
                                        <select class="form-select d1" aria-label="Default select example">
                                            <option selected ></option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-10">
                                        <input class="d1" type="text" id="phone" name="phone" placeholder="Your Phone">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 mt2">
                                        <select class="form-select d1" aria-label="Default select example">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6 mt2">
                                        <select class="form-select d1" aria-label="Default select example">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-12 mt2">
                                        <label><input type="checkbox"> I consent to Abblesearch processing my personal information in accordance with the Abblesearch Privacy Statement</label>
                                    </div>
                                </div>
                                <input style="align-content: center; width:100px;background-color:#0f64b6; color:white;border-radius:10px;border-color: transparent; border-style:none" type="submit" value="Submit">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection

@section('jquery')
<script>
    $(document).ready(function () {
        $("#myModal").modal({backdrop: 'static', keyboard: false});
        $("#myModal").modal('show');
    });
</script>
@endsection