@extends('layouts.master')

@section('content')

<div class="main-banner" style="background-image: none;color:transparent!important; padding: 0px 0px 0px 0px;">
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
    <div class="row" style="margin-bottom:3rem; margin-top:3rem">
        @if ($message = Session::get('success'))
        <div class="alert alert-success" role="alert">
            {!! $message !!}
        </div>
        @endif

        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-6">
                    <h5 style="margin: 0px 0px 0px 0px">{{ $model->position }} ({{ $model->place }})</h5>
                    <h4>{{ $model->role }}</h4>
                </div>
                <div class="col-sm-6" style="text-align: right!important">
                    <h4 style="margin: 0px 0px 0px 0px">{{ $model->place }}</h4>
                    <p style="margin: 0px 0px 0px 0px;font-size:14pt;text-align:right">Posted {{ $model->updated_at }}</p>
                </div>
            </div>
        </div>
        <div class="col-sm-12">
            {!! $model->description !!}
            <br>
            <div style="margin:1.5rem 0 0 0;">
                <button style="width:200px;height:40px;background-color:#19337f; color:white;border-color: transparent;float:left" class="btn center btn-apply" type="button">Apply</button>
            </div>
        </div>
    </div>
</div>

<div id="myModal" class="modal fade">
    <div class="modal-dialog  modal-lg modal-dialog-centered">
        <div class="modal-content" style="border-radius:1.5rem!important">
            <div class="modal-header" style="border:transparent">
                <h5 class="modal-title" style="padding:0rem 3rem 0 3rem">Form Apply Job</h5>
            </div>
            <div class="modal-body" style="padding:1rem 3rem 3rem 3rem">
                <div class="container">
                    <form action="/jobapply" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <input class="d1 hidden" style="display:none;" type="text" id="job_id" name="job_id" value="{{ $model->id }}">
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
                            <div class="col-sm-12 mt2">
                                <div class="form-group">
                                     <label for="cv">Cv : </label>
                                    <input type="file" accept=".doc, .docx, .pdf" class="form-control-file" id="cv" name="cv" class="cv">
                                </div>
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
    $(".btn-apply").click(function () {
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
