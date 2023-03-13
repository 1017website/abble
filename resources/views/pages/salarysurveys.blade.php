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

<div class="container">
    <div class="row">
        <div class="col-sm-12" style="margin-bottom:3rem; margin-top:3rem">
            <h4 style="margin-bottom: 0px; ">Salary Surveys</h4>
            <h6 style="font-weight: 400; font-style: italic; color:grey;margin-bottom: 1rem;margin-bottom: 0px;font-size: 10pt ">{{ isset($model) ? $model->created_at : '' }}</h6>
            <img src="{{ isset($model) ? $urlBackend.$model->image : '' }}" style="height:fit-content; width: 100%;margin-top: 1rem; ">
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-12" style="margin-bottom:3rem;text-align: justify">
            {!! isset($model) ? $model->description : '' !!}
        </div>
    </div>
</div>

<div id="myModal" class="modal fade">
    <div class="modal-dialog  modal-lg modal-dialog-centered">
        <div class="modal-content" style="border-radius:1.5rem!important">
            <div class="modal-header" style="border:transparent">
                <h5 class="modal-title" style="padding:0rem 3rem 0 3rem">Download Salary Surveys</h5>
            </div>
            <div class="modal-body" style="padding:1rem 3rem 3rem 3rem">
                @if ($message = Session::get('success'))
                <div class="alert alert-success" role="alert">
                    {!! $message !!}
                </div>
                @endif

                <div class="container">
                    <form action="/downloadsurvey" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-sm-6">
                                <input class="d1" type="text" id="first_name" name="first_name" placeholder="First Name" required>
                            </div>
                            <div class="col-sm-6">
                                <input class="d1" type="text" id="last_name" name="last_name" placeholder="Last Name" required>
                            </div>
                        </div>

                        <div class="row">                                
                            <div class="col-sm-12" style="margin-top:2rem">
                                <input class="d1" type="email" id="lname" name="email" placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="row mt2">  
                            <div class="col-sm-4">
                                <select class="form-select d1" id="phone_code" name="phone_code" aria-label="Default select example">
                                    <?php foreach ($country as $row => $value) { ?>
                                        <option value="{{ $value->phonecode }}">{{ $value->iso3.' ('.$value->phonecode.')' }}</option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-sm-8">
                                <input class="d1" type="text" id="phone" name="phone" placeholder="Your Phone">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 mt2">
                                <select class="form-select d1" id="currently_hiring" name="currently_hiring" aria-label="Default select example">
                                    <option value="" disabled selected>Currently Hiring</option>
                                    <?php foreach ($masterHiring as $row => $value) { ?>
                                        <option value="{{ $value->name }}">{{ $value->name }}</option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-sm-6 mt2">
                                <select class="form-select d1" id="specialization" name="specialization" aria-label="Default select example">
                                    <option value="" disabled selected>Specialization</option>
                                    <?php foreach ($masterSpecialization as $row => $value) { ?>
                                        <option value="{{ $value->name }}">{{ $value->name }}</option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-sm-12 mt2">
                                <label><input type="checkbox"> I consent to Abblesearch processing my personal information in accordance with the Abblesearch Privacy Statement</label>
                            </div>
                        </div>
                        <button style="width:200px;height:40px;background-color:#19337f; color:white;border-color: transparent;float:left" class="btn center btn-apply mt2" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>






@endsection

@section('jquery')
<script>
    $(document).ready(function () {
        //$("#myModal").modal({backdrop: 'static', keyboard: false});
        $("#myModal").modal('show');
    });

    $(document).ready(function () {
        $("#phone").inputFilter(function (value) {
            return /^\d*$/.test(value);    // Allow digits only, using a RegExp
        }, "Only digits allowed");
    });

    // Restricts input for the set of matched elements to the given inputFilter function.
    (function ($) {
        $.fn.inputFilter = function (callback, errMsg) {
            return this.on("input keydown keyup mousedown mouseup select contextmenu drop focusout", function (e) {
                if (callback(this.value)) {
                    // Accepted value
                    if (["keydown", "mousedown", "focusout"].indexOf(e.type) >= 0) {
                        $(this).removeClass("input-error");
                        this.setCustomValidity("");
                    }
                    this.oldValue = this.value;
                    this.oldSelectionStart = this.selectionStart;
                    this.oldSelectionEnd = this.selectionEnd;
                } else if (this.hasOwnProperty("oldValue")) {
                    // Rejected value - restore the previous one
                    $(this).addClass("input-error");
                    this.setCustomValidity(errMsg);
                    this.reportValidity();
                    this.value = this.oldValue;
                    this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
                } else {
                    // Rejected value - nothing to restore
                    this.value = "";
                }
            });
        };
    }(jQuery));
</script>
@endsection