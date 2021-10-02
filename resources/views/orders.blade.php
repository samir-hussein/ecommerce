@extends('layouts.main')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/customer_profile.css') }}">
@endsection

@section('content')

    <div id="tabs" class="uk-box-shadow-small">
        @include('layouts.customer_profile_tabs')

        <section id="profile" class="mt-3">
            <div class="card uk-box-shadow-small order">
                <div class="card-header uk-heading-bullet">
                    12 April 2012.
                </div>
                <div class="card-body">
                    <div class="card m-auto">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset('images/product1.jpg') }}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text m-0">120 EGP</p>
                                    <p class="card-text">This is a wider card with supporting text below as a natural
                                        lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text m-0">pieces number : 3</p>
                                    <p class="card-text"><small class="text-muted"><input data-role="rating"
                                                data-value="4" data-static="true" data-stared-color="#7fad39"></small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="card m-auto">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset('images/product3.jpg') }}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text m-0">120 EGP</p>
                                    <p class="card-text">This is a wider card with supporting text below as a natural
                                        lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text m-0">pieces number : 3</p>
                                    <p class="card-text"><small class="text-muted"><input data-role="rating"
                                                data-value="4" data-static="true" data-stared-color="#7fad39"></small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card uk-box-shadow-small order">
                <div class="card-header uk-heading-bullet">
                    10 July 2013.
                </div>
                <div class="card-body">
                    <div class="card m-auto">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset('images/product4.jpg') }}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text m-0">120 EGP</p>
                                    <p class="card-text">This is a wider card with supporting text below as a natural
                                        lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text m-0">pieces number : 3</p>
                                    <p class="card-text"><small class="text-muted"><input data-role="rating"
                                                data-value="4" data-static="true" data-stared-color="#7fad39"></small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('script')
    <script>
        let url = window.location.href;
        url = url.split("/");
        url = url[url.length - 1];
        $("#" + url).addClass("active");
    </script>
@endsection
