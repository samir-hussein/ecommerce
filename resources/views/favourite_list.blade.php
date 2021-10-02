@extends('layouts.main')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/customer_profile.css') }}">
@endsection

@section('content')

    <div id="tabs" class="uk-box-shadow-small">
        @include('layouts.customer_profile_tabs')

        <section id="profile" class="mt-3">
            <div class="uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-4@l m-0" uk-grid>
                <div>
                    <div class="uk-card uk-card-default">
                        <div class="uk-card-media-top">
                            <a href="#"><img src="{{ asset('images/product2.jpg') }}" alt=""></a>
                        </div>
                        <div class="uk-card-body">
                            <a href="#" class="text-decoration-none">
                                <h3 class="uk-card-title">Lace Up Sneakers Modern – White</h3>
                            </a>
                            <p>EGP 89 - EGP 115</p>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="nav-icon" uk-tooltip="Add To Cart">
                                <i class="fas fa-cart-plus icon-color"></i>
                            </a>
                            <a href="#" class="nav-icon" uk-tooltip="Remove From Wish List">
                                <i class="fas fa-trash icon-color"></i>
                            </a>
                            <input data-role="rating" data-value="3" data-static="true" data-stared-color="#7fad39">
                        </div>
                    </div>
                </div>

                <div>
                    <div class="uk-card uk-card-default">
                        <div class="uk-card-body">
                            <a href="#" class="text-decoration-none">
                                <h3 class="uk-card-title">Lace Up Sneakers Modern – White</h3>
                            </a>
                            <p>EGP 89 - EGP 115</p>
                        </div>
                        <div class="uk-card-media-bottom">
                            <a href="#"><img src="{{ asset('images/product3.jpg') }}" alt=""></a>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="nav-icon" uk-tooltip="Add To Cart">
                                <i class="fas fa-cart-plus icon-color"></i>
                            </a>
                            <a href="#" class="nav-icon" uk-tooltip="Remove From Wish List">
                                <i class="fas fa-trash icon-color"></i>
                            </a>
                            <input data-role="rating" data-value="2" data-static="true" data-stared-color="#7fad39">
                        </div>
                    </div>
                </div>

                <div>
                    <div class="uk-card uk-card-default">
                        <div class="uk-card-media-top">
                            <img src="{{ asset('images/product1.jpg') }}" alt="">
                        </div>
                        <div class="uk-card-body">
                            <h3 class="uk-card-title">Lace Up Sneakers Modern – White</h3>
                            <p>EGP 89 - EGP 115</p>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="nav-icon" uk-tooltip="Remove From Cart">
                                <i class="fas fa-cart-plus icon-color"></i>
                            </a>
                            <a href="#" class="nav-icon">
                                <i class="fas fa-trash icon-color"></i>
                            </a>
                            <input data-role="rating" data-value="3" data-static="true" data-stared-color="#7fad39">
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
