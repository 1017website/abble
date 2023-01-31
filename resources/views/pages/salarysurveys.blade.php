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
                    <div class="modal-header" style="width:fit-content!important">
                        <h5 class="modal-title">Download Salary Surveys</h5>
                    </div>
                    <div class="modal-body">
                        <form  action="/action_page.php" style="width:fit-content!important">
                            <div class="row">
                                <div class="col-sm-5">
                                    <input style="width: fit-content;margin-bottom: 10px; height: 35px; background: linear-gradient(to bottom,#e7e5e5,white); border-style: ridge;border-radius: 10px;border-color:transparent"
                                           type="text" id="fname" name="firstname" placeholder="First Name">
                                </div>
                                <div class="col-sm-1">
                                </div>
                                <div class="col-sm-5">
                                    <input style="width: fit-content;margin-bottom: 10px; height: 35px; background: linear-gradient(to bottom,#e7e5e5,white); border-style: ridge;border-radius: 10px;border-color:transparent"
                                           type="text" id="fname" name="lastname" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-10">
                                    <input style="width: fit-content;margin-bottom: 10px; height: 35px; background: linear-gradient(to bottom,#e7e5e5,white); border-style: ridge;border-radius: 10px;border-color:transparent" 
                                           type="text" id="lname" name="email" placeholder="Your Email">
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

@endsection

@section('jquery')
<script>
    $(document).ready(function () {
        $("#myModal").modal('show');
    });
</script>
@endsection