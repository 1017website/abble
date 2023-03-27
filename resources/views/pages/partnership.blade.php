@extends('layouts.master')

@section('content')

<div class="main-banner" style="background-image: url({{isset($banner) ? $urlBackend.$banner->partnership : asset('assets/images/bannerpartnership.jpg')}}); padding: 120px 0px 300px 0px;">
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
    <h4>Charity &amp; Industry Partnerships</h4>
    <div class="row row-cols-1 row-cols-sm-2" style="margin-top:3rem">

        <?php if (isset($model)) { ?>
            <?php foreach ($model as $row => $value) { ?>
                <div class="col-sm-6" style="padding-bottom:1rem;">
                    <div class="card shadow-sm" style="border:transparent">
                        <img class="card-img-top" width="100%" height="100%" src="{{ $urlBackend.$value->image }}" alt="" focusable="false">
                        <div class="card-body" style="background-color: #ececec">
                            <p class="card-text" style="text-align: justify">{{ substr(strip_tags($value->description), 0, 300) }}</p>
                            <button type="button" class="btn btn-primary btn-modal-{{ $value->id }}" style="background-color: transparent;border:transparent;color:black;font-weight: bold;padding-left:0">Read More...</button>
                        </div>
                    </div>
                </div>

                <div id="myModal-{{ $value->id }}" class="modal fade">
                    <div class="modal-dialog  modal-lg modal-dialog-centered">
                        <div class="modal-content" style="border-radius:0">
                            <div class="modal-body">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <img width="100%" height="100%" src="{{ $urlBackend.$value->image }}">
                                        </div>
                                    </div>
                                    <div class="col-sm-12" style="text-align: justify">
                                        {!! $value->description !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <script>
                    $(".btn-modal-{{ $value->id }}").click(function () {
                        $("#myModal-{{ $value->id }}").modal('show');
                    });
                </script>
            <?php } ?>
        <?php } ?>

    </div>
</div>


@endsection


@section('jquery')